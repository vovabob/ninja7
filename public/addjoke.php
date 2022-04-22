<?php
// public/addjoke.php

if (isset($_POST['joketext'])) {
    try {
        include __DIR__ . '/../includes/DbConnection.php';
        include __DIR__ . '/../includes/DbFunctions.php';        

//        insertJoke($pdo, $_POST['joketext'], 1);
        insertJoke($pdo, [
                'authorId' => 1, 
                'joketext' => $_POST['joketext'],
                'jokedate' => new DateTime()
            ]
        );

        header('location: jokes.php');
        
    } catch (PDOException $e) {
        $title = 'An error has occurred';
        $output = 'Database error: ' . $e->getMessage() . ' in ' .
			$e->getFile() . ':' . $e->getLine();
    }
} else {
// submit the 'addjoke.html.php' form

    $title = 'Add a Joke';
    ob_start();
    include  __DIR__ . '/../templates/addjoke.html.php';
    // load the actual form into the $output var
    $output = ob_get_clean();
}

// display BOTH templates combined: one after another.
include  __DIR__ . '/../templates/layout.html.php';
