<?php
include_once "../base.php";

$db=new DB($_POST['table']);
$row=$db->find($_POST['id']);
$do=$_POST['do'];
unset($_POST['do']);

switch($_POST['table']){
    case 're_cont':
        $row['icon']=$_POST['icon'];
        $row['method']=$_POST['method'];
        $row['cont']=$_POST['cont'];
    break;
    case 're_job':
        $row['text']=$_POST['text'];
        $row['cont']=$_POST['cont'];
    break;
    default:
    $row['text']=$_POST['text'];
    break;
}


$db->save($row);

to('../backend.php?do='.$do);
?>