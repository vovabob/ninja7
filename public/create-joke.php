<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=db1;charset=utf8mb4', 'user1', 'qqq');
    $output = 'Database connection established.' . '<br>';
    $sql = 'CREATE TABLE IF NOT EXISTS joke (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	joketext TEXT,
	jokedate DATE NOT NULL
	) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB';

    $retVal = $pdo->exec($sql);

    switch ($retVal) {
    	case 0:
       	    $output .= 'No rows affected.';
	    break;
	case ($retVal > 0):
	    $output .= $output . ' rows have been modified.';
	    break;
    }

} catch (PDOException $e) {
    $output = 'Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';
