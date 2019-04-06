<?php

if(!empty($_GET['id'])) {
try {
    $dsn = "sqlite:sqlite.db";
    $pdo = new \PDO($dsn, null, null);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    
    $sql = "DELETE FROM events WHERE id = ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
} catch (\PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}    
    
    
    header('location: index.php');
}