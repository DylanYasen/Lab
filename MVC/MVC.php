<?php

class Model 
{
	public $data;
	
	function __construct()
	{
		$data = "<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='criForm.css'>
</head>
<body>
<form method='post' action='controller.php'>

  <h1>Computer Replacement Initiative Form</h1>

  Applicant Info:
  <br>
  <br>
  Name:
   &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='name1' pattern='[A-Za-z]{2,}' title= 'First name with 2 or more letters, no numbers'required>
  <br>
  <br>
  Title:
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='title' pattern='[A-Za-z][0-9]*{2,}' title= 'Title must be at least 2 alphanumeric characters'required>
  <br>
  <br>
  Department:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='department' pattern='[A-Za-z]{4,}' title= 'Department must be at least 4 non-numeric characters'required>
  <br>
  <br>
  College/Division:
  <input type='text' name='collegedivision' required>
  <br>
  <br>
  Phone:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='phone' required>
  <br>
  <br>
  email:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='email' required>
  <br>
  <br>
  Department Head name:
  <input type='text' name='departmentheadname' required>
  <br>
  <br>
  Department Head email:
  <input type='text' name='departmentheademail' required>
  <br>
  <br>
  Company(Dell, Toshiba, etc...):
  <input type='text' name='company' required>
  <br>
  <br>
  Model:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='model' required>
  <br>
  <br>
  Years old:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='yearsold' required>
  <br>
  <br>
  Basic specs:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='basicspecs' required>
  <br>
  <br>
  Laptop or Desktop:
  <input type='text' name='laptopdesktop' required>
  <br>
  <br>
  Reason for replacement (Narrative):<br>
  <textarea rows='4' cols='30' name='replacementreason' required>
  Enter text here...</textarea>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <br>
  <br>
  Wants to Replace with: (Desktop, Laptop, iPad)
  <input type='text' name='replace' required>
  <br>
  <br>
  Contact Info (who wrote it for the Applicant)<br>
  <br>
  Name:
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='name2' required>
  <br>
  <br>
  Title:
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='title2' required>
  <br>
  <br>
  Department:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='department2' required>
  <br>
  <br>
  College/Division:
  <input type='text' name='collegedivision2' required>
  <br>
  <br>
  Phone:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='phone2' required>
  <br>
  <br>
  email:
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='email2' required>
  <br>
  <br>
  Submit:<br>
  <br>
  <input id ='submitButton' type='submit' name='submitButton'>
</form>
</body>
</html>";
}

class Controller 
{
	private $model;

	function __construct($model)
	{
		$this->model = $model;
		//$this->Connect();
	}

	public function Submit(){

	}

	public function Connect(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "CMSC";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT Column_name 
				FROM Information_schema.columns 
				WHERE Table_name like 'cri'";

		$result = $conn->query($sql);

		echo($result);
		$conn->close();
	}
}

class View 
{
	private $model;
	private $controller;
	
	function __construct($controller,$model)
	{
		$this->model = $model;
		$this->controller = $controller;
	}

	public function output(){
		echo ($this->model->data);
	}
}

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
$view->output();
?>
