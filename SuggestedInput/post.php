<?php

var_dump($_POST);

$user = 'root';
$password = 'root';
$db = 'yadi';
$host = 'localhost';
$port = 8889;

// Create connection
$conn = new mysqli($host, $user, $password, $db, $port);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

// update DB
$input = $_POST["input"];
echo "$input";

$sql = "INSERT INTO input(data) VALUES ('$input')";
$conn->query($sql);

?>
