<table>
 <tr>
  <th>Employee name</th>
  <th>Salary</th>
 </tr>

<?php
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

try {
    $pdo = new PDO("mysql:host=$servername;dbname=test", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


$result = $pdo->query("SELECT id, name, salary FROM salary");
var_dump($result->fetch(PDO::FETCH_NUM));
var_dump($result->fetch(PDO::FETCH_NUM));
var_dump($result->fetch(PDO::FETCH_NUM));

// var_dump($id);
while (list($id, $name, $salary) = $result->fetch(PDO::FETCH_NUM)) {
    echo " <tr>\n" .
          "  <td><a href=\"info.php?id=$id\">$name</a></td>\n" .
          "  <td>$salary</td>\n" .
          " </tr>\n";
}


// while (list($num) = [10,20,30]){
// 	echo $num;
// }

?>

</table>




<?php 
/*
CREATE TABLE salary (
id int(5) unsigned auto_increment primary key,
name varchar(30) not null,
salary int(8)
)

INSERT INTO salary name,salary values(john, 1000);


*/





?>

