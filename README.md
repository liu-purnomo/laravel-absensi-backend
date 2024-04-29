# Absensi Laravel Backend

![Auth Screen](/screen/auth.png)

![Auth Screen](/screen/user.png)

![Auth Screen](/screen/company-detail.png)

![Auth Screen](/screen/permission.png)

![Auth Screen](/screen/permission-detail.png)

Absensi Laravel Backend is a backend application for an employee attendance system built using the Laravel 11 framework. This application provides APIs that can be integrated with a frontend application to efficiently manage employee attendance data.

## Requirements

- PHP >= 8.3
- Composer
- MySQL or a database compatible with Laravel

## Installation

To run this project in a local environment, follow these steps:

### 1. Clone the Repository

Clone this repository to your local machine using the command:

```
git clone https://github.com/liu-purnomo/absensi-laravel-backend.git
```

### 2. Enter the Project Directory

Change directory into the cloned project folder:

```
cd absensi-laravel-backend
```

### 3. Install Dependencies

Run Composer to install the necessary dependencies required by Laravel:

```
composer install
```

### 4. Configure Environment

Copy the `.env.example` file to `.env` and adjust its settings:

```
cp .env.example .env
```

Edit the `.env` file and set up your database configuration:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 5. Generate App Key

Generate an app key to secure your application:

```
php artisan key:generate
```

### 6. Link Storage

Link the storage folder to public to access files publicly:

```
php artisan storage:link
```

### 7. Run Database Migrations

After the database configuration is done, run the migrations to set up the database:

```
php artisan migrate
```

## Running the Server

To run the Laravel server locally, use the following command:

```
php artisan serve
```

The server will run at `http://localhost:8000`.

## License

This project is licensed under the [MIT License](LICENSE).
