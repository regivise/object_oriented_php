<?php

class Car
{
    private $brand;
    private $color;


    public function __construct($brand, $color)
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    //getter setter
    public function getBrand()
    {
        return $this->brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setBrand($brand)
    {
        $types_brands = ["Audio", "Subaru", "Mercedes", "Toyota", "Mazda"];

        if (in_array($brand, $types_brands)) {
            $this->brand = $brand;
        }
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function carInfo()
    {
        return "Brand:.$this->brand " . "<br>Color:" . $this->color;
    }
}
