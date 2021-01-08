<?php
$go = $_GET['do'] ?? 'main';
?>
<div class=" row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="title h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_exp')">新增內容</span></div>
        <div class="showall">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 15%;">年份</td>
                    <td style="width: 15%;">職稱</td>
                    <td style="width: 35%;">內容</td>
                    <td style="width: 5%;">順位</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
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
                        <td><input type="checkbox" name="show" onclick="api('display2','re_exp',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_exp',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>