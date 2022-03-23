<?php
// public/deletejoke.php

try {
  include __DIR__ . '/../includes/DbConnect.php';
  
  $sql = 'DELETE FROM `joke` WHERE `id` = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $_POST['id']);
  $stmt->execute();

  header('location: jokes.php');
}
catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Unable to connect to database: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}

include  __DIR__ . '/../templates/layout.html.php';
