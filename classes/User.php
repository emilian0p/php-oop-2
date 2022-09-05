<?php

require_once 'classes/Cart.php';

    class User {
        protected $firstName;
        protected $email;
        protected $lastName;
        protected $isRegistered;
        protected Cart $cart;

        public function __construct($_email, $_isRegistered) {
            $this->email = $_email;
            $this->isRegistered = $_isRegistered;
            $this->cart = new Cart();
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function setFirstName($_firstName) {
            $this->firstName = $_firstName;
            return $this;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($_email) {
            $this->email = $_email;
            return $this;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function setLastName($_lastName) {
            $this->lastName = $_lastName;
            return $this;
        }

        public function getIsRegistered() {
            return $this->isRegistered;
        }
        
    }