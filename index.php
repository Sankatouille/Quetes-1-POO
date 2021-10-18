<?php
// index.php

require_once 'Bicycle.php';
require_once 'Vehicle.php';


$bike = new Bicycle("Red", 0, 4, 4 );



$car = new Vehicle ("Blue", 4, "Gazol");

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vehicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();



