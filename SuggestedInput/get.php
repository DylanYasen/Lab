<?php

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

$sql = "SELECT * FROM `input` WHERE 1" ;
$result = $conn->query($sql);


// $result = $conn->query($sql);
// while($row = $result->fetch_assoc()) {
//          echo "<option value='". $row["favO"]. "'";
//      }


echo "$result";

?>
