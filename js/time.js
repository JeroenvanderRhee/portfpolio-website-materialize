var Groet;
var ID = document.getElementById('GreetVisitor');

Greeting();
function Greeting(){
	var now = new Date;
	var hours = now.getHours();
	var Greet = "Hello";

	if ((hours >= 6) && (hours < 12)) {
		Greet = "Good Morning";
	}
	else if((hours >= 12) && (hours < 18)){
		Greet = "Good Afternoon";
	}
	else if (hours >= 18){
		Greet = "Good Evening";
	}
	else if ((hours < 6) && (hours >= 0)) {
		Greet = "Good Night";
	}
	else{
		Greet = "Welcome on my site";
	}

	Groet =  Greet;
}

ID.innerHTML= Groet;


