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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a1381bb91e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <title>履歷表後臺管理</title>
</head>

<body>
    <div class="content d-flex">
        <div class="menu text-center">
            <div class="header bg-dark mb-2 text-light">Resume Backend System</div>
            <a href="?do=main">
                <div class="select">頁首圖片</div>
            </a>
            <a href="?do=ab">
                <div class="select">關於我</div>
            </a>
            <a href="?do=exp">
                <div class="select">學習/工作經歷</div>
            </a>
            <a href="?do=sk">
                <div class="select">工作技能</div>
            </a>
            <a href="?do=pro">
                <div class="select">作品集</div>
            </a>
            <a href="?do=cont">
                <div class="select">聯絡我</div>
            </a>
            <a href="index.php" class="btn btn-outline-light">檢視首頁</a>
            <a class="btn btn-outline-light" onclick="logout()">管理登出</a>
        </div>
        <div class="edit">
            <div id="cover">
                <div class="imgc">
                    <a onclick="cl('#cover')"><i class="fas fa-times text-light"></i></a>
                    <img id="bimg" src="bimg/gb1.png">
                </div>
            </div>
            <?php
            $do = isset($_GET['do']) ? $_GET['do'] : 'main';
            $file = "backend/" . $do . ".php";

            if (file_exists($file)) {
                include $file;
            } else {
                include "backend/main.php";
            }
            ?>
        </div>

    </div>
</body>

</html>
<script>
    function logout() {
        let msg = "確定要登出?"
        if (confirm(msg) == true) {
            location.href = "api/logout.php";
        }
    }
</script>