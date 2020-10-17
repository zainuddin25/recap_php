<?php

require 'vendor/autoload.php';

use gabung\Square;
use gabung\Triangle;
use gabung\Circle;

echo (new Square())->getArea().PHP_EOL;
echo (new Triangle())->getArea().PHP_EOL;
echo (new Circle())->getArea();
