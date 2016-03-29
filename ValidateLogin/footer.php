<?php
session_start();

$rank = $_SESSION["rank"];

if($rank == "admin"){
	echo "<h4>Admin</h4>";
}

elseif ($rank == "student") {
	echo "<h4>Student</h4>";	
}

?>