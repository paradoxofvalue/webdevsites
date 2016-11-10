<?php get_header(); ?>
<section id="error-page">
    <div class="error-page-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <div class="bg-404">
                            <div class="error-image">
                                <img class="img-responsive" src="<?php echo THEME_DIR; ?>/images/404.png" alt="">
                            </div>
                        </div>
                        <h2>PAGE NOT FOUND</h2>
                        <p>The page you are looking for might have been removed, had its name changed.</p>
                        <a href="<?php echo home_url();?>" class="btn btn-error">RETURN TO THE HOMEPAGE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>