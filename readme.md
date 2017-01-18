# A Simple Guestbook Web Application for Your Company

## Installation

Clone the project

```
git clone https://github.com/cleaniquecoders/guestbook.git
```

Go to project directory

```
cd guestbook
```

Install project dependencies

```
composer install
```

Create a database using PhpMyAdmin - guestbook

Then duplicate `.env.example` to `.env`

```
cp .env.example .env
```

Setup `.env` - set database connection

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=guestbook
DB_USERNAME=root
DB_PASSWORD=password
```

Generate Application Key

```
php artisan key:generate
```

Generate Configuration Cache

```
php artisan config:cache
```

Then reload the Laragon or run `php artisan serve`.
