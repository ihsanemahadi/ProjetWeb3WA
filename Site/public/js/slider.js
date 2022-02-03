'use strict';

/* SLIDER PAGE ACCUEIL */
let slideIndex = 0;


function currentSlide(x)
{
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[x].style.display = "flex";
}

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "flex";
  setTimeout(showSlides, 2000);
}

showSlides();

$('.point').on('click',function(){

  currentSlide($(this).data('pos'));
});