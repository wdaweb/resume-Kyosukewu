<?php
include_once "../base.php";

switch ($_GET['type']) {
    case 1:
?>

        <input class="img" type="file" name="img">
        <input type="hidden" name="sh">
        <input type="hidden" name="table" value="re_titimg">
        <input type="hidden" name="do" value="main">
        <input class="submit btn btn-outline-warning" type="submit" value="上傳">
    <?php
        break;
    case 2:
    ?>
        <h4>新增照片</h4>
        <hr>
        <input class="uplfile" type="file" name="img">
        <input type="hidden" name="table" value="re_about">
        <input type="hidden" name="do" value="ab">
    <?php
        break;
    case 3:
    ?>
        <h4>新增技能</h4>
        <hr>
        <div class="mt-3">分類：
            <select class="w-50" name="type">
                <option value="1"><?= $tstr['sk'][1]; ?></option>
                <option value="2"><?= $tstr['sk'][2]; ?></option>
                <option value="3"><?= $tstr['sk'][3]; ?></option>
                <option value="4"><?= $tstr['sk'][4]; ?></option>
            </select>
        </div>
        <div class="mt-3">圖片：<input type="file" name="img"></div>
        <input type="hidden" name="table" value="re_skills">
        <input type="hidden" name="do" value="sk">
    <?php
        break;
    case 4:
    ?>
        <input type="hidden" name="table" value="re_pro">
        <input type="hidden" name="do" value="pro">
<?php
        break;
}
