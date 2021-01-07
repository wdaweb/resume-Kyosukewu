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

    switch($_POST['table']){
        case "re_exp":
            $_POST['rank']=$Exp->q("select max(rank) from re_exp")[0][0]+1;
        break;
        case "re_skills":
            $_POST['rank']=$Sk->q("select max(rank) from re_skills")[0][0]+1;
        break;
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
?>