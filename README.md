# ZAS APP Backend for Davivienda Hackathon 2024


# To run the project

Ensure you have the following software installed:

- PHP (version 8.0 or higher)
- Composer (latest version)
- Web Server (Apache, Nginx, or built-in PHP server)
- Database (MySQL, PostgreSQL, SQLite, or SQL Server)
- Git (to clone the repository)


```bash
# Install dependencies
composer install


# Copy .env.example and modify the variables
cp .env.example .env

# Generate a new application key
php artisan key:generate


# Update the .env file with your database credentials and other necessary configuration settings. This includes settings for the database connection:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password


# Run migrations
php artisan migrate

# Star Development

php artisan serve



```