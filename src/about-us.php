<?php declare(strict_types = 1);

require_once './classes/View.php';

$view = new View(
  [
    'title' => 'About - Hennepin County Garden Club',
    'content' => 'lorem',
    'stylesheet' => 'about-us.css'
  ],
  (getenv('MODE') === 'PROD' ? '/resources' : '/src/resources')
);

include('./templates/about_us.php');
?>