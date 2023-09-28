<?php

require_once __DIR__ . '/../_.php';
require_once __DIR__ . '/Faker/src/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();


$q = 'INSERT INTO employees VALUES ';
$values = '';
for ($i = 0; $i < 10; $i++) {
  $salary = rand(10000, 99999);
  $user_employee_fk = rand(5,10);
  // Think about the null, does the database create the employee
  // id? Or is an ID from the user's table?
  $values .= "($user_employee_fk, $salary),";
}
$values = rtrim($values, ",");
$q .= $values;

echo $q;
$db = _db();
$sql = $db->prepare($q);
$sql->execute();
