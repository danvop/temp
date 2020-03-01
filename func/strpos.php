<?php

$url = $_SERVER['PHP_SELF'];

echo $url;
//0 is equal to == false, but not identical 
var_dump(strpos($url,'/temp') == false);
var_dump(strpos($url,'/temp') === false);
