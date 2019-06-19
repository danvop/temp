<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            display: block;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="act.php">

        <!-- some form elements here -->
        <input type="email" style="display:block">
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
        <input type="checkbox" name="subscribe" id="subscribe">
        <input type="submit">

    </form>
</body>
</html>
