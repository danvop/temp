<?php
// kill cookie rememberme
setcookie('rememberme', '', time() - 3600);
header('location:index.php');
exit();

