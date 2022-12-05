<?php
function showSlide()
{
    $arrSlider = getAllDataSlider();
    render('list-slider', ["arrSlider" => $arrSlider], 1);
}

function updateSlider()
{
    $arrSlider = getAllDataSlider();
    foreach ($arrSlider as $value) {
        if(isset($_FILES[''.'slider-'.$value['id'].''])){
            $img = $_FILES[''.'slider-'.$value['id'].''];
            $imgName = "./public/img/".$img['name'];
        }
        $id = $value['id'];
        $title = $_POST[''.'title-'.$value['id'].''];
        $desc = $_POST[''.'desc-'.$value['id'].''];
        $data = [
            "image" =>$imgName,
            "title" =>$title,
            "description" =>$desc,
            "id" =>$id
        ];
        if($img['size'] == 0){
            unset($data['image']);
        }else{
            move_uploaded_file($img['tmp_name'],$imgName);
        }
        updateDataSlider($data);
    }
    header("location:index.php?ctr=list-slider");
}

function deleteSlider(){
    deleteDataSlider($_GET['id']);
    header("location:index.php?ctr=list-slider");
}
function showFormAddSlider(){
    render('form-add-slider',[],1);
}

function addSlider(){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $img = $_FILES['img-add'];
    $imgName = "./public/img/".$img['name'];
    $data = [
        "image"=>$imgName,
        "title"=>$title,
        "description"=>$desc
    ];
    if($img['size'] == 0){
        unset($data['image']);
    }else{
        move_uploaded_file($img['tmp_name'],$imgName);
    }
    addDataSlider($data);
    header("location:index.php?ctr=list-slider");
}