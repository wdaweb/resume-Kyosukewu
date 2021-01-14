<?php
include_once "../base.php";
$psk = $Pro->find(['id' => $_GET['id']]);
$psk['sk'] = unserialize($psk['sk']);
?>
<form class="text-center m-3" action="api/editsk.php" method="post" enctype="multipart/form-data">
    <h3>編輯應用技術</h3>
    <hr>
    <div class="addbody text-center d-flex">
        <div class="text-start ms-3 col-4">
            <?php
            $sk = $Sk->all(['type' => 1], " order by rank");
            echo $tstr['sk'][1] . "<hr>";
            foreach ($sk as $s) {
                // print_r($s['img']);
                $ss[]=$s['img'];
                $same=array_intersect($psk['sk'],$ss);
                ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?= $s['cont']; ?><br>
                <?php
            }
            ?>
        </div>
        <div class="text-start ms-3 col-4">
            <?php
            $sk = $Sk->all(['type' => 2], " order by rank");
            echo $tstr['sk'][1] . "<hr>";
            foreach ($sk as $s) {
            ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?= $s['cont']; ?><br>
            <?php
            }
            ?>
        </div>
        <div class="text-start ms-3 col-4">
            <?php
            $sk = $Sk->all(['type' => 3], " order by rank");
            echo $tstr['sk'][1] . "<hr>";
            foreach ($sk as $s) {
            ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?= $s['cont']; ?><br>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="text-center">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="do" value="pro">
        <input class="btn btn-warning" type="submit" value="更新">
    </div>
</form>