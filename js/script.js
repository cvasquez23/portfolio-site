// Nav Toggle
$('.menu-collapsed').click(function() {
  $(this).toggleClass('menu-expanded');
});

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

// Smooth Scroll
function scrollButton() {
  $('a[href*="#"]').click(function() {
    $('html, body')
      .stop()
      .animate(
        {
          scrollTop: $($(this).attr('href')).offset().top
        },
        1200
      );
    return false;
  });
  // $('.scrollTop a').scrollTop();
}
scrollButton();

// Disable .menu-expanded On Nav Click
$('.nav-link').click(function() {
  $('div:first').toggleClass('menu-expanded');
});

// Animations
const slideRight = {
  values: [
    { x: '105%', y: 0 }
    // { x: '-100%', y: 0 }
  ]
};

const slideLeft = {
  values: [
    { x: '-105%', y: 0 }
    // { x: '100%', y: 0 }
  ]
};

const slideUp = {
  values: [{ x: 0, y: '105%' }]
};

var fadeOut = new TimelineLite();
var tl1 = new TimelineLite();
var tl2 = new TimelineLite();
var tl3 = new TimelineLite();
var fadeIn = new TimelineLite();

fadeOut.add(
  TweenLite.to('#section-1', 1, {
    opacity: 0
  })
);

tl1.add(
  TweenLite.to('.about', 1, {
    bezier: slideRight,
    ease: Power0.linear
  })
);

tl2.add(
  TweenLite.to('.skills', 1, {
    bezier: slideLeft,
    ease: Power0.linear
  })
);

tl3.add(
  TweenLite.to('.portfolio', 1, {
    bezier: slideRight,
    ease: Power0.linear
  })
);

fadeIn.add(
  TweenLite.to('#section-5', 1, {
    opacity: 1
  })
);

const controller = new ScrollMagic.Controller();

var fadeOut = new ScrollMagic.Scene({
  triggerElement: '#section-1',
  triggerHook: 0,
  duration: '25%'
})
  .setTween(fadeOut)
  // .addIndicators()
  .addTo(controller);

var scene1 = new ScrollMagic.Scene({
  triggerElement: '#section-2',
  duration: '50%'
})
  .setTween(tl1)
  // .addIndicators()
  .addTo(controller);

var scene2 = new ScrollMagic.Scene({
  triggerElement: '#section-3',
  duration: '50%'
})
  .setTween(tl2)
  // .addIndicators()
  .addTo(controller);

var scene3 = new ScrollMagic.Scene({
  triggerElement: '#section-4',
  duration: '50%'
})
  .setTween(tl3)
  // .addIndicators()
  .addTo(controller);

var fadeIn = new ScrollMagic.Scene({
  triggerElement: '#section-5',
  triggerHook: 1,
  duration: '99%'
})
  .setTween(fadeIn)
  // .addIndicators()
  .addTo(controller);

// VH iOS Fix
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

// Defer offscreen images
function init() {
  var imgDefer = document.getElementsByTagName('img');
  for (var i = 0; i < imgDefer.length; i++) {
    if (imgDefer[i].getAttribute('data-src')) {
      imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
    }
  }
}
window.onload = init;
