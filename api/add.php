<?php
include_once "../base.php";

$db=new DB($_POST['table']);
$table=$_POST['do'];
// print_r($_POST);

    if(!empty($_FILES['img']['tmp_name'])){
        $_POST['img']=$_FILES['img']['name'];
        if($table=='main'){
            move_uploaded_file($_FILES['img']['tmp_name'],'../titimg/'.$_FILES['img']['name']);
        }else{
            move_uploaded_file($_FILES['img']['tmp_name'],'../icon/'.$_FILES['img']['name']);
        }
    }

unset($_POST['table']);
unset($_POST['do']);

$chk=$db->count();

if(empty($chk)){
    $_POST['sh']=1;
}else{
    $_POST['sh']=0;
}
// print_r($_POST);

$db->save($_POST);

to('../backend.php?do='.$table);



// switch($_POST['chk']){
//     case "cover":
//         if (($key = array_search("cover", $_POST)) !== false) {
//             unset($_POST[$key]);
//         }
//         unset($_POST['table']);
//         $Img->save($_POST);
//         to('../backend.php?do=main');
//     break;
//     case "mvtext":
//         if (($key = array_search("mvtext", $_POST)) !== false) {
//             unset($_POST[$key]);
//         }
//         unset($_POST['table']);
//         $Timg->save($_POST);
//         to('../backend.php?do=main');
//     break;
//     case "me":
//         if (($key = array_search("me", $_POST)) !== false) {
//             unset($_POST[$key]);
//         }
//         unset($_POST['table']);
//         $Ab->save($_POST);
//         to('../backend.php?do=ab');
//     break;
//     case "abtext":
//         if (($key = array_search("abtext", $_POST)) !== false) {
//             unset($_POST[$key]);
//         }
//         unset($_POST['table']);
//         $Ab->save($_POST);
//         to('../backend.php?do=ab');
//     break;
// }
?>