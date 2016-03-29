<?php

$array = array();

for ($i = 1; $i < 6; $i++) { 
	$index = strval($i);
	$val = $_POST["wage$index"];
	array_push($array, $val);
}

print_r ($array);

?>