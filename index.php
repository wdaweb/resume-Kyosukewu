<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.jpg">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a1381bb91e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/jquery.preload.min.js"></script>
    <title>Kyosuke's Resume</title>
</head>

<body>
    <div class="banner" id="banner">
        <?php
        $img = $Img->find(['sh' => 1]);
        ?>
        <div class="mainbg"><img src="titimg/<?= $img['img']; ?>"></div>
        <div class="bg0 animate__animated" data-wow-delay="0.3s"></div>
        <div class="bg1 animate__animated"></div>
        <div class="bg2 animate__animated"></div>
        <div class="bg3 animate__animated" data-wow-delay="0.5s"></div>
        <div class="contant">
            <div class="banner-txt">
                <?php
                $mvtext = $Timg->find(['sh' => 1]);
                ?>
                <object id="mysvg" type="image/svg+xml" data="titimg/<?= $mvtext['img']; ?>"></object>
            </div>
        </div>
        <div class="tobanner">
            <a href="#stick"><i class="ar fas fa-chevron-down text-light"></i></a>
        </div>
    </div>
    <header id="stick" class="sticky-wrapper">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MaruDesign</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto me-5 mb-2 mb-lg-0">
                            <li class="nav-item px-3 px-lg-0">
                                <a class="nav-link" href="#ab"><i class="far fa-address-card me-2"></i>About me</a>
                            </li>
                            <li class="nav-item px-3 px-lg-0">
                                <a class="nav-link" href="#exp"><i class="fas fa-school me-2"></i>Experience</a>
                            </li>
                            <li class="nav-item px-3  px-lg-0">
                                <a class="nav-link" href="#sk"><i class="fas fa-code-branch me-2"></i>Skills</a>
                            </li>
                            <li class="nav-item px-3  px-lg-0">
                                <a class="nav-link" href="#pro"><i class="fas fa-book mr-2 me-2"></i>Portfolio</a>
                            </li>
                            <li class="nav-item px-3 px-lg-0">
                                <a class="nav-link" href="#foot"><i class="fas fa-phone-volume me-2"></i>Contact me</a>
                            </li>
                            <li class="nav-item px-3 px-lg-0">
                                <?php
                                if (isset($_SESSION['login'])) {
                                ?>
                                    <a class="nav-link" href="backend.php"><i class="fas fa-sign-in-alt me-2"></i>GoBackend</a>
                                <?php
                                } else {
                                ?>
                                    <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt me-2"></i>LOGIN</a>
                                <?php
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <section>
        <div class="leftside">
            <input type="checkbox" name="" id="side-menu-switch">
            <div class="side-menu">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                求職條件
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="aboutjob">
                                    <table class="col-12 col-lg-8 col-xl-6 mx-auto">
                                        <?php
                                        $job = $Job->all(" order by rank");
                                        foreach ($job as $key => $value) {
                                        ?>
                                            <tr>
                                                <td style="text-align-last: justify;"><?= $value['text']; ?></td>
                                                <td>：</td>
                                                <td class="ps-3 text-center"><?= $value['cont']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                自傳/自我評價
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <?php
                                $self = $Self->find(['sh' => 1]);
                                ?>
                                <div class="se col-12 mx-auto">
                                    <?= nl2br($self['text']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <label for="side-menu-switch">
                    <div class="arr">
                        <i id="fa" class="fa fa-angle-right"></i>
                    </div>
                </label>
            </div>
        </div>
        <article class="container mt-5">
            <div class="about">
                <h3 class="tit w-100 pb-3 border-bottom animate__animated"><i class="far fa-address-card me-2"></i>關於我 /
                    About me
                </h3>
                <div class="row mt-5">
                    <div class="self col-12 col-md-6 text-center animate__animated">
                        <?php
                        $ab = $Ab->find(['sh' => 1]);
                        ?>
                        <img src="titimg/<?= $ab['img']; ?>" alt="">
                    </div>
                    <div class="me col-12 col-md-6 mt-5 mt-md-0">
                        <?php
                        $text = $Abtext->find(['sh' => 1]);
                        ?>
                        <div class="txt">
                            <?= nl2br($text['text']); ?>
                        </div>
                        <div class="edu mt-5">
                            <?php
                            $edu = $Edu->all(['sh' => 1]);
                            foreach ($edu as $key => $value) {
                            ?>
                                <i class="fas fa-graduation-cap me-2"></i>最高學歷：<?= $value['text']; ?> <?= $finish[$value['finish']]; ?>
                                <hr>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="exp text-center">|
                            <?php
                            $cont = $Cont->all(['sh' => 1]);
                            foreach ($cont as $key => $value) {
                            ?>
                                <a class="mx-3" href="<?= $value['cont']; ?>">
                                    <i class="<?= $value['icon']; ?> me-2"></i><?= $value['method']; ?></a>|
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="container">
        <div class="experience mb-5" id="exp">
            <h3 class="tit3 w-100 pb-3 border-bottom animate__animated"><i class="fas fa-school mt-5 me-2"></i>學習/工作經歷 / Experience</h3>
            <ul class="timeline">
                <?php
                $exp = $Exp->all(" order by rank DESC");
                foreach ($exp as $key => $value) {
                ?>
                    <li class="li animate__animated">
                        <a>
                            <h4><small><?= $value['year']; ?>：</small><?= $value['jtitle']; ?></h4>
                            <hr>
                            <p><?= nl2br($value['cont']); ?>
                            </p>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </section>
    <section class="skills" id="sk">
        <article class="container">
            <h3 class="tit5 w-100 pb-3 border-bottom animate__animated"><i class="fas fa-code-branch me-2"></i>工作技能 / Skills</h3>
            <div class="row justify-content-between">
                <div id="sk1" class="item animate__animated">
                    <div class="icon"><i class="ani fas fa-solar-panel"></i></div>
                    <div class="txt">
                        <h5>網頁相關技術</h5>
                        <hr>
                        <div class="pic w-50 mx-auto">
                            <img id="wimg" src="icon/w0.png">
                        </div>
                        <div class="overlay">
                            <div class="d-flex">
                                <ol id="wm1">
                                    <?php
                                    $sk = $Sk->all(['type' => 1], ' order by rank limit 0,5');
                                    foreach ($sk as $key => $value) {
                                    ?>
                                        <li class="w<?= $key+1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                                <ol id="wm2">
                                    <?php
                                    $sk = $Sk->all(['type' => 1], ' order by rank limit 5,5');
                                    foreach ($sk as $key => $value) {
                                    ?>
                                        <li class="w<?= $key+5; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sk2" class="item animate__animated" data-wow-delay="0.2s">
                    <div class="icon"><i class="ani far fa-images"></i></div>
                    <div class="txt">
                        <h5>視覺/影像處理</h5>
                        <hr>
                        <div class="d-flex">
                            <ol>
                                <?php
                                $sk = $Sk->all(['type' => 2], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                    <li class="g<?= $key+1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                <?php
                                }
                                ?>
                            </ol>
                            <div class="pic w-50 text-center">
                                <img id="gimg" src="icon/g0.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sk3" class="item animate__animated" data-wow-delay="0.3s">
                    <div class="icon"><i class="ani fas fa-cubes"></i></div>
                    <div class="txt">
                        <h5>3D軟體應用</h5>
                        <hr>
                        <div class="d-flex">
                            <ol>
                                <?php
                                $sk = $Sk->all(['type' => 3], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                    <li class="d<?= $key+1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                <?php
                                }
                                ?>
                            </ol>
                            <div class="pic w-50 text-center">
                                <img id="dimg" src="icon/d0.png">
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sk4" class="item animate__animated" data-wow-delay="0.4s">
                    <div class="icon"><i class="ani far fa-keyboard"></i></div>
                    <div class="txt">
                        <h5>文書軟體應用</h5>
                        <hr>
                        <div class="d-flex">
                            <ol>
                            <?php
                                $sk = $Sk->all(['type' => 4], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                <li class="t<?= $key+1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                <?php
                                }
                                ?>
                            </ol>
                            <div class="pic w-50 text-center">
                                <img id="timg" src="icon/t0.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="portfolio" id="pro">
        <!-- --------------------- -->
        <div id="cover">
            <div class="imgc">
                <a onclick="cl('#cover')"><i class="fas fa-times text-light"></i></a>
                <img id="bimg" src="bimg/gb1.png">
            </div>
        </div>
        <!-- --------------------- -->
        <article class="container">
            <h3 class="tit7 animate__animated"><i class="fas fa-book me-2"></i>作品集 / Portfolio</h3>
            <nav>
                <div class="nav nav-tabs justify-content-evenly">
                    <a class="nav-link active" data-bs-toggle="tab" href="#wd">網頁設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#gd">視覺設計類</a>
                    <a class="nav-link" data-bs-toggle="tab" href="#threed">3D設計類</a>
                </div>
            </nav>
            <div class="tab-content py-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="wd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄各類網頁技術製作的作品，點選圖片連結可至成品網頁瀏覽。
                    </p>
                    <div class="row g-3">
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>線上發票紀錄/對獎系統</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 管理者、使用者、訪客三種登入模式，可查看不同權限訊息。<br>
                                        ◆ 可進行發票的CRUD、自動對獎、提示開獎/過期與否，統計獎金、中獎發票、張數等訊息。<br>
                                        ◆ 支援RWD響應式網站功能。
                                    </div>
                                    <a href="http://220.128.133.15/s1090421/invoice" target="_blink">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>DEMO網站
                                        </div>
                                    </a>
                                </div>
                                <img src="img/inv.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">線上發票紀錄/對獎系統</h5>
                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/w1.png">
                                        <img class="me-1" src="icon/w2.png">
                                        <img class="me-1" src="icon/w5.png">
                                        <img class="me-1" src="icon/w9.png">
                                        <img class="me-1" src="icon/w8.png">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>線上萬年曆</strong></div>
                                    <div class="text">
                                        ◆ 具備切換月/年份，並可隨時回到當日功能，可直接輸入年份日期查詢特定年份。<br>
                                        ◆ 標示出每月特殊日期/假日/當天日期，並以不同顏色醒目標示。<br>
                                        ◆ 支援RWD響應式網站功能。
                                    </div>
                                    <a href="http://220.128.133.15/s1090421/calendar" target="_blink">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>DEMO網站
                                        </div>
                                    </a>
                                </div>
                                <img src="img/cal.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">線上萬年曆</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/w1.png">
                                        <img class="me-1" src="icon/w2.png">
                                        <img class="me-1" src="icon/w5.png">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>QTE小遊戲</strong></div>
                                    <div class="text">
                                        ◆ 透過Sweetalert2，結合影片控制製作的小型-快速反應事件(Quick Time Events)-遊戲<br>
                                        ◆ 支援RWD響應式網站功能。
                                    </div>
                                    <a href="http://220.128.133.15/s1090421/QTEgame" target="_blink">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>DEMO網站
                                        </div>
                                    </a>
                                </div>
                                <img src="img/QTE.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">QTE小遊戲</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/w1.png">
                                        <img class="me-1" src="icon/w2.png">
                                        <img class="me-1" src="icon/w5.png">
                                        <img class="me-1" src="icon/w3.png">
                                        <img class="me-1" src="icon/w4.png">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="gd" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄平面設計、商業海報、CG電繪...等，視覺相關作品。
                    </p>
                    <div class="row g-3">
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>動漫人物仿繪</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 繪圖板練習，透過PS營造光影效果仿繪動漫人物<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb1')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g1.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">動漫人物仿繪</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>聖誕節賀圖</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 以聖誕老人及麋鹿發想，結合動漫風格人物設計的聖誕賀圖<br>
                                        ◆ 可應用於輸出馬克杯圖案<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb2')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g2.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">聖誕節賀圖</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>放空小孩-真人動漫化</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 以實際真人為原型發想，詮釋漫畫造型的人物<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb3')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g3.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">放空小孩-真人動漫化</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>桌布設計01</strong>
                                    </div>
                                    <div class="text">
                                        ◆ Q版角色繪圖，結合情境製作桌布背景<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb4')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g4.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">桌布設計01</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>月夜下的貓頭鷹</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 原創作品，表現月夜下佇立於樹梢的貓頭鷹<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb5')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g5.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">月夜下的貓頭鷹</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom">
                                        <strong>GEARBEAR!-角色設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 原創作品，以充滿"機械感"的概念為發想，設計生機結合的角色<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb6')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g6.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">GEARBEAR!-角色設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>雙葉茶茶丸-角色設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 原創作品，以"茶葉"為概念發想，並設定角色個性作為企業吉祥物<br>
                                        ◆ 透過3D建模，並以3DPrinter技術輸出製作成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb7')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g7.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">雙葉茶茶丸-角色設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>ZEUS-LOGO設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 新創戶外用品品牌ZEUS的LOGO設計<br>
                                        ◆ 以宙斯之鷹為概念基礎，展現品牌果敢、勇猛的企業精神<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb8')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g8.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">ZEUS-LOGO設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>活動短漫+角色設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 招募新人用網路文宣設計，以剛畢業的新鮮資工人族群為主，故設定女主角為充滿活力剛畢業的資工少女<br>
                                        ◆ 以"短漫問答互動"形式讓網友票選女主角的理想未來，並以多年後的自己的角度，闡述當年選擇的結果，強調該行業美好願景<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb9')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g9.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">活動短漫+角色設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center w-100 border-bottom"><strong>招牌+菜單設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 30年老店新創計畫的LOGO及菜單設計，LOGO主體以老闆娘的形象設計為"熊媽"的親切形象<br>
                                        ◆ 菜單一改傳統手寫紙板，以圖像化為主，令客人對於產品一目了然，並能增進食慾<br>
                                        ◆ 菜單標示特色菜，引導新的客人一眼了解本店招牌菜色<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb10')">
                                        <div class="btn btn-success"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g10.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">招牌+菜單設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>網拍產品介紹設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 為網拍產品設計一系列產品介紹圖文<br>
                                        ◆ 透過冷色調、波浪線條、冰塊、六角形為主視覺要素，強調產品"涼感"的特性<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb11')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g11.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">網拍產品介紹設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>2021年曆設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 以2021年代表生肖-牛為發想基礎，結合牛隻部位解說圖的概念，設計出充滿趣味又可口的年曆<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb12')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g12.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">2021年曆設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>旅遊DM設計</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 以日本賞櫻旅遊為主題，介紹日本四個著名賞櫻景點的相關資訊<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb14')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g13.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">旅遊DM設計</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g1.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>30日動物挑戰</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 以黃金比例的圓形，勾勒出各式各樣動物的30日挑戰!<br>
                                    </div>
                                    <a onclick="op('#cover','#content','gb13')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/g14.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">30日動物挑戰</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/g2.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="threed" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄3D建模、擬真渲染、3D列印機打印之作品。
                    </p>
                    <div class="row g-3">
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>創意馬克杯蓋</strong></div>
                                    <div class="text">
                                        ◆ 透過部分替換件實現馬克杯蓋/小公仔雙重功能<br>
                                        ◆ 透過分件設計實現砲管可動<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db1')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖</div>
                                    </a>
                                </div>
                                <img src="img/d1.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">創意馬克杯蓋</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>可動模型骨架</strong></div>
                                    <div class="text">
                                        ◆ 透過3mm孔洞可結合市售眾多模型遊玩<br>
                                        ◆ 透過分件設計實現全關節可動<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db2')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d2.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">可動組裝骨架</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>升降機擬真示意圖</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 3D建模組裝<br>
                                        ◆ C4D渲染+材質模擬真實場景<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db3')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d3.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">升降機擬真示意圖</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/d5.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>造型手機架</strong></div>
                                    <div class="text">
                                        ◆ 透過簡易造型挖空實現手機架功能<br>
                                        ◆ 與遊戲公司合作推出之小贈品<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db4')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d4.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">造型手機架</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>茶茶丸公仔</strong></div>
                                    <div class="text">
                                        ◆ 茶葉為主題設計之形象公仔<br>
                                        ◆ 結合市售關節零件實現關節可動<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db5')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d5.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">茶茶丸公仔</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>彎腰郵筒造型擺飾</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 2015年蘇迪勒颱風席捲全台爆紅的郵筒形象<br>
                                        ◆ 結合時事話題設計的小擺件<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db6')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d6.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">彎腰郵筒造型擺飾</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                            <div class="card">
                                <div class="over">
                                    <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong>多功能茶壺名片座</strong>
                                    </div>
                                    <div class="text">
                                        ◆ 符合企業形象之茶壺造型擺飾<br>
                                        ◆ 透過簡易拆卸可變成造型名片座<br>
                                        ◆ 3D列印輸出成品<br>
                                    </div>
                                    <a onclick="op('#cover','#content','db7')">
                                        <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                        </div>
                                    </a>
                                </div>
                                <img src="img/d7.jpg" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="w-100 pb-3 border-bottom">多功能茶壺名片座</h5>

                                    <div class="ic d-flex justify-content-end">
                                        <img class="me-1" src="icon/d1.png">
                                        <img class="me-1" src="icon/dd.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section id="foot" class="footer py-3">
        <article class="container text-center">
            <h3 class="tit9 text-light mb-4 animate__animated"><i class="fas fa-phone-volume me-2 "></i>聯絡我 / Contact me</h3>
            <div class="contme text-light animate__animated">
            <?php
                $contt = $Conttext->all(['sh'=>1]);
                foreach ($contt as $key => $value) {
                ?>
                <p><?=$value['text'];?></p>
                <?php
                }
                ?>
                <p> |
                <?php
                $cont = $Cont->all();
                foreach ($cont as $key => $value) {
                ?>
                <a class="text-light" href="<?= $value['link']; ?>"><?= $value['method']; ?>：<?= $value['cont']; ?></a> |
                    <?php
                }
                ?>
                </p>
            </div>
        </article>
        <div class="bar text-center">
            <p>-Designed by MaruDesign-</p>
        </div>
    </section>
    <div id="scrolltop" class="position-fixed">
        <a class="btn" href="#banner"><i class="fas fa-angle-double-up fa-2x"></i></a>
    </div>
    <script src="js/js.js"></script>
</body>

</html>