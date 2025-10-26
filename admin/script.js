var menu = document.querySelector(".navbar i");
var close = document.querySelector(".ri-close-line");
var tl = gsap.timeline();
tl.to(".full",{
    left: 0,
    duration: 1,
})
tl.from(".full h4",{
    x: -100,
    duration: 0.3,
    opacity: 0,
    stagger: 0.15
})
tl.from(".full i",{
    opacity: 0
})
tl.pause();
menu.addEventListener("click", function(){
  tl.play()
})

close.addEventListener("click",function(){
    tl.reverse()
})