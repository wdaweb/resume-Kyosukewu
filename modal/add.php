<?php
    include_once "../base.php";
?>

<div class="addbody text-center">
    <form action="api/add.php" method="post" enctype="multipart/form-data">
        <?php
        switch ($_GET['t']) {
            case "re_about":
        ?>
                <h4>新增照片</h4>
                <hr>
                <input class="uplfile" type="file" name="img">
                <input type="hidden" name="table" value="re_about">
                <input type="hidden" name="do" value="ab">
            <?php
                break;
            case "re_abouttext":
            ?>
                <h4>新增自我簡介</h4>
                <hr>
                <textarea class="txtar" name="text"></textarea>
                <input type="hidden" name="table" value="re_abouttext">
                <input type="hidden" name="do" value="ab">
            <?php
                break;
            case "re_edu":
            ?>
                <h4>新增學歷</h4>
                <hr>
                學校/科系：<input type="text" name="text">
                <select name="finish">
                    <option value="1">畢業</option>
                    <option value="2">肄業</option>
                    <option value="3">其他</option>
                </select>
                <input type="hidden" name="table" value="re_edu">
                <input type="hidden" name="do" value="ab">
            <?php
                break;
            case "re_cont":
            ?>
                <h4>新增聯絡資訊</h4>
                <hr>
                <div class="mt-3">圖示：<input type="text" name="icon"></div>
                <div class="mt-3">方式：<input type="text" name="method"></div>
                <div class="mt-3">連結：<input type="text" name="link"></div>
                <div class="mt-3">內容：<input type="text" name="cont"></div>
                <input type="hidden" name="table" value="re_cont">
                <input type="hidden" name="do" value="cont">
            <?php
                break;
            case "re_conttext":
            ?>
                <h4>新增聯絡資訊文字</h4>
                <hr>
                <div class="mt-3"><input type="text" name="text"></div>
                <input type="hidden" name="table" value="re_conttext">
                <input type="hidden" name="do" value="cont">
            <?php
                break;
            case "re_job":
            ?>
                <h4>新增求職條件</h4>
                <hr>
                <div class="mt-3">項目：<input type="text" name="text"></div>
                <div class="mt-3">內容：<input type="text" name="cont"></div>
                <input type="hidden" name="table" value="re_job">
                <input type="hidden" name="do" value="ab">
            <?php
                break;
            case "re_self":
            ?>
                <h4>新增自傳</h4>
                <hr>
                <textarea class="txtar" name="text"></textarea>
                <input type="hidden" name="table" value="re_self">
                <input type="hidden" name="do" value="ab">
            <?php
                break;
            case "re_exp":
            ?>
                <h4>新增經歷</h4>
                <hr>
                <div class="mt-3">年分：<input type="text" name="year"></div>
                <div class="mt-3">職稱：<input type="text" name="jtitle"></div>
                <textarea class="txtar mt-3" name="cont"></textarea>
                <input type="hidden" name="table" value="re_exp">
                <input type="hidden" name="do" value="exp">
            <?php
                break;
            case "re_skills":
            ?>
                <h4>新增技能</h4>
                <hr>
                <div class="mt-3">分類：
                    <select class="w-50" name="type">
                        <option value="1"><?= $tstr['sk'][1]; ?></option>
                        <option value="2"><?= $tstr['sk'][2]; ?></option>
                        <option value="3"><?= $tstr['sk'][3]; ?></option>
                        <option value="4"><?= $tstr['sk'][4]; ?></option>
                    </select>
                </div>
                <div class="mt-3">名稱：<input type="text" name="cont"></div>
                <div class="mt-3">圖片：<input type="file" name="img"></div>
                <input type="hidden" name="table" value="re_skills">
                <input type="hidden" name="do" value="sk">
            <?php
                break;
            case "re_pro2":
            ?>
                <h4>新增作品</h4>
                <hr>
                <div class="mt-3">分類：
                    <select id="type" class="w-50" name="type" onchange="typeS()">
                        <option value="1"><?= $tstr['sk'][1]; ?></option>
                        <option value="2"><?= $tstr['sk'][2]; ?></option>
                        <option value="3"><?= $tstr['sk'][3]; ?></option>
                        <option value="4"><?= $tstr['sk'][4]; ?></option>
                    </select>
                </div>
                <div class="mt-3">名稱：<input type="text" name="name"></div>
                <div class="mt-3">縮圖：<input type="file" name="img"></div>

                <div id="link" class="mt-3"></div>

                <div class="mt-3">作品說明：</div><textarea name="cont" rows="5"></textarea>
                <div class="mt-3">運用技術：</div>
                <div class="d-flex  col-12 mx-auto">
                <div class="text-start ms-3 col-4">
                <?php
                $sk=$Sk->all(['type'=>1]," order by rank");
                echo $tstr['sk'][1]."<hr>";
                foreach($sk as $s){
                ?>
                <input type="checkbox" name="sks[]" value="<?=$s['img'];?>" class="ms-2"><?=$s['cont'];?><br>
                <?php
                }
                ?>
                </div>
                <div class="text-start ms-3 col-4">
                <?php
                $sk=$Sk->all(['type'=>2]," order by rank");
                echo $tstr['sk'][2]."<hr>";
                foreach($sk as $s){
                ?>
                <input type="checkbox" name="sks[]" value="<?=$s['img'];?>" class="ms-2"><?=$s['cont'];?><br>
                <?php
                }
                ?>
                </div>
                <div class="text-start ms-3 col-4">
                <?php
                $sk=$Sk->all(['type'=>3]," order by rank");
                echo $tstr['sk'][3]."<hr>";
                foreach($sk as $s){
                ?>
                <input type="checkbox" name="sks[]" value="<?=$s['img'];?>" class="ms-2"><?=$s['cont'];?><br>
                <?php
                }
                ?>
                </div>
                </div>
                <input type="hidden" name="table" value="re_pro2">
                <input type="hidden" name="do" value="pro">
        <?php
        }
        ?>
        <input type="hidden" name="sh">
        <div>
            <input class="btn btn-warning mt-3" type="submit" value="上傳">
        </div>
    </form>
</div>
<script>
typeS()
function typeS(){
    let type=$('#type').val()
    $.get("api/type.php",{type},function(res){
        $('#link').html(res)
    })
}
</script>