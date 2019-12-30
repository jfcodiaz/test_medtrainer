<?php
ini_set("memory_limit","50M"); //set a memory limit for emulate the error

$pdo = new PDO("mysql:host=localhost:3307; dbname=test_medtrainer", 'root', 'toor');

$stmt = $pdo->prepare('SELECT * FROM users');
$stmt->execute();

while($data = $stmt->fetch( PDO::FETCH_ASSOC )){ 
    echo $data['id']."\n";
}