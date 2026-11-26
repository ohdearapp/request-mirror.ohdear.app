#!/usr/bin/env bash
# Generates the broken test certificates that Oh Dear's certificate health tests connect to.
# install.sh runs it on the server and writes the files to /etc/caddy/certs.
# The private keys stay on the server. This repository is public, so they are never committed.
# It does nothing when the certificates already exist. Delete them first to make new ones.
#
# Every certificate is valid for 10 years, so nobody has to renew them.
# The checker also reports "valid for too long" for them. The tests only look for the issue they are about.
set -euo pipefail

out="${1:?Usage: generate.sh <output directory>}"
cd "$out"

if [ -f self-signed.crt ] && [ -f untrusted-root.crt ] && [ -f sha1-intermediate.crt ]; then
    exit 0
fi

domain=request-mirror.ohdear.app
days=3650
work="$(mktemp -d)"
trap 'rm -rf "${work:?}"' EXIT

leaf_extensions() {
    printf 'basicConstraints=critical,CA:false\nkeyUsage=critical,digitalSignature,keyEncipherment\nextendedKeyUsage=serverAuth\nsubjectAltName=DNS:%s\n' "$1"
}

ca_extensions() {
    printf 'basicConstraints=critical,CA:true\nkeyUsage=critical,keyCertSign,cRLSign\nsubjectKeyIdentifier=hash\nauthorityKeyIdentifier=keyid:always\n'
}

# self-signed: a certificate that signs itself.
host="self-signed.$domain"
openssl req -x509 -newkey rsa:2048 -nodes -sha256 -days "$days" \
    -keyout self-signed.key -out self-signed.crt \
    -subj "/CN=$host" -addext "subjectAltName=DNS:$host" 2>/dev/null

# untrusted-root: a certificate signed by our own root, which no browser trusts.
openssl req -x509 -newkey rsa:2048 -nodes -sha256 -days "$days" \
    -keyout "$work/untrusted-root-ca.key" -out "$work/untrusted-root-ca.crt" \
    -subj "/O=Oh Dear test certificates/CN=Oh Dear Untrusted Test Root" \
    -addext "basicConstraints=critical,CA:true" -addext "keyUsage=critical,keyCertSign,cRLSign" 2>/dev/null
host="untrusted-root.$domain"
openssl req -newkey rsa:2048 -nodes -keyout untrusted-root.key -out "$work/untrusted-root.csr" -subj "/CN=$host" 2>/dev/null
openssl x509 -req -sha256 -days "$days" -in "$work/untrusted-root.csr" \
    -CA "$work/untrusted-root-ca.crt" -CAkey "$work/untrusted-root-ca.key" -CAcreateserial \
    -extfile <(leaf_extensions "$host") -out untrusted-root.crt 2>/dev/null

# sha1-intermediate: our own root signs an intermediate with SHA-1, and that intermediate signs the leaf with SHA-256.
# The server sends the leaf and the intermediate, so the checker sees the SHA-1 signature.
openssl req -x509 -newkey rsa:2048 -nodes -sha256 -days "$days" \
    -keyout "$work/sha1-root-ca.key" -out "$work/sha1-root-ca.crt" \
    -subj "/O=Oh Dear test certificates/CN=Oh Dear SHA-1 Test Root" \
    -addext "basicConstraints=critical,CA:true" -addext "keyUsage=critical,keyCertSign,cRLSign" 2>/dev/null
openssl req -newkey rsa:2048 -nodes -keyout "$work/sha1-intermediate-ca.key" -out "$work/sha1-intermediate-ca.csr" \
    -subj "/O=Oh Dear test certificates/CN=Oh Dear SHA-1 Test Intermediate" 2>/dev/null
openssl x509 -req -sha1 -days "$days" -in "$work/sha1-intermediate-ca.csr" \
    -CA "$work/sha1-root-ca.crt" -CAkey "$work/sha1-root-ca.key" -CAcreateserial \
    -extfile <(ca_extensions) -out "$work/sha1-intermediate-ca.crt" 2>/dev/null
host="sha1-intermediate.$domain"
openssl req -newkey rsa:2048 -nodes -keyout sha1-intermediate.key -out "$work/sha1-intermediate.csr" -subj "/CN=$host" 2>/dev/null
openssl x509 -req -sha256 -days "$days" -in "$work/sha1-intermediate.csr" \
    -CA "$work/sha1-intermediate-ca.crt" -CAkey "$work/sha1-intermediate-ca.key" -CAcreateserial \
    -extfile <(leaf_extensions "$host") -out "$work/sha1-intermediate-leaf.crt" 2>/dev/null
cat "$work/sha1-intermediate-leaf.crt" "$work/sha1-intermediate-ca.crt" > sha1-intermediate.crt

echo "Generated:"
for crt in self-signed.crt untrusted-root.crt sha1-intermediate.crt; do
    echo "  $crt"
    openssl crl2pkcs7 -nocrl -certfile "$crt" | openssl pkcs7 -print_certs -noout -text |
        grep -E "Subject:|Issuer:|Signature Algorithm" | sort -u | sed 's/^ */    /'
done
