<?php
$title = 'vovabob learn PHP';
ob_start();

// load a "unique" template first
include  __DIR__ . '/../templates/index.html.php';

$output = ob_get_clean();

// send both $output & $title vars to the "common" template
include  __DIR__ . '/../templates/layout.html.php';
