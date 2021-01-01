<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="css/styleBack.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<title>履歷表後臺管理</title>
</head>
<body>
    <div class="header"></div>
    <div class="content">
    <div class="menu">

    </div>
    <div class="edit">
        <?php
            $do=isset($_GET['do'])?$_GET['do']:'main';
            $file="backend/".$do.".php";

            if(file_exists($file)){
                include $file;
            }else{
                include "backend/main.php";
            }
        ?>
    </div>
    </div>
    
</body>
</html>