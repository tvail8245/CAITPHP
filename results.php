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

// Create connection
$conn = new mysqli('localhost', 'root', 'M3rcielago!', 'dog_database' );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $sql = "INSERT INTO 'dog_features'
    ( 'name', 'breed', 'height', 'length', 'weight', 'has_fleas' )
    VALUES
    ( $dog->name , $dog->breed , $dog->color , $dog->height , $dog->length , $dog->weight , $dog->has_fleas )";
    echo "connection success <br> ";
    echo $sql;
}


$conn->close();

print_r($dog);