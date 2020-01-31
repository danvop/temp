<?php

$myCart = file('my-cart.txt');

foreach($myCart as $item) {
  echo $item;
}
var_dump($_SERVER["DOCUMENT_ROOT"].'/func/foo');

var_dump($_SERVER["PHP_SELF"]);


var_dump($myCart);