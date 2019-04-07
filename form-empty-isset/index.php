<?php
print_r($_SERVER['REQUEST_METHOD']);
print_r($_REQUEST);
print_r([
    "isset(\$_GET['username'])",
    isset($_GET['username'])
]);

print_r([
    "!empty(\$_GET['username'])",
    !empty($_GET['username'])
]);

print_r([
    "isset(\$_POST['username'])",
    isset($_POST['username'])
]);

print_r([
    "!empty(\$_POST['username'])",
    !empty($_POST['username'])
]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form id="get-form" action="" method="get">
        <input type="text" name="username">
        <input type="email" name="useremail">
        <input type="submit">
    </form>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="email" name="useremail">
        <input type="submit">
    </form>

</body>
</html>

