<?php
session_start();

// Create connection
try {
    $pdo = new \PDO("sqlite:db.sqlite");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    print_r($e);
}

