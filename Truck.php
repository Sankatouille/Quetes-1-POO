<?php

require_once 'Vehicle.php';


class Truck extends Vehicle 
{
    private int $storage = 0;

    private string $energy;

    private int $energyLevel;

    private int $storageCapacity ;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity )
{
    parent::__construct($color, $nbSeats);
    $this->energy = $energy;
    $this->storageCapacity = $storageCapacity;
}
    public function getStorageCapacity(): string
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity( string $storageCapacity) 
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function isFull(): string
    {
        $sentence = "";
        if ($this->storage == $this->storageCapacity) {
            $this->storage;
            $sentence .= "in filling<br>";
        }
        else{
        $sentence .= "full<br>";}
        return $sentence;
    }
}