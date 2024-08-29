const hamburger = document.querySelector(".hamburger");
const navigation = document.querySelector(".list");

hamburger.addEventListener("click", function () {
  navigation.classList.toggle("display-none");
});

const header = document.querySelector("header");
var position = header.offsetTop;

window.addEventListener("scroll", () => {
  if (window.pageYOffset > position) {
    header.classList.add("sticky");
    header.style.top = "0";
  } else {
    header.classList.remove("sticky");
  }
});

function openSports(evt, sportsName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("search-option");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" option-active", "");
  }
  document.getElementById(sportsName).style.display = "block";
  evt.currentTarget.className += " option-active";
}
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
var li = document.querySelector("header .nav ul li");
li.addEventListener("hover", () => {
  document.getElementsByClassName("sub-menu").style.display = "block";
});
