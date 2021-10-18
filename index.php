<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Vehicle.php';
require_once 'Truck.php';





$truck = new Truck ( 'orange', 2, 'electric', 0);
echo $truck->isFull();
echo $truck->forward();
echo $truck->brake();




