<?php
    class Address {
        private $street;
        private $city;
        private $state;
        private $postal;
        private $country;

        function __construct($street, $city, $state, $postal, $country)
        {
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->postal = $postal;
            $this->country = $country;
        }

        function setStreet($street) { $this->street = $street; }

        function setCity($city) { $this->city = $city; }

        function setState($state) { $this->state = $state; }

        function setPostal($Postal) { $this->postal = $Postal; }

        function setCountry($country) { $this->country = $country; }

        function getStreet() { return $this->street; }

        function getCity() { return $this->city; }

        function getState() { return $this->state; }

        function getPostal() { return $this->postal; }

        function getCountry() { return $this->country; }
    }
?>