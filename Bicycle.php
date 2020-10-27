<?php


// Bicycle.php

class Bicycle
{
    public $color;
    public $currentSpeed;
    public $nbSeats = 2;
    public $nbWheels = 2;

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
}
