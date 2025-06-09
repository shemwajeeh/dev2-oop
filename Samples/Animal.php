<?php
//Overriding
//Parent Class
class Animal {
    public function makeSound() {
        echo "Animal makes a sound\n";
    }
}

//Child Class
class Dog extends Animal {
    //This overrides the makeSound() in parent
    public function makeSound(){
        parent::makeSound();
        echo "Dog barks\n";
    }
}

$dog = new Dog;
$dog->makeSound();

//Polymorphism
class Cat {
    public function makeSound(){
        echo "Cat meows\n";
    }
}

class Cow {
    public function makeSound() {
        echo "Cow moos\n";
    }
}

function playSound($animal){
    $animal->makeSound();
}

$cat = new Cat;
$cow = new Cow;

playSound($cat);
playSound($cow);
?>