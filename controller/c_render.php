<?php
//@param : $path : tên view mà người dùng muốn render
//@param : $data = [] : mảng chứa các mảng dữ liệu lấy từ database về nhằm sử dụng cho view
//@param : $role : số 1 -> admin, số 0 -> user, dùng để phân quyền người dùng để cho ra view hợp lí
// usage : dùng ở cuối các hàm controller để render ra view hợp lí 
  function render($path,$data=[], $role){
      extract($data);
      if($role == 1) {
        $view = "./admin/view/".$path.".php";
      }else if($role == 0){
        $view = "./view/".$path.".php";
      }
    include_once $view;
  }
?>