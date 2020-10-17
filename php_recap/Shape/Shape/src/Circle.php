<?php
namespace gabung;

use gabung\Shape;

class Circle extends Shape
{
    private $radius=100;

    public function getArea()
    {
        return M_PI*$this->radius*$this->radius;
        
    }
}