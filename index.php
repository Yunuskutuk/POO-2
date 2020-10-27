<?php
require_once 'Bicycle.php';
$bike = new Bicycle();
var_dump($bike)
;
echo "<br/>";
echo "<hr/>";

$bike->color = "Red";
$bike->currentSpeed = 150;
var_dump($bike);

echo "<br/>";
echo "<br/>";

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

require_once 'Car.php';
$voiture = new Car('blue', 'diesel', 130);
var_dump($voiture);
echo "<br/>";
echo "<hr/>";

echo "<br/>";
echo "<br/>";

//Moving car
echo $voiture->start();
echo $voiture->forward();
echo $voiture->brake();

