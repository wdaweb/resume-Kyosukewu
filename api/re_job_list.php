<?php
include_once "../base.php";
$job = $Job->all(" order by rank");
foreach ($job as $key => $value) {
?>
    <div class="d-flex col-12 align-items-center border-top pt-2">
        <form class="d-flex align-items-center col-9" action="api/edit.php" method="post">
            <div class="col-4"><input class="w-99" type="text" name="text" value="<?= $value['text']; ?>"></div>
            <div class="col-4"><input class="w-99" type="text" name="cont" value="<?= $value['cont']; ?>"></div>
            <div class="col-4">
                <input type="hidden" name="table" value="re_job">
                <input type="hidden" name="id" value="<?= $value['id']; ?>">
                <input type="hidden" name="do" value="ab">
                <input class="submit btn btn-outline-warning" type="submit" value="編輯">
            </div>
        </form>
        <div class="d-flex align-items-center col-3">
            <div class="col-4">
                <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $job[$key - 1]['id']; ?>,'re_job','re_job')">往上</button>
                <?php
                }
                if ($key != count($job) - 1) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $job[$key + 1]['id']; ?>,'re_job','re_job')">往下</button>
                <?php
                }
                ?>
            </div>
            <div class="col-4"><input type="checkbox" name="show" onclick="api2('display2','re_job',<?= $value['id']; ?>,'re_job')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></div>
            <div class="col-4"><button class="btn btn-outline-danger" onclick="api2('del','re_job',<?= $value['id']; ?>,'re_job')">刪除</button></div>
        </div>
    </div>
<?php
}
?>