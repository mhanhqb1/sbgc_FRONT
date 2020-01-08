<?php
$version = time();
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Maclife</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Shadows+Into+Light%7CRoboto%3A400%2C300%2C500%2C700&amp;ver=1.0.0" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css?<?php echo $version; ?>" type="text/css" media="all">
        <link rel="stylesheet" href="css/default.css?<?php echo $version; ?>" type="text/css" media="all">
        <link rel="stylesheet" href="css/widget.css?<?php echo $version; ?>" type="text/css" media="all">
        <link rel="stylesheet" href="css/thumbsrate.css?<?php echo $version; ?>" type="text/css" media="all">
        <link rel="stylesheet" href="css/author.css?<?php echo $version; ?>" type="text/css" media="all">


        <link rel="stylesheet" href="css/animate.css?ver=5.3.2" type="text/css" media="all">

        <link rel="stylesheet" href="css/responsive.css?<?php echo $version; ?>" type="text/css" media="all">
        <link rel="stylesheet" href="css/custom.css?<?php echo $version; ?>" type="text/css" media="all">
        
        <script type="text/javascript" src="https://maclife.vn/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
    </head>
    <body>
        <?php
        require_once 'header.php';
        require_once 'body.php';
//        require_once 'detail.php';
        require_once 'footer.php';
        ?>
        <script type="text/javascript">
            /* <![CDATA[ */
            var wpt = {"ajax_url": "http://front.maclife.localhost/html/ajax.php"};
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var thumbs_rating_ajax = {"ajax_url": "http://front.maclife.localhost/html/ajax.php", "nonce": "97f4068092"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="https://maclife.vn/wp-content/themes/maclife/js/jquery.main.js?ver=5.3.2"></script>
        <script type="text/javascript" src="https://maclife.vn/wp-content/plugins/wp-tab-widget-pro.1/js/wp-tab-widget.js?ver=5.3.2"></script>
        <script type="text/javascript" src="https://maclife.vn/wp-content/plugins/thumbs-rating/js/general.js?ver=4.0.1"></script>
        <script type="text/javascript" src="js/custom.js?<?php echo $version;?>"></script>
    </body>
</html>

