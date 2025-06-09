<?php
require_once 'Animal.php';

class Cat extends Animal {
    public function __construct($name, $breed) {
        $this->name  = $name;
        $this->breed = $breed;
        $this->species = "Cat";
    }

    public function speak() {
        return "<b>{$this->name}</b> says: Meow!";
    }
}