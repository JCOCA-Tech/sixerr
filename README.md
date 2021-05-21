# Sixerr

## Preview

![Preview](https://github.com/JCOCA-Tech/SIXERR/blob/main/public/png/Preview%20(2021-05-17%2005-31-11).png)

## Installation Instructions for Linux (Fedora, RHEL):

First let's open a Terminal window.

We need to install some tools (composer is a packagemanager for php. pretty awesome).

    sudo dnf install php php-zip php-mysqlnd php-mcrypt php-xml php-mbstring composer unzip nodejs
    
Test if it works.

    node -v
    npm -v
    
Now we clone this projects repository and move it into our apache folder.

    cd /var/www/
    git clone https://github.com/JCOCA-Tech/sixerr/
    
Let's fix our messed up permissions and generate a new key for the application.

    cd sixerr
    sudo ./setup.sh
    
Set up npm (install laravel mix).

    npm install
    
And now run some laravel mix tasks.

    npm run dev

You're ready to roll now. Run php artisan serve and ctrl+click on the 'localhost:8000/' in your console output or enter it into your browser manually.
You will see the views but you won't see any data yet. That's because this project uses a database and you have to set it up first.

Install mysql-server or mariadb-server (my choice) and create the database for our project (only type one, mariadb-server OR community-mysql-server).

    sudo dnf install {community-mysql-server|mariadb-server}
    
Enable it (again only works with one, mariadb OR mysqld).

    sudo systemctl enable {mysqld|mariadb}
    sudo systemctl start  {mysqld|mariadb}
    
Launch it!

    sudo mysql
    
You will now see your SQL-Shell. Type create database sixerr and exit.

    create database sixerr;
    exit;
    
Now connect our application to your newly created database.

    cp .env.example .env
    
Edit the connection and add your SQL-server's credentials.

    nano .env
    
Now we are able to migrate and seed (creating the schema on the DB and adding some dummy entries).

    php artisan migrate:fresh
    php artisan seed
    
Reload your website and: voilà! You got yourself a DB!


# Support and use Laravel if you want to. <br>(It's FOSS and really not that bad for PHP!) :P

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
