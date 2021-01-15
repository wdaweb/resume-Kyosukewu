<?php
include_once "../base.php";
$pro = $Pro->all(['type' => 3], ' order by rank ');
foreach ($pro as $key => $value) {
?>
    <div class="proitem col-12 border-top pt-2">
        <form class="d-flex col-12 align-items-center" action="api/edit.php" method="post" enctype="multipart/form-data">
            <div class="col-2"><select class="w-99" name="type">
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
            <div class="col-3"><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></div>
            <div class="col-1"><input class="submit btn btn-outline-warning" type="submit" value="編輯"></div>
        </form>
        <div class="col-12 mb-5">
            <div class="d-flex col-12 border-bottom">
                <div class="col-9">技術</div>
                <div class="col-1">排序</div>
                <div class="col-1">顯示</div>
                <div class="col-1">刪除</div>
            </div>
            <div class="d-flex align-items-center col-12">
                <div class="col-9" id="editsk">
                    <?php
                    $sks = unserialize($value['sk']);
                    foreach ($sks as $sk) {
                    ?>
                        <img class="icon me-1" src="icon/<?= $sk; ?>"><i class="addsk me-3 fas fa-minus-square" onclick="delsk('<?= $value['id']; ?>','<?= $sk; ?>')"></i>
                    <?php
                    }
                    ?>
                    <i id="editsk" class="addsk fas fa-edit h2" onclick="editsk('#cover','#content','modal/editSk.php?id=<?= $value['id']; ?>')"></i>
                </div>
                <div class="col-1">
                    <?php
                    if ($key != 0) {
                    ?>
                        <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $pro[$key - 1]['id']; ?>,'re_pro','pd')">往上</button>
                    <?php
                    }
                    if ($key != count($pro) - 1) {
                    ?>
                        <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $pro[$key + 1]['id']; ?>,'re_pro','pd')">往下</button>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-1"><input type="checkbox" name="show" onclick="api2('display2','re_pro',<?= $value['id']; ?>,'pd')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></div>
                <div class="col-1"><button class="btn btn-outline-danger" onclick="api2('del','re_pro',<?= $value['id']; ?>,'pd')">刪除</button></div>
            </div>
        </div>
    </div>
<?php
}
?>