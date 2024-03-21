<?php declare(strict_types = 1);
require_once './classes/View.php';

$view = new View(
  [
    'title' => 'Memberships - Hennepin County Garden Club',
    'content' => 'lorem',
    'stylesheet' => 'memberships.css'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/two_row.php');
?>