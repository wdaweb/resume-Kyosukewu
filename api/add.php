<?php
include_once "../base.php";


if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../titimg/'.$_FILES['img']['name']);
}


$_POST['sh']=1;
// print_r($_POST);

if(isset($_POST['chk'])){
    $_POST['chk']="";
    $Img->save($_POST);
}else{
    $_POST['chk']="";
    $Timg->save($_POST);
}

to('../backend.php?do=main');

?>