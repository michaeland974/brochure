<?php declare(strict_types = 1);
require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Index111',
    'content' => 'LoremLorem111'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/two_row.php');
?>