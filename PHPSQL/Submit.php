<?php
var_dump($_POST);
	
include 'Common.php';

// establish connection
$sqlHelper = new Common(true);

$sqlHelper.connect("CMSC433","root","root");

foreach ($_POST["data"] as &$value) {
    $query = "INSERT INTO `question` (`count`, `question`, `type`, `option1`, `option2`, `option3`, `option4`, `option5`, `answer`) 
    	VALUES
    	(1, 'Whats your favorite color?', 'MC', 'a. blue', 'b. red', 'c. orange', 'd. yellow', 'e. green', 'a. blue'),
		(2, 'Lupoli is awesome', 'TF', 'True', 'False', NULL, NULL, NULL, 'True');";

    $sqlHelper.executeQuery($query);
}

?>