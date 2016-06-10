function toDecimal(){
	var valStr = document.getElementById("text").value;
	
	var number =  parseInt(valStr, 2);

	document.getElementById("label").innerHTML = "decimal: " + number ;
}