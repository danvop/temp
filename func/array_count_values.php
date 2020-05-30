<?php

$result = array_count_values('test phrase');

var_dump($result);
$array = [1,1,2,3,4];
$array_with_str = ['1', 2,'test',4, 4, 2, '1', 1];

echo 'sum array values: ';
echo array_sum($array);
echo '</br>';

echo 'count array values:'.'</br>';
var_dump(array_count_values($array));

$result = array_count_values($array_with_str);
var_dump($result);