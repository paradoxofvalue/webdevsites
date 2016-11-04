<!DOCTYPE HTML>
<html>

<head>
    <meta name="robots" content="noindex,nofollow">
    <title><? bloginfo('name'); ?></title>    
    <meta charset="<? bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!--[if lte IE 8]><script src="<?echo THEME_DIR;?>/assets/js/ie/html5shiv.js"></script><![endif]-->   
    <!--[if lte IE 9]><link rel="stylesheet" href="<?echo THEME_DIR;?>/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="<?echo THEME_DIR;?>/assets/css/ie8.css" /><![endif]-->

    <? wp_head(); ?>

</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Header -->
        <header id="header" class="alt">
            <a href="<?bloginfo('url');?>" class="logo"><strong><? bloginfo('name'); ?></strong> <span>development</span></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>
        <!-- Menu -->
        <nav id="menu">
            <?
                wp_nav_menu(
                    [
                        'menu' => 'header_menu',
                        'container' => '',

                    ]
                );
            ?>
        </nav>
