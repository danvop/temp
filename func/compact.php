<?php

$name = 'John';
$email = 'john@mail.com';
$age = 24;

$parameters = compact('name', 'email', 'age');
var_dump($parameters);

$sql = sprintf('insert INTO table_name (%s) values (%s)',
  implode(', ', array_keys($parameters)),
  ':' . implode(', :', array_keys($parameters))
);

print_r($sql);