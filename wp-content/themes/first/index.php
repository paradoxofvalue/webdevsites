<?php
    get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
    <article id="main">
        <header>
            <h2><?php the_title(); ?></h2>
        </header>
        <section class="wrapper style5">
            <div class="inner">
                <?php the_content(); ?>
            </div>
        </section>
    </article>
<?php
    endwhile;
    endif;
get_footer();
?>