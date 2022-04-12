$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.collapsible').collapsible();
  $('#bla').collapsible();
  $('.modal').modal();
  $('.parallax').parallax();
});


$(".dropdown-trigger").dropdown();



$('.carousel').carousel();
setInterval(function() {
  $('.carousel').carousel('next');
}, 5000);


var click = 0;
var nya = new Audio('audio/nya.mp3');

function easteregg(){
  nya.pause();
  nya.currentTime = 0;
  document.getElementById("neko").classList.add('hide');
  document.getElementById('easterbutton').innerHTML="© 2021 Copyright Text"
  click += 1;

  if (click == 10){

    document.getElementById("neko").classList.remove('hide');
    document.getElementById('easterbutton').innerHTML="I don't want to get caught by the FBI"
    nya.play();
    click = 0;


  }
}
