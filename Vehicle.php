<?php

class Vehicle
{
private int $nbWheels;
private int $currentSpeed;
private string $color;
private int $nbSeats;
private string $energy;
private string $currentEnergy;

public function __construct(string $color, int $nbSeats, string $energy){
    $this->setColor($color);
    $this->setNbSeats($nbSeats);
    $this->setEnergy($energy);
    
}
public function start(): string 
{
    return "Engine starting";
}

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

public function getNbWheels(): int
{
    return $this->nbWheels;
}
public function setNbWheels(int $nbWheels): void
{
    $this->nbWheels = $nbWheels;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}
public function setCurrentSpeed(int $currentSpeed): void
{
    $this->currentSpeed = $currentSpeed;
}
public function getColor(): string
{
    return $this->color;
}
public function setColor(string $color): void
{
    $this->color = $color;
}

public function getNbSeats(): int
{
    return $this->nbSeats;
}
public function setNbSeats(int $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}


public function getEnergy(): string
{
    return $this->energy;
}
public function setEnergy(string $energy): void
{
    $this->energy = $energy;
}
public function getCurrentEnergy(): string
{
    return $this->currentEnergy;
}
public function setCurrentEnergy(string $currentEnergy): void
{
    $this->currentEnergy = $currentEnergy;
}














}