<?php
include_once "../base.php";
?>
<div class="mt-3 text-center">
<div class="col-12">
<h4>新增內容</h4>
<hr>
    <select id="typeP" class="w-50" name="type" onchange="typeP()">
        <option value="re_titimg" selected><?= $imgtype[1]; ?></option>
        <option value="re_tittext"><?= $imgtype[2]; ?></option>
        <option value="re_about"><?= $imgtype[3]; ?></option>
        <option value="re_skills"><?= $imgtype[4]; ?></option>
        <option value="re_pro"><?= $imgtype[5]; ?></option>
    </select>
</div>
<div id="linkP"></div>
</div>

<script>

typeP()

function typeP() {
    let t = $('#typeP').val()
    if(t=='re_titimg' || t=='re_tittext'){
        $.get("modal/addtit.php",{t},function(r){
            $('#linkP').html(r)
        })
    }else{
        $.get("modal/add.php", {
            t
        }, function(res) {
            $('#linkP').html(res)
        })
    }
}

</script>