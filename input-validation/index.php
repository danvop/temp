<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        input {
            
            margin: 10px;
            padding: 10px;
            border:2px solid black;
            border-radius: 5px;
            
        }
    </style>
</head>
<body>
    <form method="POST" action="act.php">

        <!-- some form elements here -->
        <div>
            <input type="email" style="display:block">
        </div>
        <div>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
        </div>
        <div>
            <input type="checkbox" name="subscribe" id="subscribe">
            <label for="subscribe">Subscribe</label>
        </div>
        
        
        <input type="submit">

    </form>
</body>
</html>
