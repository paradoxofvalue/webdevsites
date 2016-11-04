<? get_header(); ?>

    <!-- Main -->
    <div id="main" class="alt">
<?


    while ( have_posts() ) : the_post();



?>
        <!-- One -->
        <section id="one">
            <div class="inner">
                <header class="major">
                    <h1><? the_title(); ?></h1>
                </header>
                <span class="image main"><img src="images/pic11.jpg" alt=""/></span>
                <? the_content(); ?>
            </div>
        </section>

    </div>
        <?php
    endwhile;

// Reset Post Data
wp_reset_postdata();
?>
<? get_footer(); ?>