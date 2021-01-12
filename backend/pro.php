<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_pro')">新增內容</span>
            <nav>
                <div class="nav nav-tabs justify-content-evenly">
                    <a class="nav-link active" data-bs-toggle="tab" href="#wd">網頁設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#gd">視覺設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#threed">3D設計類</a>
                </div>
            </nav>
            <div class="tab-content h-100 py-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="wd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 10%;">作品</td>
                                <td style="width: 15%;">縮圖</td>
                                <td style="width: 20%;">連結/大圖</td>
                                <td style="width: 25%;">說明</td>
                                <td style="width: 10%;">技術</td>
                                <td style="width: 10%;">編輯</td>
                            </tr>
                            <tbody id="navbarpw"></tbody>
                        </table>
                        <script>
                            $.get("api/pw_list.php", function(list) {
                                $("#navbarpw").html(list)
                            })
                        </script>
                    </div>
                </div>
                <div class="tab-pane fade show" id="gd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 10%;">作品</td>
                                <td style="width: 15%;">縮圖</td>
                                <td style="width: 20%;">連結/大圖</td>
                                <td style="width: 20%;">說明</td>
                                <td style="width: 20%;">技術</td>
                                <td style="width: 10%;">編輯</td>
                            </tr>
                            <tbody id="navbarpg"></tbody>
                        </table>
                        <script>
                            $.get("api/pg_list.php", function(list) {
                                $("#navbarpg").html(list)
                            })
                        </script>
                    </div>
                </div>
                <div class="tab-pane fade show" id="threed" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 10%;">作品</td>
                                <td style="width: 15%;">縮圖</td>
                                <td style="width: 20%;">連結/大圖</td>
                                <td style="width: 20%;">說明</td>
                                <td style="width: 20%;">技術</td>
                                <td style="width: 10%;">編輯</td>
                            </tr>
                            <tbody id="navbarpd"></tbody>
                        </table>
                        <script>
                            $.get("api/pd_list.php", function(list) {
                                $("#navbarpd").html(list)
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function delsk(id, item) {
        $msg = "確定要刪除此技術嗎?"
        if (confirm($msg)) {
            $.post("api/delsk.php", {
                id,
                item
            }, function() {
                // console.log(res)
                location.reload()
            })
        }
    }

    function addsk(id) {
        $("#addsk").before("<input type='file' name='sk[]'>")
    }
</script>