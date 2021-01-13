<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/favicon.jpg"><!-- title icon -->
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/jquery.preload.min.js"></script>
    <!-- <script src="https://kit.fontawesome.com/a1381bb91e.js" crossorigin="anonymous"></script> -->
    <link href="icon/icon/css/all.css" rel="stylesheet">
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
    <header id="stick" class="">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MaruMotoDesign</a>
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
                            <!-- <li class="nav-item px-3  px-lg-0">
                                <a class="nav-link" href="#pro"><i class="fas fa-book mr-2 me-2"></i>Portfolio</a>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-book mr-2 me-2"></i>Portfolio
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" onclick="go('w')">網頁設計類</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" onclick="go('g')">視覺設計類</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" onclick="go('d')">3D設計類</a></li>
                                </ul>
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
                $exp = $Exp->all(['sh' => 1], " order by rank DESC");
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
                                    $sk = $Sk->all(['sh' => 1, 'type' => 1], ' order by rank limit 0,5');
                                    foreach ($sk as $key => $value) {
                                    ?>
                                        <li class="w<?= $key + 1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
                                    <?php
                                    }
                                    ?>
                                </ol>
                                <ol id="wm2">
                                    <?php
                                    $sk = $Sk->all(['sh' => 1, 'type' => 1], ' order by rank limit 5,5');
                                    foreach ($sk as $key => $value) {
                                    ?>
                                        <li class="w<?= $key + 5; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
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
                                $sk = $Sk->all(['sh' => 1, 'type' => 2], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                    <li class="g<?= $key + 1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
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
                                $sk = $Sk->all(['sh' => 1, 'type' => 3], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                    <li class="d<?= $key + 1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
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
                                $sk = $Sk->all(['sh' => 1, 'type' => 4], ' order by rank');
                                foreach ($sk as $key => $value) {
                                ?>
                                    <li class="t<?= $key + 1; ?>" data-pic="<?= $value['img']; ?>"><?= $value['cont']; ?></li>
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
                    <a class="w nav-link active" data-bs-toggle="tab" href="#wd">網頁設計類</a>
                    <a class="g nav-link" data-bs-toggle="tab" href="#gd">視覺設計類</a>
                    <a class="d nav-link" data-bs-toggle="tab" href="#threed">3D設計類</a>
                </div>
            </nav>
            <div class="tab-content py-5" id="nav-tabContent">
                <div class="w2 tab-pane fade show active" id="wd" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄各類網頁技術製作的作品，點選圖片連結可至成品網頁瀏覽。
                    </p>
                    <div class="row g-3">
                        <?php
                        $pro = $Pro->all(['sh' => 1, 'type' => 1], ' order by rank ');
                        foreach ($pro as $key => $value) {
                        ?>
                            <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                                <div class="card">
                                    <div class="over">
                                        <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong><?= $value['name']; ?></strong>
                                        </div>
                                        <div class="text">
                                            <?= nl2br($value['cont']); ?>
                                        </div>
                                        <a href="<?= $value['link']; ?>" target="_blink">
                                            <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>DEMO網站
                                            </div>
                                        </a>
                                    </div>
                                    <img src="img/<?= $value['img']; ?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="w-100 pb-3 border-bottom"><?= $value['name']; ?></h5>
                                        <div class="ic d-flex justify-content-end">
                                            <?php
                                            $sks = unserialize($value['sk']);
                                            foreach ($sks as $sk) {
                                            ?>
                                                <img class="me-1" src="icon/<?= $sk; ?>">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="g2 tab-pane fade" id="gd" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄平面設計、商業海報、CG電繪...等，視覺相關作品。
                    </p>
                    <div class="row g-3">
                        <?php
                        $pro = $Pro->all(['sh' => 1, 'type' => 2], ' order by rank ');
                        foreach ($pro as $key => $value) {
                        ?>
                            <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                                <div class="card">
                                    <div class="over">
                                        <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong><?= $value['name']; ?></strong>
                                        </div>
                                        <div class="text">
                                            <?= nl2br($value['cont']); ?>
                                        </div>
                                        <a onclick="op('#cover','#content','<?= $value['bimg']; ?>')">
                                            <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                            </div>
                                        </a>
                                    </div>
                                    <img src="img/<?= $value['img']; ?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="w-100 pb-3 border-bottom"><?= $value['name']; ?></h5>

                                        <div class="ic d-flex justify-content-end">
                                            <?php
                                            $sks = unserialize($value['sk']);
                                            foreach ($sks as $sk) {
                                            ?>
                                                <img class="me-1" src="icon/<?= $sk; ?>">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="d2 tab-pane fade" id="threed" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p class="col-12 mb-5 text-center text-secondary">
                        收錄3D建模、擬真渲染、3D列印機打印之作品。
                    </p>
                    <div class="row g-3">
                        <?php
                        $pro = $Pro->all(['sh' => 1, 'type' => 3], ' order by rank ');
                        foreach ($pro as $key => $value) {
                        ?>
                            <div class="proe col-12 col-md-6 col-lg-4 col-xl-3 animate__animated">
                                <div class="card">
                                    <div class="over">
                                        <div class="mb-2 text-center pb-2 w-100 border-bottom"><strong><?= $value['name']; ?></strong>
                                        </div>
                                        <div class="text">
                                            <?= nl2br($value['cont']); ?>
                                        </div>
                                        <a onclick="op('#cover','#content','<?= $value['bimg']; ?>')">
                                            <div class="btn btn-success mt-2"><i class="fas fa-link me-2"></i>點看全圖
                                            </div>
                                        </a>
                                    </div>
                                    <img src="img/<?= $value['img']; ?>" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="w-100 pb-3 border-bottom"><?= $value['name']; ?></h5>

                                        <div class="ic d-flex justify-content-end">
                                            <?php
                                            $sks = unserialize($value['sk']);
                                            foreach ($sks as $sk) {
                                            ?>
                                                <img class="me-1" src="icon/<?= $sk; ?>">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
                $contt = $Conttext->all(['sh' => 1]);
                foreach ($contt as $key => $value) {
                ?>
                    <p><?= $value['text']; ?></p>
                <?php
                }
                ?>
                <p> |
                    <?php
                    $cont = $Cont->all(['sh' => 1]);
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
            <p>-Designed by MaruMotoDesign-</p>
        </div>
    </section>
    <div id="scrolltop" class="position-fixed">
        <a class="btn" href="#banner"><i class="fas fa-angle-double-up fa-2x"></i></a>
    </div>
    <script src="js/js.js"></script>
</body>

</html>