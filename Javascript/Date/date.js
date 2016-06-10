function mothDelta(date1,date2){

	console.log(date1.month);
	console.log(date2.month);

	return (date2.month - date1.month);
}


var dt1 = new Date("June 13,2014 08:11:00");
var dt2 = new Date("October 19,2014 11:13:00");
console.log(mothDelta(dt1,dt2));