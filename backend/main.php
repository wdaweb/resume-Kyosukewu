<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="main container text-center">
    <div class="title h3"><?= $tstr[$do][0]; ?></div>
    <div class="showimg">
        <table class="w-100">
            <tr class="border-bottom">
                <td class="w-50">圖片</td>
                <td class="w-25">顯示隱藏</td>
                <td class="w-25">刪除圖片</td>
            </tr>
            <?php
            $img = $Img->all();
            foreach ($img as $key => $value) {
            ?>
                <tr>
                    <td><img src="titimg/<?= $value['img']; ?>"></td>
                    <td><button class="btn btn-outline-warning" onclick="display('re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                    <td><button class="btn btn-outline-danger" onclick="del('re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    
    <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
        <div class="">
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input type="hidden" name="chk">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </div>
    </form>
        <div class="title h3"><?= $tstr[$do][1]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td class="w-50">圖片</td>
                    <td class="w-25">顯示隱藏</td>
                    <td class="w-25">刪除圖片</td>
                </tr>
                <?php
                $img = $Timg->all();
                foreach ($img as $key => $value) {
                ?>
                    <tr>
                        <td><img src="titimg/<?= $value['img']; ?>"></td>
                        <td><button class="btn btn-outline-warning" onclick="display('re_titimg',<?= $value['id']; ?>)"><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></button></td>
                        <td><button class="btn btn-outline-danger" onclick="del('re_titimg',<?= $value['id']; ?>)">刪除</button></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
        <form action="api/add.php" method="post" enctype="multipart/form-data" class="form">
            <div class="">
                <input class="img" type="file" name="img">
                <input type="hidden" name="sh">
                <input class="btn btn-outline-warning" type="submit" value="上傳">
            </div>
        </form>
    </div>

    <script>
        function del(table, id) {
            $.post("api/del.php", {
                table,
                id
            }, function() {
                location.reload()
            })
        }

        function display(table, id) {
            $.post('api/display.php', {
                table,
                id
            }, function() {
                location.reload()
            })
        }
    </script>