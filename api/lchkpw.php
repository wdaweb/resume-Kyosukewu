<?php
include_once "../base.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$chk=$Log->count(['acc'=>$acc,'pw'=>$pw]);

if($chk){
    echo 1;
    $_SESSION['login']=$acc;
}else{
    echo 0;
}

?>