<?php
require_once('dog.php');

$dog = new dog();

$dog->name = $_POST['name'];
$dog->breed = $_POST['breed'];