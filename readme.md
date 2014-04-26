# Enhanced Laravel Project Seeder

[![License](http://img.shields.io/packagist/l/edrands/laravel-seeder.svg?style=flat)](https://packagist.org/packages/edrands/laravel-seeder)
[![Build Status](http://img.shields.io/travis/edrands/laravel-seeder.svg?style=flat)](https://travis-ci.org/edrands/laravel-seeder)
[![Latest Stable Version](http://img.shields.io/packagist/v/edrands/laravel-seeder.svg?style=flat)](https://packagist.org/packages/edrands/laravel-seeder)

## About the Enhanced Laravel Project Seeder

After starting a few projects with Laravel, I realized I was repeating myself a lot in my first few steps, setting up the same things just to get going. This project is meant to alleviate that problem, so I can get rolling on the actual project fast.

This package is not meant to be a dependency for other projects. It's meant to be used with Composer's `create-project` command.

This is meant mostly for my benefit, but if it's helpful to you, you're welcome to start your own Laravel based projects with it, or fork it and customize it to your needs.

### What's In This Thing

[Laravel 4.0](http://laravel.com/), of course. Wouldn't be much of a Laravel project seeder without that.

Testing is important, if for no other reason than the developer's peace of mind. Therefore the seeder includes [Codeception](http://codeception.com/), [Mockery](https://github.com/padraic/mockery) and [Hamcrest](https://github.com/davedevelopment/hamcrest-php). These tools make testing easier, almost fun, and therefore more likely testing will actually happen.

Continuous integration is a great way to automate testing and maintenance. Configuration files for several CI services are included. [Travis](https://travis-ci.org) runs all the tests on push and pull requests. [Scrutinizer](https://scrutinizer-ci.com) runs a variety of scripts to check your code for security holes, sloppy code, and coding style problems. Keep in mind you still need to turn each service on for your project.

IDEs and code editors don't really understand the Laravel facade system, and so they have trouble giving you code suggestions and documentation for a lot of Laravel's functionality. To compensate for this, the [Laravel IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper) is included. Each time you update in Composer, a helper file is generated that your editor can understand.

[Laravel 4 Debugbar](https://github.com/barryvdh/laravel-debugbar) is enabled in the development environment to provide information overload about what's happening when you load a page.


### Installing

[Composer](http://getcomposer.org) must be installed on your system in order for this to work. But if you're working with Laravel, you probably have it installed all ready anyway.

1. Open a command prompt in the directory where you keep your projects. For example, I'm running Windows and use `c:\websites`
2. Now run `composer create-project edrands/laravel-seeder project-name` replacing `project-name` with the name of the directory for all your project's file. This must be a non-existent or empty directory.
3. Wait while Composer automatically downloads the seed, installs all the dependencies, generates an IDE code completion helper, and generates a random hashing key.
4. Follow the steps in `todo.md` in the root directory of your new project.
5. Get working on the specifics of your project.


### Contributing

If you'd like to contribute to this project, you can help in the typical GitHub way.

Issues and pull requests should be filed on the [edrands/laravel-seeder](https://github.com/edrands/laravel-seeder) repository.

Please keep in mind that since this seed is meant for the way I work, if you'd like customizations specific to the way you work, your best option is to fork this project and modify from there.

If your issue or pull request is related to Laravel itself, please see below about how to contribute to Laravel.

### License

The Enhanced Laravel Project Seeder is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


## About Laravel

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://img.shields.io/packagist/dm/laravel/framework.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Version](http://img.shields.io/github/tag/laravel/framework.svg)](https://github.com/laravel/framework/releases)
[![Dependency Status](https://www.versioneye.com/php/laravel:framework/badge.svg)](https://www.versioneye.com/php/laravel:framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


## Example Readme:
You can delete from here up for your project's readme.

# Project Title

## About

A description of this project, what it's about, what it does, how it works and why the reader should care.

## Technologies

+ [PHP](http://www.php.net/) 5.4+
+ [Laravel Framework](http://laravel.com/)

## Standards

Work on this project should strive to adhere to the following standards and models:

+ PHP:[PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) and therefore [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md)
+ Git:[Git Branching Model](http://nvie.com/posts/a-successful-git-branching-model/)
+ Versioning:[Semantic Versioning v2.*](http://semver.org/)

## License

This project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

Portions of this project may be subject to other copyrights and licenses.
