# Laravel API Authentication Project

This is a Laravel-based backend API that includes:

- 🔐 User Registration
- 🔓 Login & Logout
- 👤 Profile Route (protected)
- ✅ Token-based Authentication using Laravel Sanctum
- 🧪 Tested via Postman
- ⚙️ Rate limiting applied on protected routes

## API Routes

- `POST /api/register` – Register a new user
- `POST /api/login` – Login and receive token
- `GET /api/profile` – View user profile (needs Bearer token)
- `POST /api/logout` – Logout user

## Postman Testing

All routes were tested using Postman with proper headers and bearer token.

---

## Setup Instructions

```bash
git clone <your-repo-link>
cd your-project-name
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
