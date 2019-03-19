<?php

require 'Auth.php';
session_start();
Auth::init(require 'users.php');