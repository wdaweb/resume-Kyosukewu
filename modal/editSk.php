<?php
include_once "../base.php";
$psk = $Pro->find(['id' => $_GET['id']]);
$psk['sk'] = unserialize($psk['sk']);

?>
<form class="text-center m-3" action="api/editsk.php" method="post" enctype="multipart/form-data">
    <h3>編輯應用技術</h3>
    <hr>
    <div class="addbody text-center d-flex">
        <div class="ms-3 col-12 d-flex flex-wrap justify-content-center">
            <?php
            $sk = $Sk->all(" order by rank");
            // echo $tstr['sk'][1] . "<hr>";
            foreach ($sk as $s) {
                $tmp[] = $s['img'];
                $skss[] = $s['cont'];
            }
            $c = count($sk);
            $cpsk = count($psk['sk']);
            echo "目前技能：";
            for ($i = 0; $i < $cpsk; $i++) {
                for ($j = 0; $j < $c; $j++) {
                    if ($psk['sk'][$i] == $tmp[$j]) {
                        // echo "<input type='checkbox' name='sks[]' value='{$s['img']}'' class='ms-2' checked>{$skss[$j]}<br>";
                        echo "<span class='me-3'>{$skss[$j]}</span>";
                    }
                }
            }
            ?>
            <br>
            <div class="addbody text-center d-flex">
        <div class="text-start ms-3 col-4">
            <?php
            $sk = $Sk->all(['type' => 1], " order by rank");
            echo $tstr['sk'][1] . "<hr>";
            foreach ($sk as $s) {
            ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?=$s['cont'];?><br>
            <?php
            }
            ?>
        </div>
        <div class="text-start ms-3 col-4">
            <?php
            $sk = $Sk->all(['type' => 2], " order by rank");
            echo $tstr['sk'][2] . "<hr>";
            foreach ($sk as $s) {
            ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?=$s['cont'];?><br>
            <?php
            }
            ?>
        </div>
        <div class="text-start ms-3 col-4">
        <?php
            $sk = $Sk->all(['type' => 3], " order by rank");
            echo $tstr['sk'][3] . "<hr>";
            foreach ($sk as $s) {
            ?>
                <input type="checkbox" name="sks[]" value="<?= $s['img']; ?>" class="ms-2"><?=$s['cont'];?><br>
            <?php
            }
            ?>
        </div>
    </div>
        </div>
    </div>
    <div class="text-center">
        <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
        <input type="hidden" name="do" value="pro">
        <input class="btn btn-warning" type="submit" value="更新">
    </div>
</form>