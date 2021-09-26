
//이미지 슬라이드////////
$('.item.leftImg').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
})
////////////////////////



//브랜드 로고 클릭시 내용 나타냄/////////
const brandLogo  = document.getElementsByClassName('brandLogo')
const brandIntro  = document.getElementsByClassName('brandIntro')

for (let i = 0; i < brandLogo.length; i++) {
  
  brandLogo[i].addEventListener('click',()=>{
    for (let j = 0; j < brandIntro.length; j++) {
      brandIntro[j].classList.remove('view')
    }
    brandIntro[i].classList.toggle('view');
    brandIntro[i].scrollIntoView({behavior:'smooth',block:'center'})
  })
}
////////////////////////////////////////

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


//팝업창 띄우기//////
const closeW = document.querySelector('.notice .closeW')
const closeN = document.querySelector('.notice .close')
let currentCookie = document.cookie;
let cookieCheck = currentCookie.indexOf('freedombike');

if (cookieCheck > -1) {
  document.querySelector('.notice').style.display = 'none'
} else {
  document.querySelector('.notice').style.display = 'block'
}


closeW.addEventListener('click',()=>{
  deleteCookieW() 
  if (cookieCheck > -1) {
    document.querySelector('.notice').style.display = 'block'
  } else {
    document.querySelector('.notice').style.display = 'none'
  }
})


closeN.addEventListener('click',()=>{
  deleteCookie();
  if (cookieCheck > -1) {
    document.querySelector('.notice').style.display = 'block'
  } else {
    document.querySelector('.notice').style.display = 'none'
  }

})

//쿠키 생성 -소멸기간 일주일 뒤로
function deleteCookieW() {
  let date = new Date();
  date.setDate(date.getDate() + 7)
  let setCookie = '';
  setCookie += 'CookieName = freedombike;'
  setCookie += 'expires =' + date.toUTCString();
  document.cookie = setCookie;
}

//쿠키 삭제
function deleteCookie() {
    let date = new Date();
    date.setDate(date.getDate() - 1);
    console.log(date);
    let setCookie = '';
    setCookie += 'CookieName = freedombike;';
    setCookie += 'expires =' + date.toUTCString();
    document.cookie = setCookie;
}
//--------------------------------