function mathPrice(price, action, selector, moneyUiId) {
  const quantity = document.getElementById(`${selector}`);
  let quantityAfter;
  switch (action) {
    case "plus":
      quantityAfter = parseInt(quantity.value) + 1;
      break;
    case "minus":
      if (quantity.value > 1) {
        quantityAfter = parseInt(quantity.value) - 1;
        break;
      }
      quantityAfter = 1;
      break;
    default:
      quantityAfter = 1;
  }
  quantity.value = quantityAfter;
  const moneyUi = document.querySelector(`#${moneyUiId}`);
  const totalEachProduct = quantityAfter * price;
  moneyUi.innerText = totalEachProduct;
  loadTotal();
}

function loadTotal(){
  const listTotal = document.querySelectorAll('.money-each');
  const totalOrder = document.querySelector('#totalOrder');
  const listOption = document.querySelectorAll(".vou option");
  let discount=0;
  for(let i = 0; i<listOption.length;i++){
    if(listOption[i].selected===true){
      discount  = parseInt(listOption[i].id);
    };
  }
  let totalMoney=0;
 for (let i =0;i<listTotal.length;i++){
    totalMoney+=parseInt(listTotal[i].innerText);
 }
 totalOrder.value = totalMoney - totalMoney*parseInt(discount)/100;
}


// js admin hiển thị ảnh khi chọn file
const boxImg = document.querySelector(".wrapper-img");
const img = document.querySelector(".wrapper-img img");
const file = document.querySelector("#img-form");
if (boxImg || file) {
  file.addEventListener("change", function () {
    img.src = URL.createObjectURL(file.files[0]);
    img.style.display = "block";
  });
}

