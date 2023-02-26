let menuBtn = document.querySelector('.menu-btn');
let nav = document.querySelector('nav');
menuBtn.addEventListener('click', function() {
  nav.classList.toggle('show-menu');
});