<?php

$name = "<script>alert();</script>";

$result = filter_var($name);

//  echo $name;

var_dump($result);


var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));