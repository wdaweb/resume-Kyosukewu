<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
<div class="title h3 text-center mt-3"><span class='addbtn float-start btn btn-warning' onclick="show()">新增內容</span><?= $tstr[$do][0]; ?></div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][1]; ?></div>
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
                        <td><input type="checkbox" name="show" onclick="api('display','re_about',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_about',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][2]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 64%;">關於我內文</td>
                    <td style="width: 12%;">編輯</td>
                    <td style="width: 12%;">顯示</td>
                    <td style="width: 12%;">刪除</td>
                </tr>
                <?php
                $text = $Abtext->all();
                foreach ($text as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <input type="hidden" name="table" value="re_abouttext">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><textarea class="w-100 h-100" name="text"><?= $value['text']; ?></textarea></td>
                            <td><input class="btn btn-outline-warning" type="submit" value="編輯"></td>
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
        <div class="title h3"><?= $tstr[$do][3]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">學歷</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 20%;">顯示</td>
                    <td style="width: 15%;">刪除</td>
                </tr>
                <?php
                $edu = $Edu->all();
                foreach ($edu as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <td><input type="text" name="text" value="<?= $value['text']; ?>"></td>
                            <input type="hidden" name="table" value="re_edu">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><button class="btn btn-outline-warning" onclick="api(display,'re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="api(del,'re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][4]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 10%;">圖示</td>
                    <td style="width: 10%;">聯絡方式</td>
                    <td style="width: 30%;">內容</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 20%;">顯示</td>
                    <td style="width: 15%;">刪除</td>
                </tr>
                <?php
                $cont = $Cont->all();
                foreach ($cont as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <td><input type="text" name="icon" value="<?= $value['icon']; ?>"></td>
                            <td><input type="text" name="method" value="<?= $value['method']; ?>"></td>
                            <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                            <input type="hidden" name="table" value="re_cont">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><button class="btn btn-outline-warning" onclick="api(display,'re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="api(del,'re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][5]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 10%;">圖示</td>
                    <td style="width: 10%;">項目</td>
                    <td style="width: 40%;">內容</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 20%;">顯示</td>
                    <td style="width: 15%;">刪除</td>
                </tr>
                <?php
                $job = $Job->all();
                foreach ($job as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <td><input type="text" name="icon" value="<?= $value['icon']; ?>"></td>
                            <td><input type="text" name="method" value="<?= $value['method']; ?>"></td>
                            <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                            <input type="hidden" name="table" value="re_job">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><button class="btn btn-outline-warning" onclick="api(display,'re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="api(del,'re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][6]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">自傳內容</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 20%;">顯示</td>
                    <td style="width: 15%;">刪除</td>
                </tr>
                <?php
                $self = $Self->all();
                foreach ($self as $key => $value) {
                ?>
                    <tr>
                        <form action="api/edit.php" method="post">
                            <td><input type="text" name="text" value="<?= $value['text']; ?>"></td>
                            <input type="hidden" name="table" value="re_self">
                            <input type="hidden" name="id" value="<?= $value['id']; ?>">
                            <td><input class="btn btn-outline-warning" type="submit" value="編輯"></td>
                        </form>
                        <td><button class="btn btn-outline-warning" onclick="api(display,'re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="api(del,'re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<script>
    function api(action, table, id) {
        $.post(`api/${action}.php`, {
            table,
            id
        }, function() {
            location.reload()
        })
    }



    // function del(table, id) {
    //     $.post("api/del.php", {
    //         table,
    //         id
    //     }, function() {
    //         location.reload()
    //     })
    // }

    // function display(table, id) {
    //     $.post('api/display.php', {
    //         table,
    //         id
    //     }, function() {
    //         location.reload()
    //     })
    // }
    // function edit(table,id){
    //     $.post('api/edit.php',{table,id},function(){
    //         location.reload()
    //     })
    // }
</script>