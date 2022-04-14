<?php
// public/deletejoke.php

try {
  include __DIR__ . '/../includes/DbConnection.php';
  include __DIR__ . '/../includes/DbFunctions.php';
      
  deleteJoke($pdo, $_POST['id']);
  header('location: jokes.php');
}
catch (PDOException $e) {
  $title = 'An error occurred';
  $output = 'Unable to connect to database: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';
