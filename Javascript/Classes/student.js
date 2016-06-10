class Student{
	constructor(fName,lName,major,gpa){
		this.fName = fName;
		this.lName = lName;
		this.major = major;
		this.gpa = gpa;
	}

	toString(){
		var str = this.fName+"<br>" + this.lName + "<br>"+ this.major+"<br>"+ this.gpa +"<br>";	
		return str;
	}
}