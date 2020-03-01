<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  li {
    list-style: none;
  }
  a {
    text-decoration: none;
  }
  a[active] {
    color: red;
  }
  </style>
</head>
<body>
<?php

$menu = [
  'home' => 'home',
  'about' => 'about',
  'contacts' => 'contacts',
  'index' => 'index'
];

function buttonIsActive($url){
    if(strpos($_SERVER['PHP_SELF'], $url) !== false){
    
    return true;
  } 
}

var_dump(buttonIsActive('index'));

?>
<ul>
  <?php foreach($menu as $key => $value) : ?>
  <li>
    <a href="<?= $_SERVER['PHP_SELF'].'?'.$key ?>" 
    <?= buttonIsActive($key) ? 'active' : '' ?>
    
    > 
      <?= $value ?>
    </a>
  </li>
  
  <?php endforeach?>
</ul>
</body>
</html>