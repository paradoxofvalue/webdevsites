    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonials</h2>
                        <?php

                        $the_query = new WP_Query( array('category_name' => 'testimonials') );


                        if ( $the_query->have_posts() ) {

                            while ( $the_query->have_posts() ) {
                                $the_query->the_post();
                                echo '<div class="media">
                                        <div class="pull-left">
                                            <a href="'. get_permalink() .'">'. the_post_thumbnail(array(81, 81)) .'</a>
                                        </div>
                                        <div class="media-body">
                                            <blockquote>'. wp_strip_all_tags(get_the_content()) .'</blockquote>
                                            <h3><a>-'. get_post_meta( get_the_ID(), 'author-meta', true) .'</a></h3>
                                        </div>
                                     </div>';
                            }

                            wp_reset_postdata();
                        }
                        ?>
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
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
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="form-control" required="required" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; <? bloginfo('name'); ?> 2016. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/lightbox.min.js"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/wow.min.js"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/main.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="<? echo THEME_DIR; ?>/js/gmaps.js"></script>
</body>
</html>