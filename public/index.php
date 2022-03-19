<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db1;charset=utf8mb4', 'user1', 'qqq');
    $output = 'Database connection established.';
} catch (PDOException $e) {
    $output = 'Unable to connect to the database server: ' . $e->getMessage();
}

include  __DIR__ . '/../templates/output.html.php';
