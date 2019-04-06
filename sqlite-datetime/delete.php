<?php

print_r($_POST);
print_r($_GET);


if(!empty($POST['id'])) {
try {
    $dsn = "sqlite:sqlite.db";
    $pdo = new \PDO($dsn, null, null);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    
    $sql = "DELETE FROM events WHERE id = :id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
} catch (\PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}    
    
    
    header('location: index.php');
}