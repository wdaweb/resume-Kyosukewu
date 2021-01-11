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
                                <td style="width: 20%;">說明</td>
                                <td style="width: 20%;">技術</td>
                                <td style="width: 10%;">編輯</td>
                            </tr>
                            <?php
                            $pro = $Pro->all(['type' => 1], ' order by rank ');
                            foreach ($pro as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="pro">
                                        <input type="hidden" name="table" value="re_pro">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select class="w-99" name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                            </select>
                                        </td>
                                        <td><input class="w-99" type="text" name="name" value="<?= $value['name']; ?>"></td>
                                        <td>
                                            <img class="col-12" src="img/<?= $value['img']; ?>">
                                            <input class="col-12" type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($value['link'] == null) {
                                            ?>
                                                <input class="w-99" type="text" name="bimg" value="<?= $value['bimg']; ?>">
                                                <input class="w-99" type="file" name="bimg">
                                            <?php
                                            } else {
                                            ?>
                                                <input class="w-99" type="text" name="link" value="<?= $value['link']; ?>">
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></td>
                                        <td>
                                        <?php
                                        for($i=1;$i<=6;$i++){
                                            if(!empty($value['sk'.$i])){
                                        ?>
                                            <img class="icon" src="icon/<?= $value['sk'.$i]; ?>">
                                            <input type="file" name="sk<?=$i;?>">
                                        <?php
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                </tr>
                                <tr class="w-100 border-bottom">
                                    <td>排序</td>
                                    <td>顯示</td>
                                    <td>刪除</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        if ($key != 0) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key - 1]['id']; ?>,'re_pro')">往上</button>
                                        <?php
                                        }
                                        if ($key != count($pro) - 1) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key + 1]['id']; ?>,'re_pro')">往下</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_pro',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_pro',<?= $value['id']; ?>)">刪除</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
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
                            <?php
                            $pro = $Pro->all(['type' => 2], ' order by rank ');
                            foreach ($pro as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="pro">
                                        <input type="hidden" name="table" value="re_pro">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select class="w-99" name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                            </select>
                                        </td>
                                        <td><input class="w-99" type="text" name="name" value="<?= $value['name']; ?>"></td>
                                        <td>
                                            <img class="col-12" src="img/<?= $value['img']; ?>">
                                            <input class="col-12" type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($value['link'] == null) {
                                            ?>
                                                <input class="w-99" type="text" name="bimg" value="<?= $value['bimg']; ?>">
                                                <input class="w-99" type="file" name="bimg">
                                            <?php
                                            } else {
                                            ?>
                                                <input class="w-99" type="text" name="link" value="<?= $value['link']; ?>">
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></td>
                                        <td>
                                        <?php
                                        for($i=1;$i<=6;$i++){
                                            if(!empty($value['sk'.$i])){
                                        ?>
                                            <img class="icon" src="icon/<?= $value['sk'.$i]; ?>">
                                            <input type="file" name="sk<?=$i;?>">
                                        <?php
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                </tr>
                                <tr class="w-100 border-bottom">
                                    <td>排序</td>
                                    <td>顯示</td>
                                    <td>刪除</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        if ($key != 0) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key - 1]['id']; ?>,'re_pro')">往上</button>
                                        <?php
                                        }
                                        if ($key != count($pro) - 1) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key + 1]['id']; ?>,'re_pro')">往下</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_pro',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_pro',<?= $value['id']; ?>)">刪除</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
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
                            <?php
                            $pro = $Pro->all(['type' => 3], ' order by rank ');
                            foreach ($pro as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="pro">
                                        <input type="hidden" name="table" value="re_pro">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select class="w-99" name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                            </select>
                                        </td>
                                        <td><input class="w-99" type="text" name="name" value="<?= $value['name']; ?>"></td>
                                        <td>
                                            <img class="col-12" src="img/<?= $value['img']; ?>">
                                            <input class="col-12" type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($value['link'] == null) {
                                            ?>
                                                <input class="w-99" type="text" name="bimg" value="<?= $value['bimg']; ?>">
                                                <input class="w-99" type="file" name="bimg">
                                            <?php
                                            } else {
                                            ?>
                                                <input class="w-99" type="text" name="link" value="<?= $value['link']; ?>">
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><textarea class="w-99" name="cont" rows="5"><?= $value['cont']; ?></textarea></td>
                                        <td>
                                        <?php
                                        for($i=1;$i<=6;$i++){
                                            if(!empty($value['sk'.$i])){
                                        ?>
                                            <img class="icon" src="icon/<?= $value['sk'.$i]; ?>">
                                            <input type="file" name="sk<?=$i;?>">
                                        <?php
                                            }
                                        }
                                        ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                </tr>
                                <tr class="w-100 border-bottom">
                                    <td>排序</td>
                                    <td>顯示</td>
                                    <td>刪除</td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        if ($key != 0) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key - 1]['id']; ?>,'re_pro')">往上</button>
                                        <?php
                                        }
                                        if ($key != count($pro) - 1) {
                                        ?>
                                            <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $pro[$key + 1]['id']; ?>,'re_pro')">往下</button>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_pro',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_pro',<?= $value['id']; ?>)">刪除</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>