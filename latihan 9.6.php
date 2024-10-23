<?php

class Address {
    public $street;
    public $city;
}

class Person {
    public $name;
    public $address;

    public function __construct($name) {
        $this->name = $name;
        $this->address = new Address();
    }

    public function __clone() {
        // Deep copy the address object
        $this->address = clone $this->address; 
    }
}

$bob = new Person("Bob");
$bob->address->street = "North 1st Street";
$bob->address->city = "San Francisco";

$alex = clone $bob; 
$alex->name = "Alex";
$alex->address->street = "Apple Park Way";
$alex->address->city = "Cupertino";

var_dump($bob); 
var_dump($alex);

?>