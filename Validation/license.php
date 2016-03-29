<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="validate.php" method="post">
  Driver License or ID Number:<br>
  Required.<br>
  <input type="text" name="id"><br><br>

  Date of Birth:<br>
  Required.<br>
  <!--<input type="date" name="birthdate"></input><br><br> !-->
  <?php include 'birthday.php';?>
  <br><br>

  Audit Number:<br>
  Required. Please enter the audit number as it appears on your card.<br>
  <input type="text" name="audit"><br><br>

  Last Four Digits of Social Security Number:<br>
  Required.<br>
  <input type="number" name="ssn"><br><br>

</form>

</body>
</html>