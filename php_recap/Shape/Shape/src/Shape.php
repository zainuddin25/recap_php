<?php
namespace gabung;


abstract class Shape{
    
    protected $color;

    public function __construct($color="Black")
    {
        $this->color=$color;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public abstract function getArea();

}

