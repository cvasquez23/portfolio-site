//Fullpage JS
var myFullpage = new fullpage('#fullpage', {
  navigation: true,
  anchors: ['page1', 'page2'],
  scrollingSpeed: 1500,
  easing: 'ease-in-out',
});

$(document).on('click', '#slide2', function () {
  fullpage_api.moveTo('page2');
});

// Nav Toggle
function menuToggle() {
  var element = document.getElementById('nav');
  element.classList.toggle('menu-expanded');
}

// Disable .menu-expanded On Nav Click
function menuCollapse() {
  var element = document.getElementById('#nav');
  element.classList.remove('menu-expanded');
}

// Typewriter Effect
var pos = 0;
var turn = 0;
var data = ['// web.developer();'];
var speed = 150;

setTimeout(typeWriter, speed);

function typeWriter() {
  if (pos < data[turn].length) {
    document.getElementById('type').innerHTML += data[turn].charAt(pos);
    // console.log(data[turn].charAt(pos));
    pos++;
    setTimeout(typeWriter, speed);
  }
}
