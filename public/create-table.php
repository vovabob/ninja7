<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db1;charset=utf8mb4', 'user1', 'qqq');
    $output = 'Database connection established.';
    $sql = 'CREATE TABLE IF NOT EXISTS joke (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	joketext TEXT,
	jokedate DATE NOT NULL
	) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

    $pdo->exec($sql);
    $output = 'Joke table successfully created.';

} catch (PDOException $e) {
    $output = 'Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/output.html.php';
