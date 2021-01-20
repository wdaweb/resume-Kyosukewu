<?php
include_once "../base.php";
?>
<div class="addbody text-center">
    <form action="api/add.php" method="post" enctype="multipart/form-data">
        <?php
        switch ($_GET['t']) {
            case "re_titimg":
        ?>
                <h4>新增封面照片</h4>
                <hr>
                <input class="img" type="file" name="img">
                <input type="hidden" name="sh">
                <input type="hidden" name="table" value="re_titimg">
                <input type="hidden" name="do" value="main">
                <input class="submit btn btn-outline-warning" type="submit" value="上傳">
            <?php
                break;
            case "re_tittext":
            ?>
                <h4>新增動態文字</h4>
                <hr>
                <input class="img" type="file" name="img">
                <input type="hidden" name="sh">
                <input type="hidden" name="table" value="re_tittext">
                <input type="hidden" name="do" value="main">
                <input class="submit btn btn-outline-warning" type="submit" value="上傳">
        <?php
                break;
        }
        ?>
    </form>
</div>