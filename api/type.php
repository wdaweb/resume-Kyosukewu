<?php
include_once "../base.php";

if($_GET['type']==1){
    echo "連結：<input type='text' name='link'>";
}else{
    echo "大圖：<input type='file' name='bimg'>";
}


?>