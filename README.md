# Laravel Sistem Inventory

Pre-Requirements:
- PHP >= 7.1.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Composer

Instalation:
- git clone https://github.com/berseckchr00/bosso_system
- composer install
- php artisan serve [http://localhost:8000]

Usage:
- Data Base:
	- Config database in .env file.
	- Migrations model [https://laravel.com/docs/5.7/migrations#generating-migrations]
  	- Create database "bosso" [InnoDB]
  	- Run Migrations [php artisan migrate]
  	- In case of Rollback [php artisan migrate:rollback]
