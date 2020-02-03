<div>
<?php

$array = array('hello', 'salut', 'nihao', 'bonne journee');
print_r($array);


function my_print($val, $key){
  $val = $key.$val;
  echo "<p>".$val."</p>";
}

array_walk($array,'my_print');

print_r($array);

function arrray(){
  echo 'test';
}

array_walk($array,'arrray');


?>
</div>