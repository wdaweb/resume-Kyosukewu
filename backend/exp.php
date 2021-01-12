<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="title h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_exp')">新增內容</span></div>
        <div class="showall">
            <table class="w-100">
                <tr class="border-bottom">
                    <td style="width: 15%;">年份</td>
                    <td style="width: 15%;">職稱</td>
                    <td style="width: 35%;">內容</td>
                    <td style="width: 5%;">排序</td>
                    <td style="width: 10%;">編輯</td>
                    <td style="width: 10%;">顯示</td>
                    <td style="width: 10%;">刪除</td>
                </tr>
                <tbody id="navbar">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $.get("api/re_exp_list.php", function(list) {
        $("#navbar").html(list)
    })
</script>