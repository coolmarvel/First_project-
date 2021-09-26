let sortBtn = document.querySelector(".filter-menu").children;
let sortItem = document.querySelector(".filter-item").children;

for (let i = 0; i < sortBtn.length; i++) {
  sortBtn[i].addEventListener("click", function () {
    for (let j = 0; j < sortBtn.length; j++) {
      sortBtn[j].classList.remove("current");
    }
    this.classList.add("current");

    let targetData = this.getAttribute("data-target");

    for (let k = 0; k < sortItem.length; k++) {
      sortItem[k].classList.remove("active");
      sortItem[k].classList.add("delete");

      if (
        sortItem[k].getAttribute("data-item") == targetData ||
        targetData == "all"
      ) {
        sortItem[k].classList.remove("delete");
        sortItem[k].classList.add("active");
      }
    }
  });
}

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
