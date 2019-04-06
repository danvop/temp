<?php



if(isset($_POST)) {
    $dsn = "sqlite:sqlite.db";
    $pdo = new \PDO($dsn, null, null);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
    
    $stmt = $pdo->prepare("INSERT INTO events('created_at') values(datetime('now'))");
    $stmt->execute();
    header('location: index.php');
    
}