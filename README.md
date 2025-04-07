# Site1 API

A simple API built with Lumen PHP Framework for managing users and jobs.

## Features

- User management (CRUD operations)
- Job management
- RESTful API endpoints

## Setup

1. Clone the repository
2. Install dependencies:
```bash
composer install
```
3. Configure your database in `.env`
4. Run migrations:
```bash
php artisan migrate
```
5. Start the server:
```bash
php -S localhost:8000 -t public
```

## API Endpoints

- GET /users - Get all users
- POST /users - Create a new user
- GET /users/{id} - Get user by ID
- PUT /users/{id} - Update user
- DELETE /users/{id} - Delete user
- GET /usersjob - Get all jobs
- GET /usersjob/{id} - Get job by ID

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
