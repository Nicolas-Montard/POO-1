<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');

$bike->setcurrentSpeed(0);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getcurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo'<br> <br> <br>';

$clio = new Car('gris', 4, 'essence');

$clio->setCurrentSpeed(0);

echo $clio->start();

echo $clio->forward(5);

echo $clio->break();
