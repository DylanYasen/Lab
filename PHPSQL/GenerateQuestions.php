<?php

include 'Common.php';

$link = mysqli_connect("studentdb-maria.gl.umbc.edu", "yadikae1", "yadi0306", "yadikae1");

$sql = "SELECT question, type, option1, option2, option3, option4, option5, answer  FROM question";

$result = $link->query($sql);

var_dump($result->num_rows);

$numRow = $result->num_rows;
while($numRow > 0) {
	 $row = $result->fetch_assoc();
	// var_dump($row);

	 echo "<br> question: ". $row["question"];
     echo "<br> type: ". $row["type"];
     echo "<br> option1: ". $row["option1"];
     echo "<br> option2: ". $row["option2"];
     echo "<br> option3: ". $row["option3"];
     echo "<br> option4: ". $row["option4"];
     echo "<br> option5: ". $row["option5"];
     echo "<br> answer: ". $row["answer"];

	$numRow--;
}

// if ($result->num_rows > 0) {
	 // output data of each row
 //      while($row = $result->fetch_assoc()) {
 // 		var_dump($row);
	// }

 //}

// if ($result->num_rows > 0) {
//      // output data of each row
//      while($row = $result->fetch_assoc()) {
// 		var_dump($row);

//          echo "<br> question: ". $row["question"];
//          echo "<br> type: ". $row["type"];
//          echo "<br> option1: ". $row["option1"];
//          echo "<br> option2: ". $row["option2"];
//          echo "<br> option3: ". $row["option3"];
//          echo "<br> option4: ". $row["option4"];
//          echo "<br> option5: ". $row["option5"];
//          echo "<br> answer: ". $row["answer"];
//      }
// } else {
//      echo "0 results";
// 	}

?>