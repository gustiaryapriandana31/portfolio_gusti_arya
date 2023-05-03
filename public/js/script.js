// Untuk Scrolling Navigation Bar
let prevScrollpos = window.pageYOffset;
let nav = document.getElementById("nav");
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    nav.style.top = "0";
} else {
    nav.style.top = "-100px";
    nav.style.transition = "top 0.5s";
    nav.style.transitionTimingFunction = "ease-in-out";
  }
  prevScrollpos = currentScrollPos;
}

// Clock
function updateClock() {
    let now = new Date();
    let hours = now.getHours().toString().padStart(2, "0");
    let minutes = now.getMinutes().toString().padStart(2, "0");
    let seconds = now.getSeconds().toString().padStart(2, "0");
    
    document.getElementById("hours").textContent = hours;
    document.getElementById("minutes").textContent = minutes;
    document.getElementById("seconds").textContent = seconds;    
}

function startClock() {
    updateClock();
    setInterval(updateClock, 1000);
}

startClock();
