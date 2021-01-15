<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main sub text-center col-12">
        <div class=" h3 mb-3 me-5"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_cont')">新增內容</span><?= $tstr[$do][1]; ?></div>
        <div class="show">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 20%;">圖示</td>
                    <td style="width: 10%;">聯絡方式</td>
                    <td style="width: 20%;">連結</td>
                    <td style="width: 20%;">內容</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $cont = $Cont->all();
                foreach ($cont as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="cont">
                            <td><i class="me-2 <?= $value['icon']; ?>"></i><input class="w-75" type="text" name="icon" value="<?= $value['icon']; ?>"></td>
                            <td><input class="w-99" type="text" name="method" value="<?= $value['method']; ?>"></td>
                            <td><input class="w-99" type="text" name="cont" value="<?= $value['link']; ?>"></td>
                            <td><input class="w-99" type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                            <input type="hidden" name="table" value="re_cont">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display2','re_cont',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_cont',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-12">
        <div class="h3 mb-3 me-5"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_conttext')">新增內容</span><?= $tstr[$do][2]; ?></div>
        <div class="show">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 70%;">內容</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $contt = $Conttext->all();
                foreach ($contt as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="cont">
                            <td><input class="w-99" type="text" name="text" value="<?= $value['text']; ?>"></td>
                            <input type="hidden" name="table" value="re_conttext">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display','re_conttext',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_conttext',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>