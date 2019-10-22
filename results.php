<?php
require_once('dog.php');

$dog = new dog();

$dog->name = $_POST['name'];
$dog->breed = $_POST['breed'];
$dog->color = $_POST['color'];
$dog->height = $_POST['height'];
$dog->length = $_POST['length'];
$dog->weight = $_POST['weight'];
$dog->has_fleas = $_POST['has_fleas'];

if ($dog->has_fleas) {
    $dog->de_flea();
}

if ($dog->weight<10){
    $dog->fatten_up(10);
}

if ($dog->weight>75){
    $dog->thin_down(10);
}

print_r($dog);