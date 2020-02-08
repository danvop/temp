<?php

$result = array_count_values('test phrase');

var_dump($result);

$array = ['1', 2,'test',4, 4, 2, '1', 1];
$result = array_count_values($array);
var_dump($result);