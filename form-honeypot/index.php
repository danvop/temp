

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <!-- <script src="main.js"></script> -->
</head>
<?php

if(!empty($_GET['firstname'])){
    print_r($_GET['firstname']);
}
?>
<body>
    <form action="">
        <input name="firstname" type="text" value="First Name">
        <input name="lastname" type="text" value="Last Name">
        <input id="website" name="website" type="text" value="">
        <input type="submit" value="submit">
    </form>
    
    
</body>
<script>
var form = document.querySelector("form");
var honeyInput = document.getElementById("website");

form.addEventListener('submit', function(e){
    if (honeyInput.value.length !=0){
        e.preventDefault();
    }
});

</script>
</html>

