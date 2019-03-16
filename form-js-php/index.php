<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form action="" method="POST" class="form-example" enctype="multipart/form-data">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required>
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" required>
  </div>
  <div class="form-example">
    <input type="file" name="file" id="file" required>
  </div>
  <div class="form-example">
    <input type="hidden" name="hidden_file" id="hidden_file" required>
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!">
  </div>
</form>


<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  echo '<pre>'.
        print_r($_POST).
        '</pre';
}
if(isset($_FILES)){
  echo '<pre>'.
        print_r($_FILES).
        '</pre';
}


?>
</body>
</html>