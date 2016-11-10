<? get_header(); ?>
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider">
                    <div class="slide-text">
                        <h1><?php echo bloginfo('name'); ?></h1>
                        <p><?php echo bloginfo('description'); ?></p>
                        <a href="#features" class="btn btn-common">LEARN MORE</a>
                    </div>
                    <img src="<? echo THEME_DIR; ?>/images/home/slider/hill.png" class="slider-hill" alt="slider image">
                    <img src="<? echo THEME_DIR; ?>/images/home/slider/house.png" class="slider-house" alt="slider image">
                    <img src="<? echo THEME_DIR; ?>/images/home/slider/sun.png" class="slider-sun" alt="slider image">
                    <img src="<? echo THEME_DIR; ?>/images/home/slider/birds1.png" class="slider-birds1" alt="slider image">
                    <img src="<? echo THEME_DIR; ?>/images/home/slider/birds2.png" class="slider-birds2" alt="slider image">
                </div>
            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->

    <section id="services">
        <div class="container">
            <div class="row">
                <? dynamic_sidebar('services'); ?>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="action take-tour">
                        <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title"><?php echo bloginfo('name'); ?></h1>
                            <p>Your best friend and parthner.</p>
                        </div>
                        <div class="col-sm-5 text-center wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                            <div class="tour-button">
                                <a href="#" class="btn btn-common">TAKE THE TOUR</a>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
<?php
if ( have_posts() ) {
    $i = 1;
    while ( have_posts() ) {
        $p = the_post();
        if(!in_category('testimonials', $p)) {
            if($i % 2 == 1 ) {
                echo '<div class="single-features">
                                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="'. get_the_post_thumbnail_url() .'" class="img-responsive" alt="">
                                    
                                </div>
                                <div class="col-sm-6 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <h2>'. get_the_title() .'</h2>
                                    <p>'. wp_strip_all_tags(get_the_content()) .'</p>
                                </div>
                            </div>';
            }else {
                echo '<div class="single-features">
                                <div class="col-sm-6 col-sm-offset-1 align-right wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <h2>'. get_the_title() .'</h2>
                                    <p>'. wp_strip_all_tags(get_the_content()) .'</p>
                                </div>
                                <div class="col-sm-5 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
                                    <img src="'. get_the_post_thumbnail_url() .'" class="img-responsive" alt="">
                                </div>
                            </div>
                    </div>
                </div>';
            }
            $i++;
        }
    }
}
?>
    </section>
     <!--/#features-->

    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clients text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <p><img src="<? echo THEME_DIR; ?>/images/home/clients.png" class="img-responsive" alt=""></p>
                        <h1 class="title">Happy Clients</h1>
                        <p>OUR BEST WEBSITE DESIGNS</p>
                    </div>
                    <div class="clients-logo wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <?php dynamic_sidebar('clients'); ?>
                    </div>
                </div>
            </div>
        </div>
     </section>
<? get_footer(); ?>