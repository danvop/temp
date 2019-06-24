<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Validation</title>
    <style>
        .form-control > * {
            display: block;
        }
        input {
            margin: 10px;
            padding: 10px;
            border:2px solid black;
            border-radius: 5px;    
        }
        label {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <form method="POST" action="act.php">

        <!-- some form elements here -->
        <div class="form-control">
            <label for="email">Enter Email</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-control">
            <label for="phone">Enter Phone</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}">
        </div>
        <div>
            <label for="subscribe">Subscribe</label>
            <input type="checkbox" name="subscribe" id="subscribe" checked>
        </div>
        
        
        <input type="submit">

    </form>
</body>
</html>
