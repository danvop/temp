<?php
session_start();
//unset all sessions
session_unset();
//redirect to start point
header('Location: index.php');
exit();