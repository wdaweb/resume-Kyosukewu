<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
<div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
<div class="main text-center">
    <div class="h3"><?= $tstr[$do][1]; ?></div>
    <div class="showimg">
        <table class="w-100">
            <tr class="border-bottom">
                <td class="w-50">封面圖</td>
                <td class="w-25">顯示</td>
                <td class="w-25">刪除圖片</td>
            </tr>
            <?php
            $img = $Img->all();
            foreach ($img as $key => $value) {
            ?>
                <tr>
                    <td><img class="simg" src="titimg/<?= $value['img']; ?>"></td>
                    <td><input type="checkbox" name="show" onclick="api('display','re_titimg',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                    <td><button class="btn btn-outline-danger" onclick="api('del','re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

    <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
        <input class="img" type="file" name="img">
        <input type="hidden" name="sh">
        <input type="hidden" name="table" value="re_titimg">
        <input type="hidden" name="do" value="main">
        <input class="submit btn btn-outline-warning" type="submit" value="上傳">
    </form>
    <div class="h3 mt-3"><?= $tstr[$do][2]; ?></div>
    <div class="showimg">
        <table class="w-100">
            <tr class="border-bottom">
                <td class="w-50">動畫文字圖片</td>
                <td class="w-25">顯示</td>
                <td class="w-25">刪除圖片</td>
            </tr>
            <?php
            $img = $Timg->all();
            foreach ($img as $key => $value) {
            ?>
                <tr>
                    <td><img class="simg" src="titimg/<?= $value['img']; ?>"></td>
                    <td><input type="checkbox" name="show" onclick="api('display','re_tittext',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                    <td><button class="btn btn-outline-danger" onclick="api('del','re_tittext',<?= $value['id']; ?>)">刪除</button></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
        <input class="img" type="file" name="img">
        <input type="hidden" name="sh">
        <input type="hidden" name="table" value="re_tittext">
        <input type="hidden" name="do" value="main">
        <input class="submit btn btn-outline-warning" type="submit" value="上傳">
    </form>
</div>
</div>