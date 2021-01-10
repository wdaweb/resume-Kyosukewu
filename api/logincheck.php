<?php
include_once "../base.php";

$acc=$_POST['acc'];

$chk=$Log->count(['acc'=>$acc]);

if($chk){
    echo 1;
}else{
    echo 0;
}


?>