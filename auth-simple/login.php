<?php
require('bootstrap.php');

if(Auth::check()) {
    header('Location: index.php');
}
else {
    require('views/view.login.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login  = $_POST['name'];
    $pass   = $_POST['password'];

    if(Auth::login($login, $pass)){
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
    
}

