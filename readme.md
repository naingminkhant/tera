Calculator For Laravel
=======================

<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>

In contrary to all other packages wherein it requires that you have the geoip database in your filesystem, this library calls a free service
So you dont really have to worry about downloading and maintaining geoip data from Maxmind in your own server.

Just install the package, add the config and it is ready to use!


Requirements
============

* PHP >= 5.0
* "laravel/framework": "^5.0.*",

Quick Installation
==================

    composer require naingminkhant/calculator

Add the service provider in your config/app.php

Service Provider

    Naingminkhant\Calculator\CalculatorServiceProvider::class,
    
Usage
=====

In Browser Url
point_your_project + calculator
point_your_project + add/number1/number2

Example
=======
In Browser Url
localhost:8000/calculator
localhost:8000/add/1/2


Credits
=======

* https://devdojo.com/blog/tutorials/how-to-create-a-laravel-package
