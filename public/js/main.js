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
        case "change":
            quantityAfter = parseInt(quantity.value);
            break;
        default:
            quantityAfter = 1;
    }
    quantity.value = quantityAfter;
    const moneyUi = document.querySelector(`#${moneyUiId}`);
    const total = quantityAfter * price;
    moneyUi.innerText = total;
}

// js admin hiển thị ảnh khi chọn file
const boxImg = document.querySelector('.wrapper-img');
const img = document.querySelector('.wrapper-img img');
const file = document.querySelector('#img-form');
if (boxImg) {
    file.addEventListener('change',function () {
        img.src = URL.createObjectURL(file.files[0]);
        img.style.display = 'block'
    })
}
