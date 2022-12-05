const modalWrapper = document.querySelector(".modal-wrap");
const url = window.location.href;
const searchParams = new URLSearchParams(url);
const btnClose = document.querySelector(".close-modal");
btnClose.addEventListener("click",()=>{
    modalWrapper.style.display = "none";
})
if(searchParams.has('vnp_SecureHash')){
    modalWrapper.style.display = "block";
}else{
   modalWrapper.style.display = "none";
}

function changeTab(tab){
  const listTab =Array.from(tab.parentElement.querySelectorAll(".nav-link"));
  listTab.forEach((tab)=>{
     tab.classList.remove("active-tab");
  })
  tab.classList.add("active-tab");
}