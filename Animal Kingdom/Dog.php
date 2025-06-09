<?php
require_once 'Animal.php';

class Dog extends Animal {
    public function __construct($name, $breed) {
        $this->name  = $name;
        $this->breed = $breed;
        $this->species = "Dog";
    }

    public function speak() {
        return "<b>{$this->name}</b> says: Woof!";
    }
}