<?php

$array = array();


$sum = 0;

for ($i = 1; $i <= 3; $i++) { 
	$index = strval($i);
	$val = $_POST["s$index"];
	$sum += $val;
	array_push($array, $val);
}

//sort($array);

$average = array_sum($array) / count($array); 
$max = max($array);
$min = min($array);

echo "The lowest GPA was: $min <br>";
echo "The average GPA was: $average<br>";
echo "The highest GPA was: $max<br>";

?>