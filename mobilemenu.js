const buttonOn = document.getElementById('menuIcon');
const buttonOff = document.getElementById('closeMenu');
const nav = document.querySelector('nav');

var slideOn = function(){
nav.style.animationName = 'mobileMenu';
nav.style.animationPlayState = 'running';
}

buttonOn.addEventListener("click", slideOn);

var slideOff = function(){
    nav.style.animationName = 'mobileMenuInverted';
    nav.style.animationPlayState = 'running';
}

buttonOff.addEventListener("click", slideOff);
//animacja odpalająca boczne mobilne menu