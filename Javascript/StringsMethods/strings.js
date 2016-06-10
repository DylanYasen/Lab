
var vowels = ["a","e","i","o","u"];

function getVowelCount(){
	var sentence = document.getElementById("text").value;

	console.log(sentence);

	var count = 0;

	for (var i = 0; i < vowels.length; i++) {
		var char = vowels[i];

		if(sentence.includes(char)){
			count++;
		}
	}

	document.getElementById("label").innerHTML = "found " + count + " vowels" ;

}