
var data = ["Australia","Germany","United States of America"];

function getLongestCountryName(names){

	names.sort(function(a, b){return b.length-a.length});

	console.log(names[0]);
}


getLongestCountryName(data);