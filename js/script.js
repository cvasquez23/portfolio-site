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
    pos++;
    setTimeout(typeWriter, speed);
  }
}

// Animations
const slideRight = {
  values: [
    { x: '105%', y: 0 },
    // { x: '-100%', y: 0 }
  ],
};

const slideLeft = {
  values: [
    { x: '-105%', y: 0 },
    // { x: '100%', y: 0 }
  ],
};

const slideUp = {
  values: [{ x: 0, y: '105%' }],
};

var fadeOut = new TimelineLite();
var tl1 = new TimelineLite();
var tl2 = new TimelineLite();
var tl3 = new TimelineLite();
var fadeIn = new TimelineLite();

fadeOut.add(
  TweenLite.to('#section-1', 1, {
    opacity: 0,
  })
);

tl1.add(
  TweenLite.to('.about', 1, {
    bezier: slideRight,
    ease: Power0.linear,
  })
);

tl2.add(
  TweenLite.to('.skills', 1, {
    bezier: slideLeft,
    ease: Power0.linear,
  })
);

tl3.add(
  TweenLite.to('.portfolio', 1, {
    bezier: slideRight,
    ease: Power0.linear,
  })
);

fadeIn.add(
  TweenLite.to('#section-5', 1, {
    opacity: 1,
  })
);

const controller = new ScrollMagic.Controller();

var fadeOut = new ScrollMagic.Scene({
  triggerElement: '#section-1',
  triggerHook: 0,
  duration: '25%',
})
  .setTween(fadeOut)
  // .addIndicators()
  .addTo(controller);

var scene1 = new ScrollMagic.Scene({
  triggerElement: '#section-2',
  duration: '50%',
})
  .setTween(tl1)
  // .addIndicators()
  .addTo(controller);

var scene2 = new ScrollMagic.Scene({
  triggerElement: '#section-3',
  duration: '50%',
})
  .setTween(tl2)
  // .addIndicators()
  .addTo(controller);

var scene3 = new ScrollMagic.Scene({
  triggerElement: '#section-4',
  duration: '50%',
})
  .setTween(tl3)
  // .addIndicators()
  .addTo(controller);

var fadeIn = new ScrollMagic.Scene({
  triggerElement: '#section-5',
  triggerHook: 1,
  duration: '99%',
})
  .setTween(fadeIn)
  // .addIndicators()
  .addTo(controller);
