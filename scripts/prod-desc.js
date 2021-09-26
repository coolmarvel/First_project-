let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {
    slideIndex = 1;
  } else if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace("active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += "active";
}

//
//반응형) width값 1024px 이하시 메뉴바 삭제 후 전체메뉴바 띄움
const menuBtn = document.querySelector('.toggleBtn');
const menuList = document.querySelector('.menuList');
const more = document.querySelector('.menuList li');
const moreList = document.querySelector('.more');
const rightMenu = document.querySelector('.rightMenu');

menuBtn.addEventListener('click', ()=>{
  menuList.classList.toggle('active')
  rightMenu.classList.toggle('active')
})

more.addEventListener('click',()=>{
  moreList.classList.toggle('active');
} )



