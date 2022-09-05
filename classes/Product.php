<?php

class Product{
    private $price;
    private $name;
    private $brand;

    function __construct($_price, $_name, $_brand){
        $this->price = $_price;
        $this->name = $_name;
        $this->brand = $_brand;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($_price){
        $this->price = $_price;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($_name){
        $this->name = $_name;
        return $this;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function setBrand($_brand){
        $this->brand = $_brand;
        return $this;
    }
}