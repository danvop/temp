<?php

require "bootstrap.php";


$dsn = "sqlite:sqlite.db";
$pdo = new \PDO($dsn, null, null);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("SELECT * FROM events ORDER by created_at desc");
$stmt->execute();
$events = $stmt->fetchAll(\PDO::FETCH_ASSOC);

view('index',compact('events'));