<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="title h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?=$do;?>&t=re_skills')">新增內容</span></div>
        <div class="showall">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 10%;">分類</td>
                    <td style="width: 30%;">名稱</td>
                    <td style="width: 30%;">圖片</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $sk = $Sk->all();
                foreach ($sk as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="sk">
                            <input type="hidden" name="table" value="re_skills">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><select name="type">
                                    <option value="1"><?= $tstr[$do][1]; ?></option>
                                    <option value="2"><?= $tstr[$do][2]; ?></option>
                                    <option value="3"><?= $tstr[$do][3]; ?></option>
                                    <option value="4"><?= $tstr[$do][4]; ?></option>
                            </select>
                            </td>
                            <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                            <td><input type="file" name="img" value="<?= $value['img']; ?>"></td>
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display2','re_skills',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_skills',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>