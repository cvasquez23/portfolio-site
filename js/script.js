// Nav Toggle
$('.menu-collapsed').click(function () {
  $(this).toggleClass('menu-expanded');
});

// Disable .menu-expanded On Nav Click
$('.nav-link').click(function () {
  $('div:first').toggleClass('menu-expanded');
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
  $('a[href*="#"]').click(function () {
    $('html, body')
      .stop()
      .animate(
        {
          scrollTop: $($(this).attr('href')).offset().top,
        },
        1500
      );
    return false;
  });
  // $('.scrollTop a').scrollTop();
}
scrollButton();

window.addEventListener('scroll', function () {
  console.log("Scrollin'");
});
