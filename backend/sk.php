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
                            <?php
                            $sk = $Sk->all(['type' => 1], ' order by rank ');
                            foreach ($sk as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="sk">
                                        <input type="hidden" name="table" value="re_skills">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                                <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>><?= $tstr[$do][4]; ?></option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                                        <td>
                                            <img class="icon" src="icon/<?= $value['img']; ?>">
                                            <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                                            <input type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($key != 0) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills')">往上</button>
                                            <?php
                                            }
                                            if ($key != count($sk) - 1) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills')">往下</button>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_skills',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_skills',<?= $value['id']; ?>)">刪除</button></td>
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
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <?php
                            $sk = $Sk->all(['type' => 2], ' order by rank ');
                            foreach ($sk as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="sk">
                                        <input type="hidden" name="table" value="re_skills">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                                <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>><?= $tstr[$do][4]; ?></option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                                        <td>
                                            <img class="icon" src="icon/<?= $value['img']; ?>">
                                            <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                                            <input type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($key != 0) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills')">往上</button>
                                            <?php
                                            }
                                            if ($key != count($sk) - 1) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills')">往下</button>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_skills',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_skills',<?= $value['id']; ?>)">刪除</button></td>
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
                                <td style="width: 20%;">名稱</td>
                                <td style="width: 30%;">圖片</td>
                                <td style="width: 10%;">排序</td>
                                <td style="width: 10%;">編輯</td>
                                <td style="width: 10%;">顯示</td>
                                <td style="width: 10%;">刪除</td>
                            </tr>
                            <?php
                            $sk = $Sk->all(['type' => 3], ' order by rank ');
                            foreach ($sk as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="sk">
                                        <input type="hidden" name="table" value="re_skills">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                                <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>><?= $tstr[$do][4]; ?></option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                                        <td>
                                            <img class="icon" src="icon/<?= $value['img']; ?>">
                                            <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                                            <input type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($key != 0) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills')">往上</button>
                                            <?php
                                            }
                                            if ($key != count($sk) - 1) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills')">往下</button>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_skills',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_skills',<?= $value['id']; ?>)">刪除</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
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
                            <?php
                            $sk = $Sk->all(['type' => 4], ' order by rank ');
                            foreach ($sk as $key => $value) {
                            ?>
                                <tr>
                                    <form action="api/edit.php" method="post">
                                        <input type="hidden" name="do" value="sk">
                                        <input type="hidden" name="table" value="re_skills">
                                        <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                        <td><select name="type">
                                                <option value="1" <?= ($value['type'] == "1") ? "selected" : ""; ?>><?= $tstr[$do][1]; ?></option>
                                                <option value="2" <?= ($value['type'] == "2") ? "selected" : ""; ?>><?= $tstr[$do][2]; ?></option>
                                                <option value="3" <?= ($value['type'] == "3") ? "selected" : ""; ?>><?= $tstr[$do][3]; ?></option>
                                                <option value="4" <?= ($value['type'] == "4") ? "selected" : ""; ?>><?= $tstr[$do][4]; ?></option>
                                            </select>
                                        </td>
                                        <td><input type="text" name="cont" value="<?= $value['cont']; ?>"></td>
                                        <td>
                                            <img class="icon" src="icon/<?= $value['img']; ?>">
                                            <!-- <input type="text" name="img" value="<?= $value['img']; ?>"> -->
                                            <input type="file" name="img" value="<?= $value['img']; ?>">
                                        </td>
                                        <td>
                                            <?php
                                            if ($key != 0) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key - 1]['id']; ?>,'re_skills')">往上</button>
                                            <?php
                                            }
                                            if ($key != count($sk) - 1) {
                                            ?>
                                                <button class="btn btn-outline-secondary" onclick="sw(<?= $value['id']; ?>,<?= $sk[$key + 1]['id']; ?>,'re_skills')">往下</button>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td><input class="submit btn btn-outline-warning" type="submit" value="編輯"></td>
                                    </form>
                                    <td><input type="checkbox" name="show" onclick="api('display2','re_skills',<?= $value['id']; ?>)" <?= ($value['sh'] == 1) ? "checked" : ""; ?>><?= ($value['sh'] == 1) ? "顯示" : "隱藏"; ?></td>
                                    <td><button class="btn btn-outline-danger" onclick="api('del','re_skills',<?= $value['id']; ?>)">刪除</button></td>
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