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
