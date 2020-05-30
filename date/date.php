<?php

$array_of_types = [
    'a',
    'A',
    'B',
    'c',
    'd',
    'D',
    'e',
    'F',
    'g',
    'G',
    'h',
    'H',
    'i',
    'I',
    'j',
    'l',
    'L',
    'm',
    'M',
    'n',
    'N',
    'o',
    'O',
    'P',
    'r',
    's',
    'S',
    't',
    'T',
    'U',
    'w',
    'W',
    'y',
    'Y',
    'z',
    'Z'
];
echo '</br>';
foreach($array_of_types as $item) {

    echo $item.': '.date($item).'</br>';

}