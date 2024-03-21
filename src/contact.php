<?php declare(strict_types = 1);

require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Contact - Hennepin County Garden Club',
    'content' => 'lorem',
    'stylesheet' => 'contact.css'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/contact_row.php');
?>