<?php
// public/jokes.php

try {
  include __DIR__ . '/../includes/DbConnection.php';
  include __DIR__ . '/../includes/DbFunctions.php';  

  $jokes = allJokes($pdo);
  $title = 'Joke list';
  $totalJokes = totalJokes($pdo);

  ob_start();

// First, load a "unique" template  
  include  __DIR__ . '/../templates/jokes.html.php';

// Store it in the $output var    
  $output = ob_get_clean();
}
catch (PDOException $e) {
  $title = 'An error occurred';

  $output = 'Database error: ' . $e->getMessage() . ' in ' .
  $e->getFile() . ':' . $e->getLine();
}

// Finally, send both $output & $title vars to the "common" template
include  __DIR__ . '/../templates/layout.html.php';
