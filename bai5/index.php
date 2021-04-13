<?php
require_once __DIR__ . '/vendor/autoload.php';
//require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();
//Fake name
echo $faker->name();

//Fake Person
echo $faker->lastName();
echo $faker->firstNameFemale();
echo $faker->firstNameMale();

//Fake Address
echo $faker->address();
echo $faker->city();
echo $faker->streetName();
echo $faker->country();

//Fake PhoneNumber
echo $faker->phoneNumber();
echo $faker->e164PhoneNumber();

//Fake Email
echo $faker->email();

//Fake text
echo $faker->text();