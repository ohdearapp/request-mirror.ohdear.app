# Request Mirror

A simple HTTP request & response service inspired by httpbin.org, built with Laravel.

## 🚀 Overview

Request Mirror allows you to inspect, test, and debug HTTP requests by mirroring back detailed information about the request you sent. Perfect for API development, webhook testing, and learning HTTP.

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

## 📄 License

This project is open-sourced software licensed under the [MIT license](LICENSE).
