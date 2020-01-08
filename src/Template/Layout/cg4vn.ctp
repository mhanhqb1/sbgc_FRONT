<?php
$webTitle = 'cg4vn.net';
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$version = time();
$_favicon = !empty($_settings['company']['favicon']) ? $_settings['company']['favicon'] : $BASE_URL.'/favicon.ico';
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <link rel="shortcut icon" href="<?php echo $_favicon;?>" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">
        
        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url;?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />
       
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />
        
        <meta name="generator" content="<?php echo $webTitle; ?>" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Shadows+Into+Light%7CRoboto%3A400%2C300%2C500%2C700&amp;ver=1.0.0" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/default.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/widget.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/thumbsrate.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/author.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/animate.css?ver=5.3.2" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/responsive.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo $BASE_URL;?>/css/custom.css?<?php echo $version; ?>" type="text/css" media="all">
        
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery.js"></script>
        
        <?php echo !empty($_settings['company']['script_header']) ? $_settings['company']['script_header'] : '';?>
    </head>

    <body id="<?php echo $controller;?>">
        <?php echo !empty($_settings['company']['script_body']) ? $_settings['company']['script_body'] : '';?>
        <?php echo $this->element('Layout/header');?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('Layout/footer');?>
        
        <script type="text/javascript">
            /* <![CDATA[ */
            var wpt = {"ajax_url": "<?php echo $BASE_URL;?>/ajax/post"};
            /* ]]> */
        </script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var thumbs_rating_ajax = {"ajax_url": "<?php echo $BASE_URL;?>/ajax/post"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/jquery_main.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/wp_tab.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/thumb_rate.js"></script>
        <script type="text/javascript" src="<?php echo $BASE_URL;?>/js/custom.js?<?php echo $version;?>"></script>
        <?php echo !empty($_settings['company']['script_footer']) ? $_settings['company']['script_footer'] : '';?>
    </body>
</html>
