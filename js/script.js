//GSAP
gsap.registerPlugin(ScrollTrigger);

gsap.to(".landing-title", {
  scrollTrigger: {
    trigger: ".landing-title",
    toggleClass: "show",
    start: "top center",
    markers: true
  }
});

gsap.to('.about', {
  scrollTrigger: {
    trigger: '.about',
    toggleClass: "show",
    start: "top center",
    markers: true
  }
});

//Nav Bar Toggle 
function toggleNav(){
  var elm = document.getElementById("navToggle").checked = false;
  elm.checked = !elm.checked;
}

//Progress Bar
let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;

window.onscroll = function(){
  let progressHeight = (window.pageYOffset / totalHeight) * 100;
  progress.style.height = progressHeight + "%";
}