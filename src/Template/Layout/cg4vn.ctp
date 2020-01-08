<?php
$webTitle = 'cg4vn.net';
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$version = time();
$_favicon = !empty($_settings['company']['favicon']) ? $_settings['company']['favicon'] : $BASE_URL . '/favicon.ico';
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <link rel="shortcut icon" href="<?php echo $_favicon; ?>" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">

        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url; ?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />

        <meta name="generator" content="<?php echo $webTitle; ?>" />

        <!-- Google fonts (https://www.google.com/fonts) -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet"> <!-- Global font -->

        <!-- Bootstrap CSS (http://getbootstrap.com) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/bootstrap.min.css"> <!-- bootstrap CSS (http://getbootstrap.com) -->

        <!-- Libs and Plugins CSS -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/animsition.min.css"> <!-- Animsition CSS (http://git.blivesta.com/animsition/) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/owl.carousel.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/owl.theme.default.min.css"> <!-- Owl Carousel CSS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/jquery.mb.YTPlayer.min.css"> <!-- YTPlayer CSS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/animate.min.css"> <!-- Animate libs CSS (http://daneden.me/animate) -->

        <!-- Template master CSS -->
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/helper.css">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/theme.css">

        <!-- Template dark style CSS (just uncomment line below to enable dark style) -->
        <!-- <link rel="stylesheet" href="assets/css/dark-style.css"> -->

        <!-- Template round style CSS (just uncomment line below to enable round style) -->
        <!-- <link rel="stylesheet" href="assets/css/round-style.css"> -->

        <!-- Template color skins CSS (just uncomment line below to enable color skin. One line at a time!) -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-red.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-green.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-blue.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-orange.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-purple.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-pink.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/color-skins/skin-brown.css"> -->

        <!-- Template RTL mode CSS (just uncomment all 3 lines below to enable right to left mode) -->
        <!-- <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap-rtl/bootstrap-rtl.min.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/rtl/theme-rtl.css"> -->
        <!-- <link rel="stylesheet" href="assets/css/rtl/helper-rtl.css"> -->


        <!-- FOR DEMO SITE ONLY! -->
<!--        <link rel="stylesheet" href="assets/demo-panel/css/demo-panel.css">
        <link rel="stylesheet" href="assets/css/dark-style.css">
        <link rel="stylesheet" href="assets/css/round-style.css">-->

        <?php echo!empty($_settings['company']['script_header']) ? $_settings['company']['script_header'] : ''; ?>
    </head>

    <body id="<?php echo $controller; ?>">
        <?php echo!empty($_settings['company']['script_body']) ? $_settings['company']['script_body'] : ''; ?>
        <!-- =================
                //// Begin header //// 
                ======================
                * Use class "header-show-hide-on-scroll" to hide header on scroll down and show on scroll up.
                * Use class "header-fixed-top" to set header to fixed position.
                * Use class "header-transparent" to set header to transparent.
                * Use class "menu-align-left" to align menu to left.
                * Use class "menu-align-right" to align menu to right.
                * Use class "menu-align-center" to align menu to center (do not use with header classes!).
        -->
        <?php echo $this->element('Layout/header');?>
        <!-- End header -->


        <!-- *************************************
        *********** Begin body content *********** 
        ************************************** -->
        <div id="body-content">

            <!-- =================================
            ///// Begin gallery list section /////
            ================================== -->
            <?php echo $this->fetch('content');?>
            <!-- End gallery list section -->


            <!-- ===========================
            ///// Begin footer section /////
            ================================
            * Use class "footer-dark" to enable dark footer.
            * Use class "no-margin-top" if needed. 
            -->
            <?php echo $this->element('Layout/footer');?>
            <!-- End footer section -->

        </div>
        <!-- End body content -->





        <!-- ====================
        ///// Scripts below /////
        ===================== -->

        <!-- Core JS -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->
        <script src="<?php echo $BASE_URL;?>/js/bootstrap.min.js"></script> <!-- bootstrap JS (http://getbootstrap.com) -->

        <!-- Libs and Plugins JS -->
        <script src="<?php echo $BASE_URL;?>/js/animsition.min.js"></script> <!-- Animsition JS (http://git.blivesta.com/animsition/) -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.easing.min.js"></script> <!-- Easing JS (http://gsgd.co.uk/sandbox/jquery/easing/) -->
        <script src="<?php echo $BASE_URL;?>/js/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
        <script src="<?php echo $BASE_URL;?>/js/imagesloaded.pkgd.min.js"></script> <!-- ImagesLoaded JS (https://github.com/desandro/imagesloaded) -->
        <script src="<?php echo $BASE_URL;?>/js/owl.carousel.min.js"></script> <!-- Owl Carousel JS (https://owlcarousel2.github.io/OwlCarousel2/) -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.mb.YTPlayer.min.js"></script> <!-- YTPlayer JS (more info: https://github.com/pupunzi/jquery.mb.YTPlayer) -->

        <script src="<?php echo $BASE_URL;?>/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->

        <!-- Theme master JS -->
        <script src="<?php echo $BASE_URL;?>/js/theme.js"></script>

        <!-- FOR DEMO SITE ONLY! JS -->
<!--        <script src="assets/demo-panel/js/demo-panel.js"></script>
        <script src="assets/demo-panel/js/styleswitch.js"></script>-->

        <?php echo!empty($_settings['company']['script_footer']) ? $_settings['company']['script_footer'] : ''; ?>
    </body>
</html>
