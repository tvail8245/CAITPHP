<?php
$servername = "localhost";
$username = "root";
$password = "M3rcielago!";
$dbname = "dog_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection success <br> ";
}

$sql = "select * from dog_features";

if ($result = $conn->query($sql)) {
    while ($obj = $result->fetch_object()) {
        print_r($obj);
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
