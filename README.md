# Learning Hub of PHP

A modern learning platform for PHP concepts with practical examples, admin functionality, database connectivity, and attractive UI.

## Features

- Responsive landing page
- Admin login and dashboard
- PHP + MySQL database connection
- Session-based authentication
- Manage courses, users, and contact messages
- Modern UI using HTML5, CSS3, and JavaScript

## Local setup

1. Create a MySQL database:
   ```sql
   CREATE DATABASE learning_hub;
   ```
2. Import schema:
   ```bash
   mysql -u root -p learning_hub < database/schema.sql
   ```
3. Update database credentials in `config.php`.
4. Start PHP built-in server:
   ```bash
   php -S localhost:8000
   ```
5. Open `http://localhost:8000`.

## Default admin login

- Email: `admin@learninghub.test`
- Password: `admin123`

## Project structure

- `index.php` – frontend landing page
- `login.php` – admin login page
- `admin/dashboard.php` – protected admin dashboard
- `includes/` – PHP helpers, DB connection, auth checks
- `database/schema.sql` – database schema
- `assets/` – CSS and JS files
- `storage/sessions/` – session storage directory

## Notes

For production, always replace the default admin credentials and configure environment-based credentials.
