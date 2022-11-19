//Đối tượng validator
function validator(object) {
  const selectorRules = {}; //1 object lưu các rule cần thực hiện
  //Hàm thực hiện validate
  function validate(inputEle, rule) {
    let rules = selectorRules[rule.selector];
    let erroMess = null;
    for (let i = 0; i < rules.length; ++i) {
      erroMess = rules[i](inputEle.value);
      if (erroMess) break;
    }
    const erroEle = inputEle.parentElement.querySelector(".form-message");
    if (erroMess) {
      erroEle.innerText = erroMess;
      erroEle.className += " ivalid";
    } else {
      erroEle.innerText = "";
      erroEle.className = "form-message";
    }
    return erroMess;
  }

  //Nếu có lỗi sẽ bỏ submit còn k thì submit
  let formEle = document.querySelector(object.form);
  if (formEle) {
    formEle.onsubmit = (e) => {
      let results = [];
      object.rules.map((rule) => {
        let inputEle = document.querySelector(rule.selector);
        if (validate(inputEle, rule)) {
          results.push(validate(inputEle, rule));
        }
      });
      if (results.length > 0) {
        e.preventDefault();
      }
    };
    //Gán từng rule vào mảng 'selectorRules[rule.selector]'
    object.rules.map((rule) => {
      if (Array.isArray(selectorRules[rule.selector])) {
        selectorRules[rule.selector].push(rule.test);
      } else {
        selectorRules[rule.selector] = [rule.test];
      }
      let inputEle = document.querySelector(rule.selector);
      if (inputEle) {
        inputEle.onblur = function () {
          validate(inputEle, rule);
        };

        inputEle.oninput = function () {
          let errorEle = inputEle.parentElement.querySelector(".form-message");
          errorEle.innerText = "";
          inputEle.parentElement.classList.remove("invalid");
        };
      }
    }); // end of map
  }
}

validator.isRequired = (selector) => {
  return {
    selector: selector,
    test: (value) => {
      return value.trim() ? undefined : "Vui lòng nhập trường này!";
    },
  };
};

validator.isPassword = (selector, constraint) => {
  return {
    selector: selector,
    test: (value) => {
      return value.length >= constraint
        ? undefined
        : `Vui lòng nhập tối đa ${constraint} kí tự!`;
    },
  };
};

validator.isPasswordConfirm = (selector, getPwdValue) => {
  return {
    selector: selector,
    test: (value) => {
      return getPwdValue() === value
        ? undefined
        : "Vui lòng nhập đúng mật khẩu!";
    },
  };
};

validator.isEmail = (selector) => {
  return {
    selector: selector,
    test: (value) => {
      const regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if (!regex.test(value)) {
        return "Vui lòng nhập đúng định dạng email !";
      } else {
        return undefined;
      }
    },
  };
};
