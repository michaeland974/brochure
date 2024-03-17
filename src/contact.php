<?php declare(strict_types = 1);

require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Contact',
    'content' => 'number, address'
  ],
  '/src/styles/test-contact.css'
);

include('./templates/three_row.php');
?>