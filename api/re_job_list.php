<?php
include_once "../base.php";
$job = $Job->all(" order by rank");
foreach ($job as $key => $value) {
?>
    <tr>
        <form action="api/edit.php" method="post">
            <input type="hidden" name="do" value="ab">
            <td><input class="w-99" type="text" name="text" value="<?= $value['text']; ?>"></td>
            <td><input class="w-99" type="text" name="cont" value="<?= $value['cont']; ?>"></td>
            <input type="hidden" name="table" value="re_job">
            <input type="hidden" name="id" value="<?= $value['id']; ?>">
            <td>
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
            </td>
            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
        </form>
        <td><input type="checkbox" name="show" onclick="api2('display2','re_job',<?= $value['id']; ?>,'re_job')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
        <td><button class="btn btn-outline-danger" onclick="api2('del','re_job',<?= $value['id']; ?>,'re_job')">刪除</button></td>
    </tr>
<?php
}
?>