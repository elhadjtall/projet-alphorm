<?php

$dsn = 'mysql:host=localhost;dbname=bricks;charset=utf8';
$user = 'root';
$password = '';

try{
    $bdd = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
    echo 'Une erreur est survenue !';
}
