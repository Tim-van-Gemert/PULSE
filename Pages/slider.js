let slideIndex = 1;

//Makes all the first dots larger to show that they are selected
document.getElementById("firstDots").style.transform = "scale(2, 2)";

showDonuts(slideIndex);
function currentDonut(n) {
    showDonuts(slideIndex = n);
}

showColumns(slideIndex);
function currentColumns(n) {
    showColumns(slideIndex = n);
}

showScores(slideIndex);
function currentScore(n) {
  showScores(slideIndex = n);
}

//Function to show and hide the donut charts when dot is pressed
function showDonuts(n) {
  let i;
  let slides = document.getElementsByClassName("myDonuts");
  let dots = document.getElementsByClassName("dotDonuts");
  
  if (n > slides.length) {
    slideIndex = 1
    }

  if (n < 1) {
    slideIndex = slides.length
    }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].style.transform = "scale(1, 1)";
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].style.transform = "scale(2, 2)";
}

//Function to show and hide the Column charts when dot is pressed
function showColumns(n) {
  let i;
  let slides = document.getElementsByClassName("myColumns");
  let dots = document.getElementsByClassName("dotColumns");
  
  if (n > slides.length) {
    slideIndex = 1
    }

  if (n < 1) {
    slideIndex = slides.length
    }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].style.transform = "scale(1, 1)";
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].style.transform = "scale(2, 2)";
}


//Function to show and hide the fatigue score when dot is pressed
function showScores(n) {
  let i;
  let slides = document.getElementsByClassName("myScores");
  let dots = document.getElementsByClassName("dotScores");
  
  if (n > slides.length) {
    slideIndex = 1
    }

  if (n < 1) {
    slideIndex = slides.length
    }

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  for (i = 0; i < dots.length; i++) {
    dots[i].style.transform = "scale(1, 1)";
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].style.transform = "scale(2, 2)";
}
  