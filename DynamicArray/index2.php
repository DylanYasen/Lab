<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="array.php" method="post">
  
  <?php
  	$count = $_POST[num];

	for ($i = 0; $i < $count; $i++) { 
		
		echo "Please enter the item in list:";
		echo "<input type='text' name = 'list[]' ><br>";
	}
  ?>
  <input type="submit" value="Submit">

</form>	

</body>
</html>