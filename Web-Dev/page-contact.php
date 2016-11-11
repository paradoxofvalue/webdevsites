<?php /* Template Name: Example Template */ ?>
<?php get_header(); ?>
<!--/#header-->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="action">
                    <div class="col-sm-12">
                        <h1 class="title"><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#action-->

<section id="map-section">
    <div class="container">
        <div id="gmap"></div>
        <div class="contact-info">
            <h2>Contacts</h2>
            <address>
                E-mail: <a href="mailto:<?php echo get_theme_mod('mail'); ?>"><?php echo get_theme_mod('mail'); ?></a> <br>
                Phone: <?php echo get_theme_mod('phone'); ?>
            </address>

            <h2>Address</h2>
            <address>
                <?php echo get_theme_mod('address'); ?>, <br>
                <?php echo get_theme_mod('town'); ?>, <br>
                <?php echo get_theme_mod('state'); ?>, <?php echo get_theme_mod('zip_code'); ?> <br>
            </address>
        </div>
    </div>
</section> <!--/#map-section-->
<?php endwhile; endif; ?>
<input type="hidden" value="<?php echo get_theme_mod('lat'); ?>" id="lat">
<input type="hidden" value="<?php echo get_theme_mod('lng'); ?>" id="lng">
<?php get_footer(); ?>
