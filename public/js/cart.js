const changeProductInCart = (idProduct, quantity = 1) => {
  console.log(quantity);
  const cart = JSON.parse(localStorage.getItem("cart"));
  if (!cart) {
    alert("Cart empty");
    return;
  }
  const productExist = cart.products.find(
    (product) => product.idProduct === idProduct
  );
  if (!productExist) {
    return;
  }
  if (quantity) {
    productExist.quantity = quantity;
  }
  productExist.subTotal = productExist.price * productExist.quantity;
  cart.products.splice(cart.products.indexOf(productExist), 1, productExist);
  resetLocalStorage("cart", cart);
};

function mathPrice(action, selectorInput, idProduct) {
  const quantity = document.getElementById(`${selectorInput}`);
  let quantityAfter;
  switch (action) {
    case "plus":
      quantityAfter = parseInt(quantity.value) + 1;
      changeProductInCart(idProduct, quantityAfter);
      break;
    case "minus":
      if (quantity.value > 1) {
        quantityAfter = parseInt(quantity.value) - 1;
        changeProductInCart(idProduct, quantityAfter);
        break;
      }
      quantityAfter = 1;
      break;
    default:
      quantityAfter = 1;
  }
  quantity.value = quantityAfter;
  displayCart();
  // loadTotal();
}

function loadTotal() {
  const listTotal = document.querySelectorAll(".money-each");
  const totalOrder = document.querySelector("#totalOrder");
  const listOption = document.querySelectorAll(".vou option");
  let discount = 0;
  for (let i = 0; i < listOption.length; i++) {
    if (listOption[i].selected === true) {
      discount = parseInt(listOption[i].id);
    }
  }
  let totalMoney = 0;
  for (let i = 0; i < listTotal.length; i++) {
    totalMoney += parseInt(listTotal[i].innerText);
  }
  totalOrder.value = totalMoney - (totalMoney * parseInt(discount)) / 100;
}

const resetLocalStorage = (key, object) => {
  localStorage.removeItem(key);
  localStorage.setItem(key, JSON.stringify(object));
};

const addToCart = (idProduct, quantity, price, image, productName) => {
  const productAdd = {
    idProduct,
    quantity,
    price,
    image,
    productName,
    subTotal: price,
  };
  const cart = JSON.parse(localStorage.getItem("cart"));
  if (!cart) {
    localStorage.setItem(
      "cart",
      JSON.stringify({
        products: [productAdd],
      })
    );
  } else {
    const productExist = cart.products.find(
      (product) => product.idProduct === idProduct
    );
    if (!productExist) {
      cart.products.push(productAdd);
      resetLocalStorage("cart", cart);
      return;
    }
    productExist.quantity += quantity;
    productExist.subTotal = productExist.quantity * price;
    cart.products.splice(cart.products.indexOf(productExist), 1, productExist);
    resetLocalStorage("cart", cart);
  }
};

const displayCart = () => {
  const cart = JSON.parse(localStorage.getItem("cart"));
  const cartWrapper = document.querySelector("#cart-wrapper");
  if (!cart || cart.products.length === 0) {
    cartWrapper.innerHTML = "<h1>Cart empty</h1>";
    return;
  }
  if (!cartWrapper) {
    return;
  }
  if (cart.products.length === 0) {
    cartWrapper.innerHTML = "<h1>Cart empty</h1>";
  }
  cartWrapper.innerHTML = "";
  cart.products.map((product) => {
    cartWrapper.innerHTML += `
            <div class='giohang d-flex justify-content-start'>
                <div class="gh1 overflow-hidden"><img class="img1" src="${
                  product.image
                }" alt=''></div>
                <div class="info-cart-block w-75">
                    <div class='tengh'>
                        <p class='namegh'>${product.productName}</p>
                        <div class="w-100 d-flex justify-content-start">
                            <div class="action-block w-50 d-flex justify-content-around">
                                <span class='input-group-text btn btn-danger h-100 d-flex align-items-center justify-content-center fw-bold fs-3' onclick="mathPrice('minus',${
                                  product.idProduct
                                },${product.idProduct})"> - </span>
                                <input onChange ="changeProductInCart(${
                                  product.idProduct
                                },${this.value})" type='number' name="${
      product.idProduct
    }" value='${
      product.quantity
    }' class='form-control text-center border h-100 fs-3 flex-fill ms-2 me-2' id="${
      product.idProduct
    }" min='1' max='100'  />
                                <span class='input-group-text btn btn-success h-100 d-flex align-items-center justify-content-center fw-bold fs-3'  onclick="mathPrice('plus',${
                                  product.idProduct
                                },${product.idProduct})"> + </span>
                            </div>
                            <!--lấy giá ở đây-->
                            <p class='pr w-25 fs-3 d-flex align-items-center ms-3'>
                                <span class="money-each" id="money<?= $key ?>">${
                                  product.subTotal
                                }</span>
                                <span>đ</span>
                            </p>
                        </div>
                    </div>
                    <div class='xn'>
                        <button type="button" class='cn'  onclick="removeItem(${cart.products.indexOf(
                          product
                        )})">Xoá</button>
                    </div>
                </div>
            </div>
    `;
  });
};

displayCart();

const removeItem = (indexProduct) => {
  const cart = JSON.parse(localStorage.getItem("cart"));
  const cartWrapper = document.querySelector("#cart-wrapper");
  if (!cart || cart.products.length === 0) {
    cartWrapper.innerHTML = "<h1>Cart empty</h1>";
    return;
  }
  const productRemoved = cart.products.splice(indexProduct, 1);
  if (!productRemoved) {
    console.log("chua xoa dc !");
    return;
  }
  resetLocalStorage("cart", cart);
  displayCart();
};
const deleteCart = () => {
  localStorage.removeItem("cart");
};
