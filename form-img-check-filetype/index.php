<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <!-- <script src="main.js"></script> -->
    <style>
        #test {
            display: none;
        }
        #form-img-preview {
            width: 400px;
        }

    </style>
</head>
<body>
<form action="" enctype="multipart/form-data">
    <input id="input-file" type="file" onchange="loadFile(event)" 
        accept=".jpg,.png,.gif,.jpeg" required>
</form>

</body>
</html>

<script>
    let loadFile = function(event){
        let uploadedFile = event.target.files[0];
        if(uploadedFile.type.split('/')[0] != 'image') {
            alert('no image');
        };
// always use server-side validation
}
</script>
