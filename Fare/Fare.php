<?php
class Fare{
    private $age;
    private $distance;
    private $fare;

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public function setDistance($distance){
        $this->distance = $distance;
    }

    public function getDistance(){
        return $this->distance;
    }


    // First 4 kilometers = 8
    // Succeeding kilometers, add 1
    // Min for age is 10, max is 80
    public function setFare(){
        if($this->distance <= 4){
            $this->fare = 8;
        }elseif($this->distance > 4){
            $this->fare = $this->distance + 4;
        }

        // Apply 20% discount
        if($this->age >= 60){
            $this->fare *= 0.8;
            // $this->fare = $this->fare * 0.8;
            // $this->fare = 8 * 0.8;
            // $this->fare = 6.4;
        }
    }

    public function getFare(){
        return $this->fare;
    }

     public function setValues($age, $distance){
        $this->setAge($age);
        $this->setDistance($distance);
        $this->setFare();
    }
}
?>