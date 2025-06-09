<?php

class Animal {
    protected $name;
    protected $species;
    protected $breed;

    // This will be called in the index page.
    public function getName() {
        return $this->name;
    }

    // All animals will have a name, species and breed,
    // and the behavior of this method is the same
    // for all animals.
    public function introduction() {
        return "Hello there! My name is {$this->name}. I am a <b>{$this->species}</b>, and my breed is <b>{$this->breed}</b>.";
    }
}