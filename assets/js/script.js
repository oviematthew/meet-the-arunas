function scrolltoRsvp(){
  document.getElementById('rsvp').scrollIntoView();

  }



// var switchButton = document.getElementById("switch-btn");
// var topCont = document.getElementById("card-front");
// var bottomCont = document.getElementById("card-back");


// // All functions below occur on click of myButton variable called earlier
// swicthButton.addEventListener("click", function () {

//     // Add opacity and rotation to the front card
//     topCont.classList.add("opClass"); 
//     topCont.classList.add("rotate-card"); 
    
//     setTimeout(function(){
    
//     // Add hidden class to front card to hide it
//     topCont.classList.add("hidden");  
    
//     // Remove hidden class to front card to display it
//     bottomCont.classList.remove("hidden"); 

//     // Add opacity class to reduce the opacity of the back card
//     bottomCont.classList.add("opClass"); 
//     },1000); 

//     setTimeout(function(){   
//     //Remove Card Opacity 
//     bottomCont.classList.add("re-opClass");
//     },1200); 

//   });

// // Recaptcha
// function onSubmit(token) {
//   document.getElementById("rsvp-form").submit();
// }


// Back to top
const backButton = document.getElementById("btn-back-to-top");



function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    backButton.style.display = "block";
  } else {
    backButton.style.display = "none";
  }
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

// When the user clicks on the button, scroll to the top of the document
backButton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
