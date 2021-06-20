## About Laravel 8 AJAX CRUD (L8AC)

This project is build with laravel 8 & ajax. Simple CRUD application using AJAX with laravel 8.

## Features

- Laaravel custom login with AJAX
- Login page loader animation
- More features will be added soon

## How to install?

- Clone the repository: git clone https://github.com/sarwaralamini/l8AC.git
- After clone navigate to project folder, open PowerShell/CMD and run command: **composer install** (Composer must be installed on your system)
- run command: **copy .env.example .env** to generate .env file
- run command php artisan key:generate
- Create database on your local/live server
- edit .env file and put correct database credentials
- run command **config:cache** (usually need after editing .env file)
- run command **php artisan migrate**
- run command **php artisan db:seed**
- now finally run command **php artisan serve**

Done now your application development server should be run at: **http://127.0.0.1:8000**

## Login & Default Credentials
visit: [http://127.0.0.1:8000/login](http://127.0.0.1:8000/login)
<br/><br/>
Login:<br/>
**email:** system@email.com<br/>
**pass :** password
