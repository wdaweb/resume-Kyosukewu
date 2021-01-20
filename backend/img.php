<?php
$go = $_GET['do'] ?? 'main';
?>
<div class="mainbox row col-12 g-1">
    <div class="title h3 text-center mt-3"><?= $tstr[$do][0]; ?></div>
    <div class="main full text-center col-12">
        <div class="h3"><span class='addbtn float-start btn btn-warning' onclick="op('#cover','#content','modal/add.php?do=<?= $do; ?>&t=re_img')">新增內容</span>
            <nav>
        <div class="nav nav-tabs justify-content-evenly">
            <a class="nav-link active" data-bs-toggle="tab" href="#cov">封面區塊</a>
            <a class="nav-link" data-bs-toggle="tab" href="#me">關於我區塊</a>
            <a class="nav-link" data-bs-toggle="tab" href="#skill">技能區塊</a>
            <a class="nav-link" data-bs-toggle="tab" href="#pro">作品集區塊</a>
        </div>
        </nav>
        <div class="tab-content h-100 py-5" id="nav-tabContent">
            <div class="tab-pane fade show active" id="cov" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="shows">
                    <div class="d-flex flex-wrap col-12">
                        <?php
                        $img = $Img->all();
                        foreach ($img as $key => $value) {
                        ?>
                            <div class="col-3 border m-2 p-2"><img class="w-100" src="titimg/<?= $value['img']; ?>"></div>
                        <?php
                        }
                        ?>
                        <?php
                        $img = $Timg->all();
                        foreach ($img as $key => $value) {
                        ?>
                            <div class="col-3 border m-2 p-2"><img class="w-100" src="titimg/<?= $value['img']; ?>"></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="me" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="shows">
                    <div class="d-flex flex-wrap col-12">
                        <?php
                        $ab = $Ab->all();
                        foreach ($ab as $key => $value) {
                        ?>
                            <div class="col-1 border m-2"><img class="w-100 p-2" src="titimg/<?= $value['img']; ?>"></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="skill" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="shows">
                    <div class="d-flex flex-wrap col-12">
                        <?php
                        $sk = $Sk->all(' order by rank ');
                        foreach ($sk as $key => $value) {
                        ?>
                            <div class="col-1 border m-2"><img class="w-100 p-2" src="icon/<?= $value['img']; ?>"></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="pro" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="shows">
                    <div class="d-flex flex-wrap col-12">
                        <?php
                        $pro = $Pro->all(' order by rank ');
                        foreach ($pro as $key => $value) {
                        ?>
                            <div class="col-1 border m-2"><img class="w-100 p-2" src="img/<?= $value['img']; ?>"></div>
                            <?php
                            if ($value['link'] == null) {
                            ?>
                                <div class="col-1 border m-2"><img class="w-100 p-2" src="bimg/<?= $value['bimg']; ?>"></div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>