<?php
include_once "../base.php";
?>

<div class="addbody text-center">
    <form action="api/add.php" method="post" enctype="multipart/form-data">
        <?php
        switch ($_GET['t']) {
            case "re_about":
        ?>
                <h4>新增照片</h4>
                <hr>
                <input class="uplfile" type="file" name="img">
                <input type="hidden" name="table" value="re_about">
            <?php
                break;
            case "re_abouttext":
            ?>
                <h4>新增自我簡介</h4>
                <hr>
                <textarea class="txtar" name="text"></textarea>
                <input type="hidden" name="table" value="re_abouttext">
            <?php
                break;
            case "re_edu":
            ?>
                <h4>新增學歷</h4>
                <hr>
                學校/科系：<input type="text" name="text">
                <select name="finish">
                    <option value="1">畢業</option>
                    <option value="2">肄業</option>
                    <option value="3">其他</option>
                </select>
                <input type="hidden" name="table" value="re_edu">
            <?php
                break;
            case "re_cont":
            ?>
                <h4>新增聯絡資訊</h4>
                <hr>
                <div class="mt-3">圖示：<input type="text" name="icon"></div>
                <div class="mt-3">方式：<input type="text" name="method"></div>
                <div class="mt-3">內容：<input type="text" name="cont"></div>
                <input type="hidden" name="table" value="re_cont">
            <?php
                break;
            case "re_job":
            ?>
                <h4>新增求職條件</h4>
                <hr>
                <div class="mt-3">項目：<input type="text" name="text"></div>
                <div class="mt-3">內容：<input type="text" name="cont"></div>
                <input type="hidden" name="table" value="re_job">
            <?php
                break;
            case "re_self":
                ?>
                <h4>新增自傳</h4>
                <hr>
                <textarea class="txtar" name="text"></textarea>
                <input type="hidden" name="table" value="re_self">
                <?php
                break;
                ?>
        <?php
        }
        ?>
        <input type="hidden" name="sh">
        <input type="hidden" name="do" value="ab">
        <div>
            <input class="btn btn-warning mt-3" type="submit" value="上傳">
        </div>
    </form>
</div>