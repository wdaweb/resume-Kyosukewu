<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main sub text-center col-6">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>$do&t=re_about')">新增內容</span><?= $tstr[$do][1]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td class="w-50">自拍照</td>
                    <td class="w-25">顯示</td>
                    <td class="w-25">刪除圖片</td>
                </tr>
                <?php
                $ab = $Ab->all();
                foreach ($ab as $key => $value) {
                ?>
                    <tr>
                        <td><img src="titimg/<?= $value['img']; ?>"></td>
                        <td><input class="w-99" type="checkbox" name="show" onclick="api('display','re_about',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_about',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_abouttext')">新增內容</span><?= $tstr[$do][2]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 70%;">關於我內文</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $text = $Abtext->all();
                foreach ($text as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="ab">
                            <input type="hidden" name="table" value="re_abouttext">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><textarea class="w-99" name="text" rows="5"><?= $value['text']; ?></textarea></td>
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display','re_abouttext',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_abouttext',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_edu')">新增內容</span><?= $tstr[$do][3]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 70%;">學歷</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $edu = $Edu->all();
                foreach ($edu as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="ab">
                            <td><input class="w-99" type="text" name="text" value="<?= $value['text']; ?>"></td>
                            <input type="hidden" name="table" value="re_edu">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display2','re_edu',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_edu',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_job')">新增內容</span><?= $tstr[$do][5]; ?></div>
        <div class="showimg d-flex flex-wrap">
            <div class="d-flex col-12 text-center mb-3 border-bottom">
                <div class="d-flex col-9">
                    <div class="col-4">項目</div>
                    <div class="col-4">內容</div>
                    <div class="col-4">編輯</div>
                </div>
                <div class="d-flex col-3">
                    <div class="col-4">排序</div>
                    <div class="col-4">顯示</div>
                    <div class="col-4">刪除</div>
                </div>
            </div>
            <div id="navbarre_job" class="d-flex flex-wrap">
            </div>
                <script>
                    $.get("api/re_job_list.php", function(list) {
                        $("#navbarre_job").html(list)
                    })
                </script>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_self')">新增內容</span><?= $tstr[$do][6]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 70%;">自傳內容</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <?php
                $self = $Self->all();
                foreach ($self as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="do" value="ab">
                            <td><textarea class="w-99" name="text" rows="5"><?= $value['text']; ?></textarea></td>
                            <input type="hidden" name="table" value="re_self">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><input type="checkbox" name="show" onclick="api('display','re_self',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_self',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>