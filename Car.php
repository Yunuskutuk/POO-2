<?php

class Car{
    public $color;
    public $currentSpeed;
    public $nbSeats = 5;
    public $nbWheels = 4;
    public $fuel;
    public $fuelLevel = 1;

    public function start()
    {
        $this->start();
        return "I started";
    }
    public function forward()
    {
        $this->currentSpeed = 130;
        return "Let's go";

    }
    public function brake()
    { $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Please brake";
        }
        $sentence .= "Stopped!";
        return $sentence;

    }
    public function __construct($color, $fuel, $nbSeats)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuel = $fuelLevel;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    public function getfuelLevel()
    {
        return $this->fuelLevel;
    }

    public function getfuel()
    {
        return $this->fuel;
    }

}

