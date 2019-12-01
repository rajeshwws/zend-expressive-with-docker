# Expressive Skeleton with Docker

Build a PHP web development environment with Docker Compose, PHP 7.2, Composer, Nginx web server, MySQL database, and install Zend Expressive for a PHP project. 

Begin developing PSR-15 middleware applications in seconds!

zend-expressive builds on zend-stratigility to provide a minimalist PSR-15 middleware framework for PHP with routing, DI container, optional templating, and optional error handling capabilities.

Installation
Development environment requirements :

Docker >= 17.06 CE
Docker Compose
Setting up your development environment on your local machine :

$ git clone https://github.com/rajeshwws/zend-expressive-with-docker.git
$ cd zend-expressive-with-docker
$ docker-compose run --rm --no-deps webapp composer install
$ docker-compose up -d
Now you can access the application via http://localhost:8000.
