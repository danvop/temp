<?php

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo $faker->name;
echo "<br>";
echo $faker->name;
echo "<br>";
print_r($faker->text);
