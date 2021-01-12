<?php
include_once "../base.php";
$ex = $Exp->all(" order by rank DESC");
foreach ($ex as $key => $value) {
?>
    <tr>
        <form action="api/edit.php" method="post">
            <input type="hidden" name="do" value="exp">
            <input type="hidden" name="table" value="re_exp">
            <input type="hidden" name="id" value="<?= $value['id']; ?>">
            <td><input class="w-99" type="text" name="year" value="<?= $value['year']; ?>"></td>
            <td><input class="w-99" type="text" name="jtitle" value="<?= $value['jtitle']; ?>"></td>
            <td><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></td>
            <td>
                <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $ex[$key - 1]['id']; ?>,'re_exp')">往上</button>
                <?php
                }
                if ($key != count($ex) - 1) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $ex[$key + 1]['id']; ?>,'re_exp')">往下</button>
                <?php
                }
                ?>
            </td>
            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
        </form>
        <td><input type="checkbox" name="show" onclick="api2('display2','re_exp',<?= $value['id']; ?>,'re_exp')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
        <td><button class="btn btn-outline-danger" onclick="api2('del','re_exp',<?= $value['id']; ?>,'re_exp')">刪除</button></td>
    </tr>
<?php
}
?>