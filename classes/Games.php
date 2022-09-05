<?php

require_once __DIR__ . '/Product.php';

class Games extends Product{
    protected $color;
    protected $material;

    function __construct($_price, $_name, $_material){
        parent::__construct($_price, $_name, $_material);
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($_color){
        $this->color = $_color;
        return $this;
    }

    public function getMaterial(){
        return $this->material;
    }

    public function setMaterial($_material){
        $this->material = $_material;
        return $this;
    }
}

?>