<?php
include_once "../base.php";
$pro = $Pro->all(['type' => 1], ' order by rank ');
foreach ($pro as $key => $value) {
?>
    <tr>
        <form action="api/edit.php" method="post">
            <td><select class="w-99" name="type">
                    <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr['pro'][1]; ?></option>
                    <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr['pro'][2]; ?></option>
                    <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr['pro'][3]; ?></option>
                </select>
            </td>
            <td><input class="w-99" type="text" name="name" value="<?= $value['name']; ?>"></td>
            <td>
                <img class="col-12" src="img/<?= $value['img']; ?>">
                <input class="col-12" type="file" name="img" value="<?= $value['img']; ?>">
                <input type="hidden" name="do" value="pro">
                <input type="hidden" name="table" value="re_pro">
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
            </td>
            <td>
                <?php
                if ($value['link'] == null) {
                ?>
                    <img class="w-25" src="bimg/<?= $value['bimg']; ?>">
                    <input class="w-50" type="file" name="bimg">
                <?php
                } else {
                ?>
                    <input class="w-99" type="text" name="link" value="<?= $value['link']; ?>">
                <?php
                }
                ?>
            </td>
            <td><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></td>
            <td id="editsk">
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
            </td>
            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
        </form>
    </tr>
    <tr class="w-100 border-bottom">
        <td>排序</td>
        <td>顯示</td>
        <td>刪除</td>
    </tr>
    <tr>
        <td>
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
        </td>
        <td><input type="checkbox" name="show" onclick="api2('display2','re_pro',<?= $value['id']; ?>,'pw')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
        <td><button class="btn btn-outline-danger" onclick="api2('del','re_pro',<?= $value['id']; ?>,'pw')">刪除</button></td>
    </tr>
<?php
}
?>