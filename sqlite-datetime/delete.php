<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!empty($_POST['id'])) {
        try {
            //connect to database
            $dsn = "sqlite:sqlite.db";
            $pdo = new \PDO($dsn, null, null);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
            //do sql query
            $sql = "DELETE FROM events WHERE id = :id ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['id']]);
            
        } catch (\PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }           
    }
} 

header('location: index.php');