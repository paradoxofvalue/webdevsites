<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section id="page-breadcrumb">
        <div class="vertical-center sun">
            <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section class="col-xs-10 col-xs-offset-1" id="main">
        <?php the_content(); ?>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>