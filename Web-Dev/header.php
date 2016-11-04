<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<? bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<? wp_title(); ?>">
    <meta name="author" content="<? bloginfo('name'); ?>">
    <title><? bloginfo('name'); ?> | <? wp_title(); ?></title>

    <!--[if lt IE 9]>
	    <script src="<? echo THEME_DIR; ?>/js/html5shiv.js"></script>
	    <script src="<? echo THEME_DIR; ?>/js/respond.min.js"></script>
    <![endif]-->
    <? wp_head(); ?>
</head><!--/head-->

<body>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href="<?php echo get_theme_mod('yelp'); ?>"><i class="fa fa-yelp"></i></a></li>
                            <li><a href="<?php echo get_theme_mod('google_plus'); ?>"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    	<h1><img src="<? echo THEME_DIR; ?>/images/logo.png" alt="logo"></h1>
                    </a>
                    
                </div>
                <? wp_nav_menu( array( 'menu' => 'main_menu',
                                        'menu_class' => 'nav navbar-nav navbar-right',
                                        'container_class' => 'collapse navbar-collapse',
                                        'container' => 'nav' ) ); ?>
            </div>
        </div>
    </header>