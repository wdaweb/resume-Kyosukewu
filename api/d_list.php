<?php
include_once "../base.php";
$sk = $Sk->all(['type' => 3], ' order by rank ');
foreach ($sk as $key => $value) {
?>
    <div class="d-flex align-items-center col-12 pt-2">
        <form class="d-flex align-items-center col-9" action="api/edit.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="do" value="sk">
            <input type="hidden" name="table" value="re_skills">
            <input type="hidden" name="id" value="<?= $value['id']; ?>">
            <div class="col-3"><select class="w-99" name="type">
                    <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>>網頁技術</option>
                    <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>>視覺技術</option>
                    <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>>3D技術</option>
                    <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>>文書技術</option>
                </select>
            </div>
            <div class="col-3"><input type="text" name="cont" value="<?= $value['cont']; ?>"></div>
            <div class="col-3">
                <img class="icon" src="icon/<?= $value['img']; ?>">
                <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                <input class="w-50" type="file" name="img">
            </div>
            <div class="col-3"><input class="submit btn btn-outline-warning" type="submit" value="編輯"></div>
        </form>
        <div class="d-flex align-items-center col-3">
            <div class="col-4">
                <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills','d')">往上</button>
                <?php
                }
                if ($key != count($sk) - 1) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills','d')">往下</button>
                <?php
                }
                ?>
            </div>
            <div class="col-4"><input type="checkbox" name="show" onclick="api2('display2','re_skills',<?= $value['id']; ?>,'d')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></div>
            <div class="col-4"><button class="btn btn-outline-danger" onclick="api2('del','re_skills',<?= $value['id']; ?>,'d')">刪除</button></div>
        </div>
    </div>
<?php
}
?>