<!DOCTYPE HTML>
<html>
<head>
    <meta name="robots" content="noindex,nofollow"/>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="<?php echo THEME_DIR; ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
    <?php wp_head(); ?>
</head>
<body class="landing">

<!-- Page Wrapper -->
<div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <h1><a href="index.html"><?php bloginfo('name'); ?></a></h1>
        <nav id="nav">
            <ul>
                <li class="special">
                    <a href="#menu" class="menuToggle"><span>Menu</span></a>
                    <div id="menu">
                        <?php wp_nav_menu(array('menu' => 'main_menu',
                            'container' => ''));
                        ?>
                    </div>
                </li>
            </ul>
        </nav>
    </header>