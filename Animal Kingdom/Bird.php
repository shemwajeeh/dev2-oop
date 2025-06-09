<?php
require_once 'Animal.php';

class Bird extends Animal {
    public function __construct($name, $breed) {
        $this->name  = $name;
        $this->breed = $breed;
        $this->species = "Bird";
    }

    public function speak() {
        return "<b>{$this->name}</b> says: Tweet!";
    }
}