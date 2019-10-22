<?php
require_once ('dog.php');

$dog = new dog();


$dog->has_fleas = 1;
$dog->color = "brown";
$dog->breed = "chocolate Lab";
$dog->height = 23;
$dog->length = 60;
$dog->name = "Spot";
$dog->weight = 85;

print_r($dog);

if ($dog->weight >= 80){
    $dog->thin_down(10);
} elseif ($dog->weight <= 50)
{
    $dog->fatten_up(20);
}
$dog->de_flea();


echo "</br> \n";

print_r($dog);