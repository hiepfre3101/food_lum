function activeNav(element) {
  const navParent = document.querySelector(".nav-parent");
  const listItem = navParent.querySelectorAll(".item-nav");
  for (let i = 0; i < listItem.length; i++) {
    element.className += " " + "item-active";
    listItem[i].classList.remove("item-active");
  }
}
function scrollNav() {
  const header = document.querySelector("#header-menu");
  const navMenu = document.querySelector(".nav-parent");
  const headerHeight = header.offsetHeight;
  const x = window.scrollY;
  if (x >= headerHeight) {
    navMenu.style.top = "0px";
    navMenu.style.boxShadow = "0px 0px 5px gray";
  } else {
    navMenu.style.top = "18rem";
    navMenu.style.boxShadow = "none";
  }
  scrollActive();
}

function scrollActive() {
  const header = document.querySelector("#header-menu");
  const navMenu = document.querySelector(".nav-parent");
  const navHeight = navMenu.offsetHeight;
  const navList = Array.from(navMenu.querySelectorAll(".item-nav"));
  const contentParent = document.querySelector(".container-content");
  const listMenu = Array.from(contentParent.querySelectorAll(".menu-block"));
  const headerHeight = header.offsetHeight;
  let idItem = "";
  listMenu.forEach((item,index) => {
   navList[index].classList.remove("item-active");
   // offsetHeight trả về chiều cao của 1 element gồm cả padding và margin cộng lại
   // phải trừ đi cả độ cao của header và nav phía trên
    let fromTop = item.offsetHeight - headerHeight - navHeight; 
    let rect = item.getBoundingClientRect();
    //rect trả về vị trí của element gọi đến nó
    //rect.top : khoảng cách của phần tử với top của browser 
   if(rect.top <= fromTop){
      idItem = item.id
   }
  });
 
  const itemNav = navList.find((item) => {
    if (item.getAttribute("href") === "#"+idItem) {
      return item;
    }
  });

itemNav.className +=" "+"item-active";
}
window.addEventListener("scroll", scrollNav);
