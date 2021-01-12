<?php
include_once "../base.php";
$pro = $Pro->all(['type' => 1], ' order by rank ');
foreach ($pro as $key => $value) {
?>
    <div class="proitem col-12 border-top pt-2">
        <form class="d-flex col-12 align-items-center" action="api/edit.php" method="post">
            <div class="col-1"><select class="w-99" name="type">
                    <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr['pro'][1]; ?></option>
                    <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr['pro'][2]; ?></option>
                    <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr['pro'][3]; ?></option>
                </select>
            </div>
            <div class="col-2"><input class="w-99" type="text" name="name" value="<?= $value['name']; ?>"></div>
            <div class="col-2">
                <img class="w-75" src="img/<?= $value['img']; ?>">
                <input class="col-12" type="file" name="img" value="<?= $value['img']; ?>">
                <input type="hidden" name="do" value="pro">
                <input type="hidden" name="table" value="re_pro">
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
            </div>
            <div class="col-2">
                <?php
                if ($value['link'] == null) {
                ?>
                    <img class="w-100" src="bimg/<?= $value['bimg']; ?>">
                    <input class="w-100" type="file" name="bimg">
                <?php
                } else {
                ?>
                    <input class="w-99" type="text" name="link" value="<?= $value['link']; ?>">
                <?php
                }
                ?>
            </div>
            <div class="col-2"><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></div>
            <div class="col-2" id="editsk">
                <?php
                $sks = unserialize($value['sk']);
                foreach ($sks as $sk) {
                ?>
                    <img class="icon" src="icon/<?= $sk; ?>"><i class="addsk ms-3 fas fa-minus-square" onclick="delsk('<?= $value['id']; ?>','<?= $sk; ?>')"></i>
                    <input type="file" name="sk[]">
                <?php
                }
                ?>
                <i id="addsk" class="addsk fas fa-plus-square h2" onclick="addsk('<?= $value['id']; ?>')"></i>
            </div>
            <div class="col-1"><input class="submit btn btn-outline-warning" type="submit" value="編輯"></div>
        </form>
        <div class="col-12 mb-5">
            <div class="d-flex col-6 border-bottom">
                <div class="col-4">排序</div>
                <div class="col-4">顯示</div>
                <div class="col-4">刪除</div>
            </div>
            <div class="d-flex col-6">
                <div class="col-4">
                    <?php
                    if ($key != 0) {
                    ?>
                        <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $pro[$key - 1]['id']; ?>,'re_pro','pw')">往上</button>
                    <?php
                    }
                    if ($key != count($pro) - 1) {
                    ?>
                        <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $pro[$key + 1]['id']; ?>,'re_pro','pw')">往下</button>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-4"><input type="checkbox" name="show" onclick="api2('display2','re_pro',<?= $value['id']; ?>,'pw')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></div>
                <div class="col-4"><button class="btn btn-outline-danger" onclick="api2('del','re_pro',<?= $value['id']; ?>,'pw')">刪除</button></div>
            </div>
        </div>
    </div>
<?php
}
?>