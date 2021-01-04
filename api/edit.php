<?php
include_once "../base.php";

$db=new DB($_POST['table']);
$row=$db->find($_POST['id']);


switch($_POST['table']){
    case 're_cont,re_job':
        $row['icon']=$_POST['icon'];
        $row['method']=$_POST['method'];
        $row['cont']=$_POST['cont'];
    break;
    default:
    $row['text']=$_POST['text'];
    break;
}


$db->save($row);

to('../backend.php?do='.$_POST['table']);
?>