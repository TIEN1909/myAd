const wrapper = document.querySelector('.client__comment-wrappers')
let isMouseDown = false
let startX, scrollLeft

wrapper.addEventListener('mousedown', (e) => {
	isMouseDown = true
	startX = e.pageX - wrapper.offsetLeft
	scrollLeft = wrapper.scrollLeft
})

wrapper.addEventListener('mouseleave', () => {
	isMouseDown = false
})

wrapper.addEventListener('mouseup', () => {
	isMouseDown = false
})

wrapper.addEventListener('mousemove', (e) => {
	if (!isMouseDown) return

	const x = e.pageX - wrapper.offsetLeft
	// 3 là tốc độ scroll
	const walk = (x - startX) * 3
	wrapper.scrollLeft = scrollLeft - walk
})

////////////////////////////////////////
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("hero__slider");
  let dots = document.getElementsByClassName("hero__dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
// menu
document.addEventListener("DOMContentLoaded", function () {
  const menuOpen = document.querySelector(".header__container-toggle");
  const menuClose = document.querySelector(".menu__text-close");
  const menu = document.querySelector(".menu");
  if (!menuOpen || !menuClose || !menu) return;
  menuOpen.addEventListener("click", function () {
    menu.classList.add("is-active");
  });
  menuClose.addEventListener("click", function () {
    menu.classList.remove("is-active");
  });
  document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !e.target.matches(".header__container-toggle")) {
      menu.classList.remove("is-active");
    }
  });
});