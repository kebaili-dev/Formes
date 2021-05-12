<?php

ini_set('display_errors', 'on');

require 'AreaInterface.php';
require 'DrawingInterface.php';
require 'Square.php';
require 'Rectangle.php';

$rectangle = new Rectangle(0, 0, 400, 300);
$square = new Square(0, 0, 500);

$shapes = [$rectangle, $square];

foreach ($shapes as $shape) {
    var_dump('Aire de la forme :', $shape->area());
}