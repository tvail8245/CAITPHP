<?php
require_once('dog.php');

$dog = new dog();

$dog->name = $_POST['name'];
$dog->breed = $_POST['breed'];
$dog->color = $_POST['color'];
$dog->height = $_POST['height'];
$dog->length = $_POST['length'];
$dog->weight = $_POST['weight'];