<?php
include_once "../base.php";
$sk = $Sk->all(['type' => 2], ' order by rank ');
foreach ($sk as $key => $value) {
?>
    <tr>
        <form action="api/edit.php" method="post">
            <input type="hidden" name="do" value="sk">
            <input type="hidden" name="table" value="re_skills">
            <input type="hidden" name="id" value="<?= $value['id']; ?>">
            <td><select name="type">
                    <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>>網頁技術</option>
                    <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>>視覺技術</option>
                    <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>>3D技術</option>
                    <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>>文書技術</option>
                </select>
            </td>
            <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
            <td>
                <img class="icon" src="icon/<?= $value['img']; ?>">
                <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                <input class="w-50" type="file" name="img" value="<?= $value['img']; ?>">
            </td>
            <td>
                <?php
                if ($key != 0) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills','g')">往上</button>
                <?php
                }
                if ($key != count($sk) - 1) {
                ?>
                    <button class="btn btn-outline-secondary" onclick="sw2(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills','g')">往下</button>
                <?php
                }
                ?>
            </td>
            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
        </form>
        <td><input type="checkbox" name="show" onclick="api2('display2','re_skills',<?= $value['id']; ?>,'g')" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
        <td><button class="btn btn-outline-danger" onclick="api2('del','re_skills',<?= $value['id']; ?>,'g')">刪除</button></td>
    </tr>
<?php
}
?>