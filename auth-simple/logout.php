<?php

require('bootstrap.php');

if(Auth::check()){
    Auth::logout();
}

header('Location: index.php');