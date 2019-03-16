<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->
</head>
<body>
<form action="POST" enctype="multipart/form-data">
    <input id="input-file" type="file" onchange="loadFile(event)">
    <img id="form-img-preview" >
</form>

</body>
</html>

<script>
 let loadFile = function(event){
     let output = document.getElementById('form-img-preview');
     output.src = URL.createObjectURL(event.target.files[0]);
 }
</script>
