<?php

class Bicycle
{
    public function __construct(string $color)
{
    $this->color = $color;
}
    private string $color;

    private int $currentSpeed;

    private int $nbSeats=1;

    private int $nbWheels=2;

    public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 0) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}

public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): string
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(string $currentSpeed): void
{
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
}

public function getNbSeats(): string
{
    return $this->nbSeats;
}

public function setNbSeats(string $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}

public function getNbWheels(): string
{
    return $this->nbWheels;
}

public function setNbWheels(string $nbWheels): void
{
    $this->nbWheels = $nbWheels;
}
}