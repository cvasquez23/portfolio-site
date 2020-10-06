//Fullpage JS
var myFullpage = new fullpage('#fullpage', {
  //navigation: true,
  anchors: ['page1', 'page2', 'page3', 'page4'],
  lockAnchors: true,
  scrollingSpeed: 1500,
  easing: 'ease-in-out',
  fitToSection: true,
  fitToSectionDelay: 1000,
  onLeave: (origin, destination, direction) => {
    const section = destination.item;
    // const title = section.querySelector('.section');
    const tl = gsap.timeline();
    // gsap.set('.landing', { opacity: '1', visibility: 'visible' });
    if (destination.index === 1) {
      tl.fromTo('.about-card', 1.5, { x: '-100%' }, { x: '10%' });
    }

    if (destination.index === 2) {
      tl.fromTo('.skills-card', 1.5, { x: '100%' }, { x: '-10%' });
    }
  },
});

function slide2() {
  var element = document.getElementById('#slide2');
  fullpage_api.moveTo('page2');
}

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
    pos++;
    setTimeout(typeWriter, speed);
  }
}
