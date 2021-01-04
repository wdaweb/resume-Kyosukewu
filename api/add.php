<?php
include_once "../base.php";

$table=$_POST['table'];

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../titimg/'.$_FILES['img']['name']);
}


$_POST['sh']=1;
print_r($_POST);

switch($_POST['chk']){
    case "cover":
        if (($key = array_search("cover", $_POST)) !== false) {
            unset($_POST[$key]);
        }
        $Img->save($_POST);
    break;
    case "mvtext":
        if (($key = array_search("mvtext", $_POST)) !== false) {
            unset($_POST[$key]);
        }
        $Timg->save($_POST);
    break;
    case "me":
        if (($key = array_search("me", $_POST)) !== false) {
            unset($_POST[$key]);
        }
        $Ab->save($_POST);
    break;
}


// if(isset($_POST['chk'])){
//     if (($key = array_search("chk", $_POST)) !== false) {
//         unset($_POST[$key]);
//     }
//     // print_r($_POST);
//     $Img->save($_POST);
// }else{
//     $Timg->save($_POST);
// }

to('../backend.php?do=main');

?>