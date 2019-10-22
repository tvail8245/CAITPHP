<?php
require_once ('dog.php');

$dog = new dog();


$dog->has_fleas = 1;
$dog->color = "brown";
$dog->breed = "chocolate Lab";
$dog->height = 23;
$dog->length = 60;
$dog->name = "Spot";
$dog->weight = 70;

print_r($dog);