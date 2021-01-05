<div class="mainbox row col-12 g-1">
    <div class="main sub text-center col-12">
        <div class="title h3"><?= $tstr[$do][0]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td class="w-50">圖片</td>
                    <td class="w-25">顯示</td>
                    <td class="w-25">刪除圖片</td>
                </tr>
                <?php
                $img = $Img->all();
                foreach ($img as $key => $value) {
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
        <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
                <input class="img" type="file" name="img">
                <input type="hidden" name="sh">
                <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-12">
        <div class="title h3"><?= $tstr[$do][1]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td class="w-50">關於我內文</td>
                    <td class="w-25">顯示</td>
                    <td class="w-25">刪除內容</td>
                </tr>
                <?php
                $img = $Img->all();
                foreach ($img as $key => $value) {
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
        <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
                <textarea name=""></textarea>
                <input type="hidden" name="sh">
                <input class="btn btn-outline-warning" type="submit" value="上傳">
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