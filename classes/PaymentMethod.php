<?php

class PaymentMethod{

    protected $paymentCard;
    protected $expirationDate;

    function __construct($_paymentCard, $_expirationDate){
        $this->paymentCard = $_paymentCard;
        $this->expirationDate = $_expirationDate;
    }

    public function getPaymentCard(){
        return $this->paymentCard;
    }

    public function setPaymentCard($_paymentCard){
        $this->paymentCard = $_paymentCard;
        return $this;
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
        return $this;
    }

}

?>