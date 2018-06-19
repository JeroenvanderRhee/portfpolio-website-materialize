var StartSlide = 2;
var StartDot = 2;


showSlides(StartSlide);
ShowDots(StartDot);


//Naar rechts en naar links scrollen
function PlusSlide(Var) {
  showSlides(StartSlide += Var);
  ShowDots(StartDot += Var);
}

//Hier word de huidige slide gedeclareerd
function CurrentSlide(Var) {
  showSlides(StartSlide = Var);
  ShowDots(StartDot = Var);
}


function showSlides(Var) {
  var ClassSlide = document.getElementsByClassName("Slides");
  var i;

  //Terug naar 1 als de slides op zijn
  if (Var > ClassSlide.length) {
    StartSlide = 1;
    }    

  //Als de start slide kleiner als 1 is dan moet je terug naar de laatste
  if (Var < 1) {
    StartSlide = ClassSlide.length;
  }

  //Zet de slides op onzichtbaar
  for (i = 0; i < ClassSlide.length; i++) {
     ClassSlide[i].style.display = "none";  
  }

  //de slide die wel moet worden vertoont word hier aangeroepen.
  ClassSlide[StartSlide-1].style.display = "block";  
}



function ShowDots(DotVar){
  var ClassDot = document.getElementsByClassName("Round");
  var i;

  //Terug naar 1 als de slides op zijn
  if (DotVar > ClassDot.length) {
    StartDot = 1;
    }    

  //Als de start slide kleiner als 1 is dan moet je terug naar de laatste
  if (DotVar < 1) {
    StartDot = ClassDot.length;
  }

  //Zet de slides op onzichtbaar
  for (i = 0; i < ClassDot.length; i++) {
     ClassDot[i].style.backgroundColor = "transparent";  
  }

  //de slide die wel moet worden vertoont word hier aangeroepen.
  ClassDot[StartDot-1].style.backgroundColor = "white";  
}