<?php declare(strict_types = 1);
require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Locations - Hennepin County Garden Club',
    'content' => 'lorem',
    'stylesheet' => 'locations.css'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/locations_row.php');
?>