<?php declare(strict_types = 1);
require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Hennepin County Garden Club',
    'content' => 'LoremLorem111',
    'stylesheet' => 'home.css'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/two_row.php');
?>