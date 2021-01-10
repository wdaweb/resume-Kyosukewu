<?php
include_once "../base.php";

$db=new DB($_POST['table']);
$row=$db->find($_POST['id']);
$do=$_POST['do'];

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../icon/'.$_FILES['img']['name']);
}

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
    case "re_exp":
        $row['year']=$_POST['year'];
        $row['jtitle']=$_POST['jtitle'];
        $row['cont']=$_POST['cont'];
    break;
    case "re_skills":
        $row['type']=$_POST['type'];
        $row['cont']=$_POST['cont'];
        if(!empty($_POST['img'])){
            $row['img']=$_POST['img'];
        }
    break;
    case "re_pro":
        $row['type']=$_POST['type'];
        $row['name']=$_POST['name'];
        $row['cont']=$_POST['cont'];
        if(!empty($_POST['img'])){
            $row['img']=$_POST['img'];
        }
        if(!empty($_POST['bimg'])){
            $row['bimg']=$_POST['bimg'];
        }
        if(!empty($_POST['link'])){
            $row['link']=$_POST['link'];
        }
        if(!empty($_POST['sk1'])){
            $row['sk1']=$_POST['sk1'];
        }
        if(!empty($_POST['sk2'])){
            $row['sk2']=$_POST['sk2'];
        }
        if(!empty($_POST['sk3'])){
            $row['sk3']=$_POST['sk3'];
        }
        if(!empty($_POST['sk4'])){
            $row['sk4']=$_POST['sk4'];
        }
        if(!empty($_POST['sk5'])){
            $row['sk5']=$_POST['sk5'];
        }
        if(!empty($_POST['sk6'])){
            $row['sk6']=$_POST['sk6'];
        }
    break;
    default:
        $row['text']=$_POST['text'];
    break;
}
unset($_POST['do']);
unset($_POST['table']);
print_r($row);
$db->save($row);

to('../backend.php?do='.$do);
