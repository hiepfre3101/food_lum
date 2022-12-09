function filterComment(filter=undefined){
    const wrapper = document.querySelector(".cmt-wrapper");
    const btnBack = document.querySelector(".back-btn");
    const containerStar = document.querySelector(".star1");
    const selectBlock = document.querySelector(".selected-block");
    const url = window.location.href;
   selectBlock.style.display = "flex";
   selectBlock.lastElementChild.value = filter;
    if(typeof filter === "string"){
       window.location.assign(url);
       return;
    };
      containerStar.classList.add("swip-left");
      btnBack.onclick=()=>{
         window.location.assign(url);
         containerStar.classList.remove("swip-left");
         selectBlock.style.display = "none";
      }  
    const starList = Array.from(document.querySelectorAll(".all-star"));
    const starFiltered = starList.filter(item=>{
          return item.childElementCount === filter;
    })
   wrapper.innerHTML = "";
   if(starFiltered.length===0){
    wrapper.innerHTML = "<p class ='fw-bold fs-3'>Not found anything</p>"
   }
  starFiltered.map(item=>{
   wrapper.innerHTML += item.parentNode.parentNode.outerHTML;
});  
}