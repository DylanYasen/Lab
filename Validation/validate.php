<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$dLicenseError=$monthError=$dayError=$yearError=$auditError=$SocialError;


	if (empty($_POST["id"])) {
     $dLicenseError = "ID is required";
   } else {
     $name = test_input($_POST["id"]);
   }

   if (empty($_POST["year"])) {
     $yearError = "Year is required";
   } else {
     $name = test_input($_POST["year"]);
   }

   if (empty($_POST["month"])) {
     $monthError = "Month is required";
   } else {
     $name = test_input($_POST["month"]);
   }

   if (empty($_POST["day"])) {
     $dayError = "Day is required";
   } else {
     $name = test_input($_POST["day"]);
   }

   if (empty($_POST["audit"])) {
     $auditError = "Audit number is required";
   } else {
     $name = test_input($_POST["audit"]);
   }

   if (empty($_POST["ssn"])) {
     $SocialError = "SSN is required";
   } else {
     $name = test_input($_POST["ssn"]);
   }

   echo "$name/$SocialError<br>";

}

function test_input($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>