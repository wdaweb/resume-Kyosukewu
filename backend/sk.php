<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class=" h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_skills')">新增內容</span>
            <nav>
                <div class="nav nav-tabs justify-content-evenly">
                    <a class="nav-link active" data-bs-toggle="tab" href="#wd">網頁設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#gd">視覺設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#threed">3D設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#text">文書處理類</a>
                </div>
            </nav>
            <div class="tab-content h-100 py-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="wd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <tbody id="navbarw">
                            </tbody>
                            <script>
                                $.get("api/w_list.php", function(list) {
                                    $("#navbarw").html(list)
                                })
                            </script>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show" id="gd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <tbody id="navbarg">
                            </tbody>
                            <script>
                                $.get("api/g_list.php", function(list) {
                                    $("#navbarg").html(list)
                                })
                            </script>
                        </table>
                    </div>
                </div>
                <div class="tab-pane fade show" id="threed" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <tbody id="navbard">
                            </tbody>
                        </table>
                        <script>
                                $.get("api/d_list.php", function(list) {
                                    $("#navbard").html(list)
                                })
                            </script>
                    </div>
                </div>
                <div class="tab-pane fade show" id="text" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="show">
                        <table class="w-100">
                            <tr class="border-bottom">
                                <td style="width: 10%;">分類</td>
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <tbody id="navbart"></tbody>
                        </table>
                        <script>
                                $.get("api/t_list.php", function(list) {
                                    $("#navbart").html(list)
                                })
                            </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>