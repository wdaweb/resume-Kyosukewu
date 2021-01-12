<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="title h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_exp')">新增內容</span></div>
        <div class="showall">
            <div class="d-flex col-12 text-center mb-3 border-bottom">
                <div class="d-flex col-9">
                    <div class="col-3">年份</div>
                    <div class="col-3">職稱</div>
                    <div class="col-4">內容</div>
                    <div class="col-2">編輯</div>
                </div>
                <div class="d-flex col-3">
                    <div class="col-4">排序</div>
                    <div class="col-4">顯示</div>
                    <div class="col-4">刪除</div>
                </div>
            </div>
            <div id="navbarre_exp" class="d-flex flex-wrap">
            </div>
        </div>
    </div>
</div>
<script>
    $.get("api/re_exp_list.php", function(list) {
        $("#navbarre_exp").html(list)
    })
</script>