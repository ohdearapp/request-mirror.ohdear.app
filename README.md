# Request Mirror

A simple HTTP request & response service inspired by httpbin.org, built with Laravel and featuring authentic Oh Dear branding with the signature red color scheme and Soehne typography.

## 🚀 Overview

Request Mirror allows you to inspect, test, and debug HTTP requests by mirroring back detailed information about the request you sent. Perfect for API development, webhook testing, and learning HTTP.

## ✨ Features

- **Complete Request Mirroring**: See headers, query parameters, body content, and more
- **JSON Response Format**: All responses are returned in structured JSON
- **All HTTP Methods**: Support for GET, POST, PUT, PATCH, DELETE, and more
- **Special Endpoints**: Dedicated endpoints for specific use cases
- **No Rate Limits**: Perfect for testing and development
- **Authentic Oh Dear Branding**: Uses the real Oh Dear red color scheme, Soehne fonts, and official logo

## 🛠 Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd request-mirror.app
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Build assets:
```bash
npm run build
```

5. Serve the application:
```bash
php artisan serve
```

## 📡 API Endpoints

### HTTP Method Endpoints

#### GET `/get`
Returns information about a GET request.

**Example:**
```bash
curl "https://request-mirror.app/get?param1=value1&param2=value2"
```

**Response:**
```json
{
  "args": {
    "param1": "value1",
    "param2": "value2"
  },
  "headers": {
    "host": "request-mirror.app",
    "user-agent": "curl/7.64.1",
    "accept": "*/*"
  },
  "origin": "127.0.0.1",
  "url": "https://request-mirror.app/get?param1=value1&param2=value2"
}
```

#### POST `/post`
Returns information about a POST request.

**Example with JSON:**
```bash
curl -X POST https://request-mirror.app/post \
  -H "Content-Type: application/json" \
  -d '{"key": "value", "nested": {"data": "test"}}'
```

**Example with Form Data:**
```bash
curl -X POST https://request-mirror.app/post \
  -d "username=john&email=john@example.com"
```

**Response:**
```json
{
  "args": {},
  "data": "{\"key\": \"value\", \"nested\": {\"data\": \"test\"}}",
  "files": {},
  "form": {},
  "headers": {
    "content-type": "application/json",
    "host": "request-mirror.app",
    "user-agent": "curl/7.64.1"
  },
  "json": {
    "key": "value",
    "nested": {
      "data": "test"
    }
  },
  "method": "POST",
  "origin": "127.0.0.1",
  "url": "https://request-mirror.app/post"
}
```

#### PUT `/put`
Returns information about a PUT request.

#### PATCH `/patch`
Returns information about a PATCH request.

#### DELETE `/delete`
Returns information about a DELETE request.

### Special Endpoints

#### ANY `/anything`
Accepts any HTTP method and returns request information.

**Example:**
```bash
curl -X POST https://request-mirror.app/anything \
  -H "X-Custom-Header: custom-value" \
  -d "test data"
```

#### ANY `/anything/{path}`
Captures any path after `/anything` and includes it in the response.

**Example:**
```bash
curl https://request-mirror.app/anything/api/v1/users/123
```

**Response includes:**
```json
{
  "path": "api/v1/users/123",
  // ... other request data
}
```

#### GET `/headers`
Returns only the request headers.

**Example:**
```bash
curl https://request-mirror.app/headers \
  -H "Authorization: Bearer token123" \
  -H "X-API-Key: abc123"
```

**Response:**
```json
{
  "headers": {
    "authorization": "Bearer token123",
    "x-api-key": "abc123",
    "host": "request-mirror.app",
    "user-agent": "curl/7.64.1"
  }
}
```

#### GET `/ip`
Returns the client's IP address.

**Example:**
```bash
curl https://request-mirror.app/ip
```

**Response:**
```json
{
  "origin": "127.0.0.1"
}
```

#### GET `/user-agent`
Returns the client's User-Agent string.

**Example:**
```bash
curl https://request-mirror.app/user-agent
```

**Response:**
```json
{
  "user-agent": "curl/7.64.1"
}
```

## 🔧 Development

### Running Tests

Run the full test suite:
```bash
php artisan test
```

Run specific test files:
```bash
php artisan test tests/Feature/RequestMirrorTest.php
php artisan test tests/Unit/RequestProcessingTest.php
```

### Code Quality

Check code style with Laravel Pint:
```bash
./vendor/bin/pint
```

## 📖 Use Cases

### API Development
Test your API clients and debug HTTP requests during development:

```bash
# Test your API client against request-mirror
curl -X POST https://request-mirror.app/post \
  -H "Content-Type: application/json" \
  -H "Authorization: Bearer your-token" \
  -d '{"user_id": 123, "action": "update"}'
```

### Webhook Testing
Inspect webhook payloads and validate your webhook implementations:

```bash
# Point your webhook to request-mirror to see the payload
# Webhook URL: https://request-mirror.app/anything/webhook/github
```

### Learning HTTP
Understand how HTTP requests work and experiment with different methods:

```bash
# See how different headers affect the request
curl https://request-mirror.app/get \
  -H "Accept: application/json" \
  -H "Accept-Language: en-US,en;q=0.9" \
  -H "Cache-Control: no-cache"
```

## 🌐 Response Format

All endpoints return responses in the following JSON structure:

| Field     | Type   | Description                                    |
|-----------|--------|------------------------------------------------|
| `args`    | Object | Query string parameters                        |
| `data`    | String | Raw request body content                       |
| `files`   | Object | Uploaded files (currently empty)              |
| `form`    | Object | Form data (for form-encoded requests)         |
| `headers` | Object | Request headers (keys normalized to lowercase)|
| `json`    | Object | Parsed JSON data (for JSON requests)          |
| `method`  | String | HTTP method used                               |
| `origin`  | String | Client IP address                              |
| `url`     | String | Complete request URL                           |

### Special Fields

Some endpoints include additional fields:

- `/anything/{path}`: Includes `path` field with the captured path
- `/headers`: Only includes `headers` field
- `/ip`: Only includes `origin` field
- `/user-agent`: Only includes `user-agent` field

## 🎨 About Oh Dear

Request Mirror is brought to you by [Oh Dear](https://ohdear.app), a comprehensive website monitoring service that helps you keep track of your applications' uptime, SSL certificates, and much more. This service features the authentic Oh Dear branding including:

- **Signature Red Colors**: Using the official Oh Dear red color palette (#ff3900)
- **Soehne Typography**: The same professional font family used across Oh Dear
- **Official Logo**: Featuring the real Oh Dear logo and visual identity

### Why Oh Dear?

- **Comprehensive Monitoring**: Uptime, SSL, cron jobs, and more
- **Developer-Friendly**: Built by developers, for developers
- **Reliable Notifications**: Get alerted when something goes wrong
- **Beautiful Dashboard**: Clean, intuitive interface

[Visit Oh Dear →](https://ohdear.app)

## 📝 License

This project is open-sourced software licensed under the [MIT license](LICENSE).

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## 🐛 Issues

If you discover any issues, please create an issue on the GitHub repository.

---

<p align="center">
  <strong>Request Mirror</strong> - A simple HTTP request & response service<br>
  Powered by <a href="https://ohdear.app">Oh Dear</a>
</p>