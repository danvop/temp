<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <!-- ?<script src="main.js"></script> -->
</head>
<body>

<form class="form" action="add-date.php" method="post">
    <input type="submit" value="klack">
</form>
<div class="output">
<table>
<th>id</th><th>created_at(datetime)</th>
<?php foreach ($events as $event): ?>
<tr>
<td><?=$event['id']?></td>
<td><?=$event['created_at']?></td>
<td><form method="POST" action="delete.php?id=<?=$event['id']?>"><input type="submit" ></form></td>
</tr>
<?php endforeach; ?>
</table>
  
</div>
</body>
</html>