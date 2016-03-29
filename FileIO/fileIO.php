<?php


function findKeyword($keyword){

$myfile = fopen("data.txt", "r") or die("Unable to open file!");

$line = "";
$lineNum = 1;
while(!feof($myfile)) {
  $line = fgets($myfile);
  $pos = strpos($line, $keyword);

  if ($pos === false) {
  		$lineNum++;
    	//echo "The string '$keyword' was not found in the string '$line'";
	} else {
    	echo "The string '$keyword' was found in the string '$lineNum'";
		break;
	}
}

fclose($myfile);
}

function filter(){
	$filterlist = array("/\bthe\b/","/\bto\b/","/\bthat\b/","/\band\b/");

	$myfile = fopen("data.txt", "r") or die("Unable to open file!");
	$raw = fread($myfile, filesize("data.txt"));
	$string = preg_replace($filterlist, '', $raw);

	echo "$string";

	fclose($myfile);
}

//filter();
//findKeyword("explosive");



?>