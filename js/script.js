//Fullpage JS
var myFullpage = new fullpage('#fullpage', {
  //navigation: true,
  anchors: ['page1', 'page2'],
  lockAnchors: true,
  scrollingSpeed: 1500,
  easing: 'ease-in-out',
  onLeave: (origin, destination, direction) => {
    const section = destination.item;
    // const title = section.querySelector('.section');
    const tl = new TimelineMax({ delay: 1 });
    // tl.fromTo(title, 0.5, { opacity: '1' }, { opacity: '0' });
    if (destination.index === 1) {
      const aboutCard = document.querySelectorAll('.about');
      tl.fromTo(aboutCard, 0.5, { x: '-100%' }, { x: '10%' });
    }
    if (destination.index === 2) {
      const skillsCard = document.querySelectorAll('.skills');
      tl.fromTo(skillsCard, 0.5, { x: '50%' }, { x: '-10%' });
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
