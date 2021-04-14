# Bài tập Trainee

### demo các tính năng của package   https://github.com/FakerPHP/Faker


## Getting Started

### Installation

Faker requires PHP >= 7.1.

```shell
composer require fakerphp/faker
```
### Basic Usage

Use `Faker\Factory::create()` to create and initialize a Faker generator, which can generate data by accessing methods named after the type of data you want.

```php
<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
// 'Vince Sporer'
echo $faker->email();
// 'walter.sophia@hotmail.com'
echo $faker->text();
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
