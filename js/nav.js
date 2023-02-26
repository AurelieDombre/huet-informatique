// let menuBtn = document.querySelector('.menu-btn');
// let nav = document.querySelector('nav');
// menuBtn.addEventListener('click', function() {
//   nav.classList.toggle('show-menu');
// });



function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }