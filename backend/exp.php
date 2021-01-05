<div class="mainbox row col-12 g-1">
    <div class="main full text-center col-12">
        <div class="title h3"><?= $tstr[$do][0]; ?></div>
        <div class="showtext">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width:10%;">年份</td>
                    <td style="width:20%;">職務描述</td>
                    <td style="width:30%;">職務內容</td>
                    <td style="width:10%;">編輯</td>
                    <td style="width:20%;">顯示</td>
                    <td style="width:10%;">刪除</td>
                </tr>
                <?php
                $exp = $Exp->all();
                foreach ($exp as $key => $value) {
                ?>
                    <tr>
                        <td><img src="titimg/<?= $value['img']; ?>"></td>
                        <td><button class="btn btn-outline-warning" onclick="api('display',re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="api('del','re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <form action="api/add.php" method="post" enctype="multipart/form-data" class="form justify-content-evenly py-2">
                <div>標題：<input class="img mb-2" type="text" name="title"></div>
                <!-- <div>內容：<input class="img mb-2" type="text" name="text"></div> -->
                <div>內容：<textarea name="text"></textarea></div>
                <input type="hidden" name="sh">
                <div><input class="btn btn-outline-warning" type="submit" value="上傳"></div>
        </form>
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
</script>