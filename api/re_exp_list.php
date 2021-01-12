<?php
include_once "../base.php";
$ex = $Exp->all(" order by rank DESC");
foreach ($ex as $key => $value) {
?>
    <div class="d-flex col-12 align-items-center border-top pt-2">
        <form class="d-flex align-items-center col-9" action="api/edit.php" method="post">
            <div class="col-3"><input class="w-99" type="text" name="year" value="<?= $value['year']; ?>"></div>
            <div class="col-3"><input class="w-99" type="text" name="jtitle" value="<?= $value['jtitle']; ?>"></div>
            <div class="col-4"><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></div>
            <div class="col-2">
                <input type="hidden" name="do" value="exp">
                <input type="hidden" name="table" value="re_exp">
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
                <input class="submit btn btn-outline-warning" type="submit" value="編輯">
            </div>
        </form>
        <div class="d-flex align-items-center col-3">
            <div class="col-4">
            <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $ex[$key - 1]['id']; ?>,'re_exp','re_exp')">往上</button>
                <?php
                }
                if ($key != count($ex) - 1) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $ex[$key + 1]['id']; ?>,'re_exp','re_exp')">往下</button>
                <?php
                }
                ?>
            </div>
            <div class="col-4"><input type="checkbox" name="show" onclick="api2('display2','re_exp',<?= $value['id']; ?>,'re_exp')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></div>
            <div class="col-4"><button class="btn btn-outline-danger" onclick="api2('del','re_exp',<?= $value['id']; ?>,'re_exp')">刪除</button></div>
        </div>
    </div>
<?php
}
?>