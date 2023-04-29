<?php

$dsn = "mysql:host=localhost;dbname=phpoopgpt";
$username = "root";
$password = "mysql";

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    die("Bağlantı hatası: " . $e->getMessage());
}


?>