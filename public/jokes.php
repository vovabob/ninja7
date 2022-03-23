<?php
// public/jokes.php

try {
  $pdo = new PDO('mysql:host=localhost;dbname=db1;charset=utf8mb4', 'user1', 'qqq');

  $sql = 'SELECT `joketext`, `id` FROM joke';

  // $result is a PDOStatement object
  //$result = $pdo->query($sql);
  
  // Got rid of the unnecessary $result array and load
  // a PDOStatement object directly into the $jokes!
  $jokes = $pdo->query($sql);

  $title = 'Joke list';

  ob_start();

// First, load a "unique" template  
  include  __DIR__ . '/../templates/jokes.html.php';

// Store it in the $output var    
  $output = ob_get_clean();
}
catch (PDOException $e) {
  $title = 'An error has occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

// Finally, send both $output & $title vars to the "common" template
include  __DIR__ . '/../templates/layout.html.php';
