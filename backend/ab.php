<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][0]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td class="w-50">自拍照</td>
                    <td class="w-25">顯示/隱藏</td>
                    <td class="w-25">刪除圖片</td>
                </tr>
                <?php
                $ab = $Ab->all();
                foreach ($ab as $key => $value) {
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
            <input class="img" type="file" name="img">
            <input type="hidden" name="chk" value="me">
            <input type="hidden" name="sh">
            <!-- <input type="hidden" name="table" value="<?= $go; ?>"> -->
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][1]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">關於我內文</td>
                    <td style="width: 20%;">顯示/隱藏</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 15%;">刪除</td>
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
            <textarea name=""></textarea>
            <input type="hidden" name="sh">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][2]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">學歷</td>
                    <td style="width: 20%;">顯示/隱藏</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 15%;">刪除</td>
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
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input type="hidden" name="table" value="<?= $go; ?>">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][3]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">聯絡資訊</td>
                    <td style="width: 20%;">顯示/隱藏</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 15%;">刪除</td>
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
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][4]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">求職條件</td>
                    <td style="width: 20%;">顯示/隱藏</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 15%;">刪除</td>
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
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
    <div class="main sub text-center col-6">
        <div class="title h3"><?= $tstr[$do][5]; ?></div>
        <div class="showimg">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 50%;">自傳內容</td>
                    <td style="width: 20%;">顯示/隱藏</td>
                    <td style="width: 15%;">編輯</td>
                    <td style="width: 15%;">刪除</td>
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
            <input class="img" type="file" name="img">
            <input type="hidden" name="sh">
            <input class="btn btn-outline-warning" type="submit" value="上傳">
        </form>
    </div>
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