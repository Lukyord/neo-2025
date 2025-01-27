<?php
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_index = ($page == basename(dirname($_SERVER['PHP_SELF']), "/") || $page == 'index.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>NEO</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="NEO">
    <meta property="og:image" content="<?php echo $root; ?>assets/img/og.jpg">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $root; ?>assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $root; ?>assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $root; ?>assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $root; ?>assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo $root; ?>assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo $root; ?>assets/img/favicon/safari-pinned-tab.svg" color="#004F9E">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#FFFFFF">

    <!-- CSS:WP -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/navigation_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/blocks/gallery_style.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/_wp-css/plugins/contact-form-7/styles.css" type="text/css" media="all">
    <!-- CSS:LIBRARY -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/library/animate.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/plugin/liMarquee/liMarquee.css">
    <!-- CSS:CONFIG -->
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-rwd.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php echo $root; ?>assets/css/theme-wp.css?v=<?php echo time(); ?>">
    <!-- JS:LIBRARY -->
    <script src="<?php echo $root; ?>assets/js/library/modernizr-custom.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery-migrate-3.4.0.min.js"></script>
    <script src="<?php echo $root; ?>assets/js/library/jquery.easing.1.3.min.js"></script>

    <!-- web by ::* www.plaimanas.com -->
</head>

<body class="<?php echo (in_array($page, ['about.php', 'career.php', 'news-single.php', 'career-apply-form.php', "page.php"])) ? 'no-scrollbar' : ''; ?>">
    <div id="page" class="<?php if ($page == '404.php') {
                                echo 'error-page';
                            } ?>">

        <?php if ($page !== '404.php') { ?>

            <div id="header-height"></div>

            <header id="header">
                <div class="header-nav">

                    <div class="header-brand">
                        <a class="brand" href="<?php echo $root; ?>index.php">
                            <img class="logo-mini" src="<?php echo $root; ?>assets/img/logo.svg" alt="NEO">
                        </a>
                    </div>

                    <div class="header-menu-ctrl">
                        <a class="ctrl" href="javascript:;">
                            <span class="hamburger"><span class="bars">&nbsp;</span></span>
                        </a>
                    </div>

                    <div class="header-menu">
                        <div class="panel-overlay"></div>
                        <div class="panel">
                            <div class="panel-wrap">
                                <div class="panel-scroll">
                                    <div class="panel-inner">
                                        <div class="panel-header">
                                            <ul class="tools">
                                                <li class="tool" data-tool="language">
                                                    <?php include($root . "include/element-language.php"); ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="panel-body">
                                            <ul class="menu">
                                                <li><a href="<?php echo $root; ?>about.php">เกี่ยวกับนีโอ</a></li>
                                                <li><a href="<?php echo $root; ?>brand.php">แบรนด์</a></li>
                                                <li><a href="<?php echo $root; ?>new-products.php">ผลิตภัณฑ์ล่าสุด</a></li>
                                                <li><a href="<?php echo $root; ?>" target="_blank">การพัฒนาอย่างยั่งยืน</a></li>
                                                <li><a href="<?php echo $root; ?>" target="_blank">นักลงทุนสัมพันธ์</a></li>
                                                <li><a href="<?php echo $root; ?>news.php">ข่าวสารล่าสุด</a></li>
                                                <li><a href="<?php echo $root; ?>career.php">ร่วมงานกับเรา</a></li>
                                                <li><a href="<?php echo $root; ?>contact.php">ติดต่อเรา</a></li>
                                            </ul>
                                        </div>
                                        <div class="footer-links">
                                            <a href="<?php echo $root; ?>page.php">นโยบายความเป็นส่วนตัว</a>
                                            <a href="<?php echo $root; ?>page.php">ข้อกำหนดและเงื่อนไข</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="navigation" class="<?php if ($page_index) {
                                                    echo 'always';
                                                } ?>">
                        <?php include($root . "include/element-brand.php"); ?>
                    </div>
                </div>
            </header>

        <?php } ?>