<?php

require_once __DIR__ . '/Product.php';

class Foods extends Product{
    protected $ingredients;
    protected $expirationDate;
    protected $weight;

    function __construct($_price, $_name, $_ingredients, $_expirationDate, $_weight){
        parent::__construct($_price, $_name, $_ingredients);
        $this->expirationDate = $_expirationDate;
        $this->weight = $_weight;
    }

    public function getIngredients(){
        return $this->ingredients;
    }

    public function setIngredients($_ingredients){
        $this->ingredients = $_ingredients;
        return $this;
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
        return $this;
    }

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($_weight){
        $this->weight = $_weight;
        return $this;
    }

}

?>