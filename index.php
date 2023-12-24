<?php
 goto DaOH1; DaOH1: if (file_exists("\151\x6e\x73\x74\x61\154\154\56\154\x6f\x63\x6b")) { $installLockContent = file_get_contents("\151\x6e\163\164\x61\x6c\154\x2e\x6c\157\x63\x6b"); if (trim($installLockContent) === "\164\x68\x61\x6e\150\144\151\x65\165\154\157\166\145\75\164\x72\x75\x65") { } else { header("\x4c\157\143\141\164\151\x6f\x6e\x3a\x20\x2e\x2f\x69\156\x73\164\x61\x6c\154\57"); die; } } else { header("\114\157\143\x61\164\151\157\x6e\72\x20\56\57\151\156\x73\x74\x61\x6c\x6c\x2f"); die; } goto e3bi7; mscya: if ($baotri_site == "\157\x6e") { echo "\74\155\145\x74\x61\x20\156\141\x6d\145\75\x27\166\151\x65\x77\160\157\162\x74\47\x20\143\157\x6e\x74\x65\156\164\x3d\x27\167\x69\144\x74\150\x3d\x64\x65\x76\151\x63\145\x2d\167\x69\144\164\150\54\151\156\x69\x74\151\141\x6c\55\x73\x63\141\154\x65\x3d\61\56\x30\x27\76\x3c\151\146\x72\141\155\145\40\163\x72\143\x3d\47\142\141\x6f\164\162\151\47\40\x73\164\x79\x6c\x65\75\47\x70\157\163\x69\164\151\157\x6e\x3a\141\x62\x73\157\x6c\165\164\145\x3b\x77\151\x64\x74\x68\72\40\61\x30\60\x25\73\150\x65\x69\147\150\164\72\x20\x31\x30\x30\x25\73\x74\x6f\160\72\x20\60\x3b\154\145\146\164\x3a\x20\60\73\142\x6f\x72\x64\145\162\72\40\156\x6f\156\x65\73\47\40\141\154\154\157\x77\146\x75\x6c\154\x73\x63\162\145\145\156\x3e\74\x2f\x69\146\x72\x61\x6d\x65\x3e"; die("\65\x30\63\40\123\x65\162\166\151\143\x65\40\125\x6e\x61\166\141\151\154\141\142\x6c\145"); } goto bC8XX; e3bi7: require_once "\143\157\x6e\146\x2f\x63\157\x6e\x6e\x2e\x70\150\x70"; goto Z70pQ; Z70pQ: if (!defined("\x41\x50\x49\137\x4b\x45\x59") && !isset($license)) { die("\115\x69\x73\x73\x69\x6e\x67\40\x74\150\145\x20\x65\170\x74\x65\156\x73\151\157\x6e\40\x63\x6f\155\155\157\156\56\x70\150\160"); } goto mscya; bC8XX: ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?=$description?>">
    <meta name="author" content="<?=$author?>">
    <meta name="keywords" content="<?=$keywords?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="<?=$logo?>" type="image/x-icon">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="<?=Directory('css');?>WhiteMac.css<?=$Cache?>" />
    <link rel="stylesheet" href="<?=Directory('css');?>style.css<?=$Cache?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?=Directory('css');?>footer-custom.css<?=$Cache?>">
    <link rel="stylesheet" href="<?=Directory('css');?>botui.min.css<?=$Cache?>" />
    <link rel="stylesheet" href="<?=Directory('css');?>botui-theme-default.css<?=$Cache?>" />
    <link rel="stylesheet" href="<?=Directory('css');?>thanhdieu.com_comment-ua.css<?=$Cache?>" />
    <link rel="stylesheet" href="<?=Directory('css');?>form-timelove.css<?=$Cache?>" />
    <link href="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.1/css/bootstrap.min.css<?=$Cache?>"
        type="text/css" rel="stylesheet" />
    <!-- Cửa sổ bật lên -->
    <script src="<?=Directory('js');?>dream-msg.min.js<?=$Cache?>"></script>
    <script src="<?=Directory('js');?>wussun.js<?=$Cache?>"></script>
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery/3.6.0/jquery.min.js<?=$Cache?>"></script>
    <script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/bootstrap/4.6.1/js/bootstrap.min.js<?=$Cache?>">
    </script>
    <meta property="og:url" content="<?=$website_domain?>">
    <meta property="og:image" content="https://i.imgur.com/JTLFCed.png">
    <meta property="og:description" content="<?=$description?>">
    <meta name="theme-color" content="#00FFFF">
</head>

<body class="github-wusthanhdieu">
    <div id="Loadanimation" style="z-index: 999999; display: none;">
        <div id="Loadanimation-center">
            <div id="Loadanimation-center-absolute">
                <div class="loader_object" id="loader_four"></div>
                <div class="loader_object" id="loader_three"></div>
                <div class="loader_object" id="loader_two"></div>
                <div class="loader_object" id="loader_one"></div>
            </div>
        </div>
    </div>
    <style>
    #Loadanimation {
        background-color: #fff;
        height: 100%;
        width: 100%;
        position: fixed;
        z-index: 1;
        margin-top: 0px;
        top: 0px;
    }

    #Loadanimation-center {
        width: 100%;
        height: 100%;
        position: relative;

    }

    #Loadanimation-center-absolute {
        position: absolute;
        left: 50%;
        top: 50%;
        height: 200px;
        width: 200px;
        margin-top: -100px;
        margin-left: -100px;
    }

    .loader_object {
        -moz-border-radius: 50% 50% 50% 50%;
        -webkit-border-radius: 50% 50% 50% 50%;
        border-radius: 50% 50% 50% 50%;
        position: absolute;
        border-left: 5px solid #87CEFA;
        border-right: 5px solid #FFC0CB;
        border-top: 5px solid transparent;
        border-bottom: 5px solid transparent;
        -webkit-animation: animate 2.5s infinite;
        animation: animate 2.5s infinite;

    }

    #loader_one {
        left: 75px;
        top: 75px;
        width: 50px;
        height: 50px;

    }

    #loader_two {
        left: 65px;
        top: 65px;
        width: 70px;
        height: 70px;
        -webkit-animation-delay: 0.1s;
        animation-delay: 0.1s;

    }

    #loader_three {
        left: 55px;
        top: 55px;
        width: 90px;
        height: 90px;
        -webkit-animation-delay: 0.2s;
        animation-delay: 0.2s;

    }

    #loader_four {
        left: 45px;
        top: 45px;
        width: 110px;
        height: 110px;
        -webkit-animation-delay: 0.3s;
        animation-delay: 0.3s;

    }

    @-webkit-keyframes animate {
        50% {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);

        }

        100% {
            -ms-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);

        }

    }

    @keyframes animate {
        50% {
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);

        }

        100% {
            -ms-transform: rotate(0deg);
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);

        }
    }
    </style>
    <!-- 
// info.onclick = function(){
//   Dreamer.info("Đây là thông báo thông tin!", 2000,function () {
//   });
// }

// success.onclick = function(){
//   Dreamer.success("Đây là thông báo thành công!");
// }

// warning.onclick = function(){
//   Dreamer.warning("Đây là thông báo cảnh báo!",0);
// }

// error.onclick = function(){
//   Dreamer.error("Không thể thêm, vui lòng thử lại sau!", 3000,true);
// }

// loading.onclick = function(){
//   var closeMsg = Dreamer.loading("Đang tải vui lòng đợi");
//   setTimeout(function () {
//     closeMsg();
//   }, 4000);
// }

// close.onclick = function(){
//   Dreamer.destroyAll();
// } -->
    <div id="top-img"></div>
    <div class="position-relative">
        <?php if ($mode_love== 'macdinh') { ?>
        <div class="diem-ngay-yeu">
            <blockquote class="blockquote text-center my-5 py-2">
                <h5 class="card-title lover-card-title pop-outin"><?=$titlelove?></h5>
                <h5 id="site_runtime" style="font-size: 15px;"></h5>
            </blockquote>
        </div>
    </div>
    <br /><br /><br />
    <?php } elseif ($mode_love== 'vongtron') { ?>
    <div class="d-flex justify-content-center">
        <div class="circle kaka" id="daysCountdown">
            Bên nhau được<br>
            <span id="daysNumber">null</span>
            Ngày
        </div>
    </div>
    <br><br><br><br><br>
    <script>
    function LoveTimeTotal1() {
        let ngayhenho = "<?=$ngayhenho?>";
        let dateComponents = ngayhenho.split("-");
        let e = new Date(`${dateComponents[2]}-${dateComponents[1]}-${dateComponents[0]}`);
        let n = new Date();
        let t = n - e;

        document.getElementById("daysNumber").innerText = Math.floor(t / 864e5);
    }
    setInterval(LoveTimeTotal1, 1000);
    LoveTimeTotal1();
    </script>
    <?php }?>
    <?php if ($mode_love== 'lich2') { ?>
    <div id="normal-countdown">
        <div class="time-sec">
            <h3 id="td-day1" class="main-time">00</h3>
            <span>Ngày</span>
        </div>
        <div class="time-sec">
            <h3 id="td-hours1" class="main-time">00</h3>
            <span>Giờ</span>
        </div>
        <div class="time-sec">
            <h3 id="td-minute1" class="main-time">00</h3>
            <span>Phút</span>
        </div>
        <div class="time-sec">
            <h3 id="td-sec1" class="main-time">00</h3>
            <span>Giây</span>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <script>
    function LoveCountdown2() {
        let $ = "<?=$ngayhenho?>".split("-"),
            e = new Date(`${$[2]}-${$[1]}-${$[0]}`),
            n = new Date,
            t = n - e;
        document.getElementById("td-day1").innerText = Math.floor(t / 864e5), document.getElementById("td-hours1")
            .innerText = Math.floor(t % 864e5 / 36e5), document.getElementById("td-minute1").innerText = Math.floor(t %
                36e5 / 6e4), document.getElementById("td-sec1").innerText = Math.floor(t % 6e4 / 1e3)
    }
    setInterval(LoveCountdown2, 1e3), LoveCountdown2();
    </script>
    <?php } ?>
    <?php if ($mode_love== 'lich3'): ?>
    <div class="flex-col-c p-t-50 p-b-50">
        <div class="flex-w1 flex-c cd100 p-b-82">
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 days" id="wus-ngay">00</span>
                <span class="s1-txt1">Ngày</span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 hours" id="wus-gio">00</span>
                <span class="s1-txt1">Giờ</span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 minutes" id="wus-phut">00</span>
                <span class="s1-txt1">Phút</span>
            </div>
            <div class="flex-col-c-m size2 how-countdown">
                <span class="l1-txt3 p-b-9 seconds" id="wus-giay">00</span>
                <span class="s1-txt1">Giây</span>
            </div>
        </div>
    </div>
    <script>
    function LoveCountdown3() {
        let e = "<?=$ngayhenho?>".split("-"),
            n = new Date(`${e[2]}-${e[1]}-${e[0]}`),
            o = new Date - n;
        document.getElementById("wus-ngay").innerText = Math.floor(o / 864e5), document.getElementById("wus-gio")
            .innerText = Math.floor(o % 864e5 / 36e5), document.getElementById("wus-phut").innerText = Math.floor(o %
                36e5 / 6e4), document.getElementById("wus-giay").innerText = Math.floor(o % 6e4 / 1e3)
    }
    setInterval(LoveCountdown3, 1e3), LoveCountdown3();
    </script>
    <?php endif; ?>
    <!--<div class="diem-ngay-yeu">
    <span id="heading" class="diem-ngay-ki-niem">ThanhDieu.Com</span></div> -->
    <!-- <section class="lover-background" style="background-image: url()"></section> -->
    </div>
    <section class="lover-background" style="background-image: url(<?php 
                     switch ($bg_img) {
                     case 'luffy':
                  //   echo Directory('img') . ((rand(0, 1)) ? 'bg-luffy.jpg' : 'bg-luffy-2.jpg');
                    echo Directory('img') .'bg-luffy.jpg';
                     break;
                    case 'together':
                    echo Directory('img').'together.png';
                    break;
                  case 'megumi':
                    echo Directory('img').'megumi-black.jpg';
                    break;
                    case 'tanjiro':
                    echo Directory('img').'tanjiro.jpg';
                        break;
                    case 'rdanime':
                        echo (rand(0, 1)) ? 'https://i.ibb.co/6B0bk5J/6604.jpg' : ((rand(0, 1)) ? 'https://i.imgur.com/P7LdFsb.png' : 'https://i.ibb.co/9b01t5h/10399.png');
                         break;
                  default:
                     echo 'https://i.imgur.com/V9m12wr.png';
                     }
                 ?>)">
    </section>
    <section class="container lover-container d-flex flex-column align-content-center justify-content-center">
        <?php if ($mode_love == 'lich2'): ?>
        <div class="row wus-pc <?=$LoveHidden?> <?=$LoveHiddenName?>">
            <div class="col-lg-7 text-center mx-auto">
                <h3 class="text-white pt-3 mt-n5">❄️ <?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?> ❤️
                    <?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?> 🌟</h3>
                <p class="lead text-white mt-3">Mãi Bên Nhau Bạn Nhó :3</p>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($themerela == 1):
?>
        <div class="container-lover">
            <?php else: ?>
            <?php endif; ?>
            <?php if ($mode_love == 'lich'): ?>
            <div class="container-lich">
                <?php endif; ?>
                <?php if ($mode_love == 'lich2'): ?>
                <div class="container-lich2">
                    <?php endif; ?>
                    <div class="row align-items-center pb-5 lover <?=$LoveFormat?>">
                        <div class="col">
                            <div id="openCardDivboy" class="d-flex flex-column">
                                <img class="mx-auto avatar-img rounded-circle"
                                    src="<?= !empty($avatarboy) ? $avatarboy : Directory("img").'Avatar-Girl.jpg' ?>"
                                    alt="<?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?>">
                                <h5 class="mx-auto text-white pt-2 d-none d-sm-flex">
                                    <?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?>&nbsp;<img class="sex-boy"
                                        src="<?=Directory('img');?>boy.webp">
                                </h5>
                                <h6 class="mx-auto text-white pt-2 d-flex d-sm-none align-items-center">
                                    <span class="text-nowrap">
                                        <?= $displayedName = !empty($tenban) ? $tenban : 'Tokuda Shigeo';strlen($displayedName) > 9 ? substr($displayedName, 0, 9) . '...' : $displayedName;?>
                                    </span>
                                    <img style="margin-top: -3px;" class="sex-dt"
                                        src="<?= Directory('img'); ?>boy.webp">
                                </h6>
                                <span class="mx-auto text-white d-flex align-items-center zodiac zodiac-boy">
                                    <?= !empty($cunghoangdao_boy) ? $cunghoangdao_boy : 'Chưa set cung' ?>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex justify-content-center">
                                <div class="heart"></div>
                            </div>
                        </div>
                        <div id="openCardDivgirl" class="d-flex flex-column">
                            <img class="mx-auto avatar-img rounded-circle"
                                src="<?= !empty($avatargirl) ? $avatargirl : Directory("img").'Avatar-Girl.jpg' ?>"
                                alt="<?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?>">

                            <h5 class="mx-auto text-white pt-2 d-none d-sm-block overflow-ellipsis">
                                <?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?>
                                <img class="sex-img" src="<?=Directory('img');?>girl.webp">
                            </h5>

                            <h6 class="mx-auto text-white pt-2 d-block d-sm-none overflow-ellipsis"
                                style="margin-left:10px !important;">
                                <span class="text-nowrap">
                                    <?= $displayedName = !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi';strlen($displayedName) > 9 ? substr($displayedName, 0, 9) . '...' : $displayedName;?>
                                </span>
                                <img class="sex-dt" src="<?=Directory('img');?>girl.webp">
                            </h6>
                            <span class="mx-auto text-white d-flex align-items-center zodiac zodiac-girl">
                                <?= !empty($cunghoangdao_girl) ? $cunghoangdao_girl : 'Chưa set cung' ?>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    <?php if ($mode_love == 'lich'): ?>
    <div class="row <?=$LoveHidden?> text-center wus-mobile" style="margin-top:-100px;">
        <div class="col-lg-7 mx-auto">
            <h3 class="text-white pt-3 mt-n5 wus-mb-size">❄️ <?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?> ❤️
                <?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?> 🌟</h3>
            <p class="lead text-white mt-3">Mãi Bên Nhau Bạn Nhó :3 </p>
        </div>
    </div>
    <div class="wusss"></div>
    <?php endif; ?>
    <?php if ($mode_love == 'lich2'): ?>
    <div class="row <?=$LoveHidden?> wus-mobile" style="margin-top:-100px;">
        <div class="col-lg-7 mx-auto text-center">
            <h4 class="mx-auto text-white pt-2 d-none d-sm-block overflow-ellipsis">❄️
                <?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?> ❤️
                <?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?> 🌟</h4>
            <h5 class="mx-auto text-white pt-2 d-block d-sm-none overflow-ellipsis">❄️
                <?= !empty($tenban) ? $tenban : 'Tokuda Shigeo' ?> ❤️
                <?= !empty($tennguoiay) ? $tennguoiay : 'Fukada Eimi' ?> 🌟</h5>
            <p style="font-size:18px;" class="lead text-white mt-3">Mãi Bên Nhau Bạn Nhó :3 </p>
        </div>
    </div>
    <div class="wusss-pc-mb"></div>
    <?php endif; ?>
    <section class="main-hero-waves-area waves-area">
        <svg class="waves-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave"
                    d="M -160 44 c 30 0 58 -18 88 -18 s 58 18 88 18 s 58 -18 88 -18 s 58 18 88 18 v 44 h -352 Z">
                </path>
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0"></use>
                <use xlink:href="#gentle-wave" x="48" y="3"></use>
                <use xlink:href="#gentle-wave" x="48" y="5"></use>
                <use xlink:href="#gentle-wave" x="48" y="7"></use>
            </g>
        </svg>
    </section>
    <?php if ($mode_love == 'lich'): ?>
    <div class="wusss-pc"></div>
    <?php endif; ?>
    <!--<div class="navigation-bar">
        <div class="dropdown">
            <button class="dropbtn" id="scrollToComment">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Phần Bình Luận</font>
                </font>
            </button>
            <div class="dropdown-content">
            </div>
        </div>
        <div class="dropdown"></div>
        <button class="dropbtn">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trang Vận May</font>
            </font>
        </button>
        <div class="dropdown-content">
        </div>
    </div>
    </div>
    </div>-->
    <?php if ($mode_love == 'macdinh'): ?>
    <div class="_t_d-macdinh-pc-mobile"></div>
    <?php endif; ?>
    <?php if ($mode_love == 'lich'): ?>
    <div class="wusss-pc-mb-lich"></div>
    <?php endif; ?>
    <?php if ($mode_love == 'lich2'): ?>
    <div class="wusss-mb-lich2"></div>
    <?php endif; ?>
    <?php if ($mode_love == 'lich3'): ?>
    <div class="wusss-pc-mb-lich3"></div>
    <?php endif; ?>
    <?php if ($mode_love == 'vongtron'): ?>
    <div class="wusss-pc-mb-vongtron"></div>
    <?php endif; ?>
    <br /><br />
    <?php if ($user_cmt == '1') { ?>
    <!-- -->
    <div class="container-comments">
        <div id="respond-page" class="respond list-content mx-auto mt-5">
            <h5 class="loveList-title cmt-title" style="display: block; text-align: center; margin-bottom: 30px;"> Hiện
                Có
                <span class="bigfontNum"> <?=$tongcmt?> </span>Lượt Bình Luận
            </h5>
            <?php
$comments_per_page = 5;
$total_comments_query = $thanhdieudb->query("SELECT COUNT(*) as total FROM comments");
$total_comments = $total_comments_query->fetch_assoc()['total'];
$current_page = isset($_GET['comment-page']) ? intval($_GET['comment-page']) : 1; 
if ($current_page <= 0) {
    $current_page = 1; 
}
$total_pages = ceil($total_comments / $comments_per_page);
$offset = ($current_page - 1) * $comments_per_page;
$showcmt = "SELECT * FROM comments ORDER BY ngaybinhluan DESC LIMIT $comments_per_page OFFSET $offset";
$result_cmt = $thanhdieudb->query($showcmt);
if ($result_cmt->num_rows > 0) {
    while ($row = $result_cmt->fetch_assoc()) {
        ?>
            <ol class="comment-list">
                <div id="li-comment" class=" comment-body comment-parent comment-odd">
                    <div class="commentlist">
                        <div class="comment" id="li-comment">
                            <div>
                                <div class="comment-avatar">
                                    <?php if ($row['banned'] == '1') { ?>
                                    <img alt=""
                                        src="https://i.pinimg.com/564x/06/63/d4/0663d4d85dcd4f789e42f4d3724c5796.jpg"
                                        class="avatar avatar-96 photo" height="96" width="96"
                                        style="display: inline;object-fit:cover;">
                                    <?php } else { ?>
                                    <img alt=""
                                        src="<?= !empty($row['avatar']) ? $row['avatar'] : 'https://i.imgur.com/S78eT0P.png' ?>"
                                        class="avatar avatar-96 photo" height="96" width="96"
                                        style="display: inline;object-fit:cover;">
                                    <?php } ?>
                                </div>
                                <div class="comment-body">
                                    <?php if ($row['banned'] == '1') { ?>
                                    <span class="banned-badge">
                                        <i class="fa-solid fa-user"></i>
                                        Tài khoản vi phạm
                                    </span>
                                    <?php } else { ?>
                                    <span
                                        class="<?= strtolower($row['role']) === 'admin' ? 'authentication-badge' : 'default-badge' ?>">
                                        <?= strtolower($row['role']) === 'admin' ? '<img width="20" height="20" src="./static/img/admin.png">' : ' <i class="fa-solid fa-user"></i>' ?>
                                        <?= strtolower($row['role']) === 'admin' ? 'Quản Trị Viên' : $row['taikhoan'] ?>
                                    </span>
                                    <?php } ?>
                                    <span class="comment-ua">&ensp;&ensp;<i
                                            class="ua-icon <?=$row['device_icon'];?>"></i>&ensp;<?=$row['device'];?>&nbsp;/
                                        <i class="ua-icon <?=$row['browser'];?>"></i>&ensp;<?=$row['browser_name'];?>
                                    </span>
                                    <div class="comment_author">
                                        <span class="name">
                                            <a rel="external nofollow">
                                                <?php if ($row['banned'] == '1') { ?>
                                                <i><del>Tài khoản bị cấm</del></i>
                                                <?php } else { ?>
                                                <?=$row['hovaten'];?> <?=$row['tichxanh'];?> | <em
                                                    style="color:#66ff0d;">
                                                    <?= date('H:i, d-m-Y', strtotime($row["ngaybinhluan"])) ?>
                                                </em></a>
                                            <?php } ?>
                                        </span>
                                        <br>
                                    </div>
                                    <?php if ($row['banned'] == '1') { ?>
                                    <div class="comment-text-box"><i>Bình luận đã bị cấm!</i></div>
                                    <?php } else { ?>
                                    <div class="comment-text-box"><?=Confuscator($row['noidung']);?></div>
                                    <?php } ?>
                                    <span class="comment-ua" style="color: yellow;">Vị trí IP：<?=$row['vitri'];?></span>
                                    <?php if (strtolower($role) == 'admin') { ?>
                                    <div class="foot">
                                        <div class="list">
                                            <div class="item" id="comment-123">
                                                <u style="font-size:14px;font-weight: 700;"><a
                                                        href="admin/sua_comment.php?id=<?= $row['comment_id']; ?>"
                                                        target="_blank">
                                                        Sửa bình luận</a></u>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
            </ol>
            <?php
    }
    if ($total_comments > 4) {
        $num_displayed_pages = min($total_pages, 3);
    
        echo '<ol class="page-navigator">';
        for ($page = 1; $page <= $num_displayed_pages; $page++) {
            echo '<li' . ($current_page == $page ? ' class="current"' : '') . '><a href="?comment-page=' . $page . '">' . $page . '</a></li>';
        }
    
        if ($num_displayed_pages >= 3 && $current_page < $total_pages) {
            echo '<li class="next"><a href="?comment-page=' . ($current_page + 1) . '">Trang tiếp »</a></li>';
        } elseif ($current_page > 1) {
            echo '<li class="next"><a href="?comment-page=' . ($current_page - 1) . '">⮐ Trang kế</a></li>';
        }
    
        echo '</ol>';
    }
} else {
?>
            <div class="dv">💖<span id="typed" style="font-weight:800;background: -webkit-linear-gradient(left, white, #00f);
                    background: -o-linear-gradient(right, red, #00f);
                    background: -moz-linear-gradient(right, red, #00f);
                    background: linear-gradient(to right, red, #00f);
                    -webkit-background-clip: text;
                    background-clip: text;
                    -webkit-text-fill-color: transparent;">Chưa có mình luận nào</span>
            </div>
            <?php }?>
            <h5 class="title-normal text-center" id="respond_com"><i class="fa fa-commenting"></i> Bình Luận</h5>
            <?php if (isset($_SESSION['taikhoan'])) { ?>
            <div class="name ps-3">
                <span>Xin chào, <?=$hovaten?></span>
                <div class="stats">
                    <a href="admin/logout.php">[
                        Đăng xuất » ]</a>
                </div>
            </div>
            <form method="post" id="comment-form" role="form" class="comment-form">
                <div class="form-group">
                    <input type="hidden" name="taikhoan" value="<?=$taikhoan?>" id="taikhoan" disabled>
                    <input type="hidden" name="tichxanh" value='<?=$verify_tick?>' id="tichxanh" disabled>
                    <input type="hidden" name="role" value="<?=$role?>" id="role" disabled>
                    <input type="hidden" name="hovaten" id="hovaten" value="<?=$hovaten?>" disabled>
                </div>
                <div class="form-group">
                    <textarea rows="3" cols="50" name="noidung" id="noidung" style="margin:16px auto !important;"
                        class="form-control OwO-textarea cmt-input"
                        placeholder="Hãy chúc phúc cho tình yêu 2 người này tốt đẹp..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="binhluan" class="float-right btn btn-outline-danger"
                        style="position: float-right;">Bình
                        Luận</button>
                </div>
            </form>
            <?php
} else {
    ?>
            <div class="name ps-3">
                <h6>Bình luận với tư cách là khách</h6>
            </div>
            <form method="post" id="comment-form" role="form" class="comment-form">
                <div class="form-group">
                    <?php
    if ($users_ip_cmt === false) {
      //  echo "Lỗi truy vấn: " . $thanhdieudb->error;
    } else { 
        $num_rows = $users_ip_cmt->num_rows;
        if ($num_rows > 0) {
            $row = $users_ip_cmt->fetch_assoc();
            if (!empty($row["ip"])) {
                ?>
                    <div class="name ps-3">
                        <div class="stats"><a href="javascript:void();">[ Xin Chào: <?=$row["hovaten"]?> ]</a>
                        </div>
                    </div>
                    <input type="hidden" name="taikhoan" value="<?=$row["taikhoan"]?>" id="taikhoan">
                    <input type="hidden" name="role" value="<?=$row["role"]?>" id="role">
                    <input type="hidden" name="hovaten" id="hovaten" value="<?=$row["hovaten"]?>"
                        style="margin:16px auto !important;" class="form-control cmt-input"
                        placeholder="Tên hiển thị (bắt buộc)">
                    <input type="hidden" name="avatar" id="avatar" value="<?=$row["avatar"]?>"
                        style="margin:16px auto !important;" class="form-control cmt-input"
                        placeholder="Link ảnh đại diện">
                    <?php
            }
        } else {
            ?>
                    <input type="hidden" name="taikhoan" value="<?=$taikhoan?>" id="taikhoan">
                    <input type="hidden" name="role" value="<?=$role?>" id="role">
                    <input type="text" name="hovaten" id="hovaten" style="margin:16px auto !important;"
                        class="form-control cmt-input" placeholder="Tên hiển thị (bắt buộc)" required>
                    <input type="text" name="avatar" id="avatar" style="margin:16px auto !important;"
                        class="form-control cmt-input" placeholder="Link ảnh đại diện">
                    <?php
        }
    }
    ?>
                </div>
                <div class="form-group">
                    <textarea rows="3" cols="50" name="noidung" id="noidung" style="margin:16px auto !important;"
                        class="form-control OwO-textarea cmt-input"
                        placeholder="Hãy chúc phúc cho tình yêu 2 người này tốt đẹp..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="binhluan" class="float-right btn btn-outline-danger"
                        style="position: float-right;">Bình
                        Luận</button>
                </div>
            </form>
            <?php } } else { ?>
            <div class="card">
                <div class="back"></div>
                <div class="front">
                    <div class="cover-shape-small">
                        <span class="wus-font">Hiện admin đã khóa phần bình luận, bạn đọc sách đỡ nha 🥹</span>
                        <div class="cake">
                            <div class="velas">
                                <div class="fuego"></div>
                                <div class="fuego"></div>
                                <div class="fuego"></div>
                                <div class="fuego"></div>
                                <div class="fuego"></div>
                            </div>
                            <div class="cobertura"></div>
                            <div class="bizcocho"></div>
                        </div>
                    </div>
                </div>
                <div class="text-container">
                    <p id="head">
                        <img src="https://i.imgur.com/XNnyRhd.gif" class="avatar-mini">
                    </p>
                    <p>
                        Sau này, chỉ có làm,chịu khó , cần cù thì bù siêng năng,
                        chỉ có làm thì mới có ăn.
                        Những cái loại không làm mà đòi có ăn thì ăn đầu buồi nhớ, ăn cức thế cho nó dễ
                    </p>
                    <p class="bottom">
                        Trích <br>
                        Huấn Rô sè <br>
                        19/12/2023
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
    <div id="comment-now"></div>
    <div class="p-5 text-center ">
        <style>
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -999;
            opacity: 1;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center 0;
            background-image: url(https://4kwallpapers.com/images/walls/thumbs_3t/13635.png);
        }
        </style>
        <div id="respond-page" class="respond list-content mx-auto mt-5">
            <footer class="custom-footer">

            </footer>
            <div id="tokuda__">
                <p class="h6"></p><a style="color:#00e5ff;text-shadow: 0 0 10px white;">ID Ray: <?=$RayID?></a></p>
                <a style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img
                        src="<?=Directory('img');?>re.png" style="float:left;" />
                    <p
                        style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#e1ff00;text-shadow: 0 0 10px white;">
                        Bảo
                        Lưu
                        Mọi Quyền</p>
                </a><br>
                <a href="https://thanhdieu.com" style="color:#F00"><b>Copyright © 2023 By <?=$author?></b><br></a>
                <span style="color:#00ffb3;" id="target-ping"></span>
                <!--<span id="target-fps"></span>-->
                <br>
                <div class="d-flex justify-content-center">
                    <a name="bottom" href="" target="_blank">
                        <div class="heart2">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <script>
        var startTime = new Date().getTime();
        window.addEventListener("load", function() {
            var e = new Date().getTime(),
                n = document.getElementById("target-ping"),
                t = document.createElement("div");
            t.innerHTML = "Ping: " + (e - startTime) + "ms", n.appendChild(t), hideLoadingAnimation()
        }), document.addEventListener("DOMContentLoaded", function() {}), window.addEventListener("offline",
            function() {
                Dreamer.error("Mạng bất thường", 3e3, !0)
            });
        let fpsCounter = {
            startTime: 0,
            frameCount: 0,
            displayElement: document.getElementById("target-fps"),
            update: function() {
                this.frameCount++;
                let t = performance.now(),
                    e = (t - this.startTime) / 1e3;
                if (e > 1) {
                    let s = Math.round(this.frameCount / e);
                    this.displayElement.textContent = `FPS: ${s}`, this.startTime = t, this.frameCount = 0
                }
                requestAnimationFrame(() => this.update())
            },
            start: function() {
                this.startTime = performance.now(), this.update()
            }
        };
        fpsCounter.start();
        </script>
        <script src="<?=Directory('js');?>base_fish.min.js"></script>
        <!--   <div id="j-fish-skip" style=" position: relative;height: 153px;width: auto;"></div>-->
        <div id="audio" class="cywl">
        </div>
        <div class="corner-icon-container">
            <div class="corner-icon corner-icon-github">
                <a class="" href="//github.com/wusthanhdieu" target="_blank" data-toggle="tooltip" data-placement="left"
                    data-original-title="Github">
                    <img height="23" width="23" src="<?=Directory('img');?>github-color-td.svg" alt="My Github">
                </a>
            </div>
            <div class="corner-icon corner-icon-qrcode">
                <a class="" data-toggle="tooltip" data-placement="left" data-original-title="Mã qr của trang này">
                    <img height="24" width="24" src="<?=Directory('img');?>qr-code-td.svg" alt="QR Code">
                </a>
            </div>
            <div class="corner-icon corner-icon-music">
                <a class="" data-toggle="tooltip" data-placement="left" data-original-title="Phát nhạc">
                    <img id="img_music" height="20" width="20" src="<?=Directory('img');?>icon-music-td.png"
                        alt="Phát nhạc">
                    <div id="div_btn_inner" style="display: none;"></div>
                </a>
            </div>
            <div class="corner-icon corner-icon-scroll" id="scrollToTop">
                <a class="" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-angle-up td-scroll"></i>
                </a>
            </div>
        </div>
        <?php if ($modal_on_off == 'on'): ?>
        <div class="modal fade" id="start_modal_wus" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content td-modal">
                    <div class="modal-header">
                        <strong class="modal-title fs-5 td-title-modal"><?=$modal_title?></strong>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-content">
                        <img style="width:495px;height:2px;margin-top:-2px;"
                            src="https://camo.githubusercontent.com/82291b0fe831bfc6781e07fc5090cbd0a8b912bb8b8d4fec0696c881834f81ac/68747470733a2f2f70726f626f742e6d656469612f394575424971676170492e676966">
                        <div class="txt-modal">
                            <span><?=$modal_content?></span>
                            <img src="<?=Directory('img')?>1646901978_5905.gif"
                                style="width: 100px;height:auto;margin-top:10px;" alt="">
                        </div>
                        <img style="width:495px; height:2px; margin-bottom:-3px;"
                            src="https://camo.githubusercontent.com/82291b0fe831bfc6781e07fc5090cbd0a8b912bb8b8d4fec0696c881834f81ac/68747470733a2f2f70726f626f742e6d656469612f394575424971676170492e676966">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning td-button-modal" onclick="home.play();"
                            data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        $(document).ready(function() {
            $("#start_modal_wus").modal("show");
        });
        </script>
        <?php endif; ?>
        <script>
        function MusicLoad() {
            var n = ['<?=$music_url_string?>', ],
                t = [],
                e = new Audio,
                i = !1,
                l = document.getElementById("img_music"),
                o = document.getElementById("div_btn_inner");

            function s() {
                var i;
                i = function e() {
                    var i;
                    t.length === n.length && (t = []);
                    do i = Math.floor(Math.random() * n.length); while (t.includes(i));
                    return t.push(i), i
                }(), e.src = n[i], e.load(), Dreamer.success("Bắt đầu ph\xe1t nhạc")
            }
            var a = !1;
            e.addEventListener("error", function n() {
                Dreamer.error("Đ\xe3 xảy ra lỗi khi ph\xe1t nhạc!", 3e3, !0), l.style.animation = "none",
                    i = !1, a = !0
            }), l.addEventListener("click", function() {
                i ? (e.pause(), l.style.animation = "none", o.textContent = "", o.style.display =
                    "block", setTimeout(function() {
                        Dreamer.error("Tạm dừng nghe nhạc!")
                        o.style.display = "none"
                    }, 1e3)) : (("" === e.src || a) && (s(), a = !1), e.play(), l.style.animation =
                    "music_play_rotate 1s linear infinite", o.textContent = "", o.style
                    .display = "block", setTimeout(function() {
                        o.style.display = "none"
                    }, 1e3)), i = !i
            }), e.addEventListener("ended", function() {
                s(), e.play()
            })
        }
        </script>
        <script>
        function loadScript(n, t) {
            var e = document.createElement("script");
            e.type = "text/javascript", e.src = n, e.onload = t, document.head.appendChild(e)
        }
        window.showSiteRuntime = function() {
            let [n, t, e] = "<?=$ngayhenho?>".split("-"), a = new Date(`${e}-${t}-${n}`);
            var o = $("#site_runtime");
            o && (window.setTimeout("showSiteRuntime()", 1e3), D = Math.floor(d = (T = (now = new Date)
                .getTime() - a.getTime()) / (i = 864e5)), H = Math.floor(h = (d - D) * 24), M = Math.floor(
                m = (h - H) * 60), S = Math.floor(s = (m - M) * 60), o.html(
                '<span class="bigfontNum">' + D + '</span> Ng\xe0y <span class="bigfontNum">' + H +
                '</span> Giờ <span class="bigfontNum">' + M +
                '</span> Ph\xfat <span class="bigfontNum">' + S + "</span> Gi\xe2y"))
        }, showSiteRuntime()
        </script>
        <?php if ($effect_fall == 'tuyetroi'): ?>
        <canvas id="Snow"></canvas>
        <?php endif; ?>
        <?php if ($effect_fall == 'traitimroi'): ?>
        <script src="https://cdn.bootcss.com/JQuery-Snowfall/1.7.4/snowfall.jquery.min.js"></script>
        <script>
        $(document).snowfall({
            flakeCount: 50,
            maxSpeed: 10,
            minSpeed: 1
        });
        </script>
        <?php endif; ?>
        <script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js">
        </script>
        <script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/nprogress/0.2.0/nprogress.min.js"></script>
        <script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
        <script src="<?=Directory('js');?>main.js<?=$Cache?>"></script>
        <script src="assets/js/custom.js<?=$Cache?>"></script>
        <script>
        var scrollToTopButton = document.getElementById("scrollToTop");

        function checkScrollPosition() {
            document.documentElement.scrollTop > 20 ? scrollToTopButton.style.display = "flex" : scrollToTopButton.style
                .display = "none"
        }
        checkScrollPosition(), window.addEventListener("scroll", checkScrollPosition), scrollToTopButton
            .addEventListener("click", (function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            }));
        var scrollToComment = document.getElementById("scrollToComment"),
            phanbinhluan = document.getElementById("phanbinhluan");
        scrollToComment.addEventListener("click", (function() {
            phanbinhluan.scrollIntoView({
                behavior: "smooth"
            })
        }));
        console.clear();
        </script>
        <?php if ($effect_fall == 'hoaroi'): ?>
        <script src="<?=Directory('js')?>sakura-fall.js"></script>
        <?php endif ?>
        <div id="bottom-img"></div>
        <div class="anime-cb">
            <img src="<?=Directory('img');?>lemon.gif" alt="Lemon Animation">
        </div>
        <script>
        $(document).ready(function() {
            if (window.location.href.includes('#comment-now')) {
                var commentNowElement = $('#comment-now');
                if (commentNowElement.length) {
                    $('html, body').animate({
                        scrollTop: commentNowElement.offset().top
                    }, 'slow');
                }
            }
        });
        </script>
</body>

</html>