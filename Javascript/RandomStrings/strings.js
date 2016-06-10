
function getScrambledWord(){
	var sentence = document.getElementById("text").value;
	var resultStr = "";
	
	console.log(sentence);
	console.log(sentence.length);
	var char = sentence.slice(0,1);
	console.log(char);
	sentence.replace(char,"");
	console.log(sentence);
	console.log(sentence.length);

	// while(sentence.length > 0){
	// 	var randomIndex = Math.random() % sentence.length ;
	// 	var char = sentence.slice(randomIndex,1);
	// 	resultStr += char;
	// }

	document.getElementById("label").innerHTML = resultStr ;
}