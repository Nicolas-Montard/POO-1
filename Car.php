<?php

class Car
{

public function __construct(string $color, int $nbSeats, string $energyType)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energyType = $energyType;
}

private int $nbWheels;

private int $currentSpeed;

public string $color;

private int $nbSeats;

private string $energyType;

private int $energyLevel;


public function getNbWheels()
{
return $this->nbWheels;
}

public function setNbWheels($nbWheels)
{
    $this->nbWheels = $nbWheels;

    return $this;
}

public function getCurrentSpeed()
{
    return $this->currentSpeed;
}

public function setCurrentSpeed($currentSpeed)
{
    $this->currentSpeed = $currentSpeed;

    return $this;
}

public function getColor(): string
{
    return $this->color;
}

public function setColor($color)
{
    $this->color = $color;

    return $this;
}

public function getNbSeats()
{
    return $this->nbSeats;
}

public function setNbSeats($nbSeats)
{
    $this->nbSeats = $nbSeats;

    return $this;
}

public function getEnergyType()
{
    return $this->energyType;
}

public function setEnergyType($energyType)
{
    $this->energyType = $energyType;

    return $this;
}

public function getEnergyLevel()
{
    return $this->energyLevel;
}

public function setEnergyLevel($energyLevel)
{
    $this->energyLevel = $energyLevel;

    return $this;
}

public function start(): string
{
    if($this->currentSpeed <= 0)
    $this->currentSpeed = 5;
    return "go! <br>";
}

public function forward($speed): string
{
    if(!empty($this->currentSpeed) && $this->currentSpeed >= 0){
        $this->currentSpeed += $speed;
    }
    return 'vous allez à ' . $this->currentSpeed . ' km/h <br>';
}

public function break()
{
    $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped ! <br>";
   return $sentence;
}
}