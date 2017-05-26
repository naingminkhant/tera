Calculator For Laravel
=======================

[![Laravel 5.4](https://img.shields.io/badge/Laravel-5.4-orange.svg?style=flat-square)](http://laravel.com)
[![License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](https://tldrlegal.com/license/mit-license)

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
