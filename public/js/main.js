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

function loadTotal() {
    const listTotal = document.querySelectorAll('.money-each');
    const totalOrder = document.querySelector('#totalOrder');
    const listOption = document.querySelectorAll(".vou option");
    let discount = 0;
    for (let i = 0; i < listOption.length; i++) {
        if (listOption[i].selected === true) {
            discount = parseInt(listOption[i].id);
        }
        ;
    }
    let totalMoney = 0;
    for (let i = 0; i < listTotal.length; i++) {
        totalMoney += parseInt(listTotal[i].innerText);
    }
    totalOrder.value = totalMoney - totalMoney * parseInt(discount) / 100;
}


// js admin hiển thị ảnh khi chọn file
const boxImg = document.querySelector(".wrapper-img");
const img = document.querySelector(".wrapper-img img");
const file = document.querySelector("#img-form");
if (file) {
    file.addEventListener("change", function () {
        img.src = URL.createObjectURL(file.files[0]);
        img.style.display = "block";
    });
}

const img2 = document.querySelectorAll(".wrapper-img img");
const file2 = document.querySelectorAll(".img-form");
if (file2[0]) {
    file2[0].addEventListener("change", function () {
        img2[0].src = URL.createObjectURL(file2[0].files[0]);
        img2[0].style.display = "block";
    });
    file2[1].addEventListener("change", function () {
        img2[1].src = URL.createObjectURL(file2[1].files[0]);
        img2[1].style.display = "block";
    });
    file2[2].addEventListener("change", function () {
        img2[2].src = URL.createObjectURL(file2[2].files[0]);
        img2[2].style.display = "block";
    });

}

function tabImg(data=[]){
    console.log(data);
}