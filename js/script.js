//GSAP
gsap.to(landing, {
  scrollTrigger: {
    trigger: hides[1],
    toggleClass: "show",
    start: "top center"
  }
});

gsap.to(about, {
  scrollTrigger: {
    trigger: hides[2],
    toggleClass: "show",
    start: "top center"
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