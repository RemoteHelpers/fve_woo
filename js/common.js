// hiring process scroll line
window.onscroll = function() {myFunction()};
function myFunction() {
var winScroll = document.documentElement.scrollTop - document.querySelector('.start-working').offsetTop + document.querySelector('.start-working').offsetHeight - 100;
var height = document.querySelector('.start-working').offsetHeight;
var scrolled = (winScroll / height) * 100;
document.getElementById("myBar").setAttribute('style', `height: ${scrolled}%; background: var(--orange)`)
}


