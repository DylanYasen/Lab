<?php
//var_dump($_POST["list"]);
$array = $_POST["list"];

sort($array);

$min = min($array);
$max = max($array);

//print_r($array);

echo "The grocery list in Order:<br>";
foreach ($array as $val) {
	echo "$val<br>";
}

	echo "The Min value in the cart: $min<br>";

	echo "The Max value in the cart: $max<br>";

?>