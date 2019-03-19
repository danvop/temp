<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(Auth::check()) : ?>
        <div><h3>You are logged in <?= $_SESSION['logged'] ?></h3></div>
    <?php endif;?>
</body>

<div>
    <a href="login.php">login</a>
</div>
<div>
    <a href="logout.php">logout</a>
</div>

</html>