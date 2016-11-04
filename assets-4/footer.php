<!-- Contact -->
<section id="contact">
    <div class="inner">
        <section>
            <h3>Services</h3>
            <?php
            wp_nav_menu(
                [
                    'menu' => 'footer_menu',
                    'container' => '',

                ]
            );
            ?>

            <h3>About us</h3>
            <?php
            wp_nav_menu(
                [
                    'menu' => 'footer_menu1',
                    'container' => '',

                ]
            );
            ?>
        </section>
        <section class="split">
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-envelope"></span>
                    <h3>Email</h3>
                    <a href="#"><?php echo get_theme_mod('email'); ?></a>
                </div>
                <div class="contact-method">
                    <span class="icon alt fa-phone"></span>
                    <h3>Phone</h3>
                    <span><?php echo get_theme_mod('phone'); ?></span>
                </div>
            </section>
            <section>
                <div class="contact-method">
                    <span class="icon alt fa-home"></span>
                    <h3>Address</h3>
                    <span><?php echo get_theme_mod('address'); ?><br/>
                        <?php echo get_theme_mod('town'); ?>, <?php echo get_theme_mod('state'); ?> <?php echo get_theme_mod('zip_code'); ?></span>
                </div>
            </section>
        </section>
    </div>
</section>
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <ul class="icons">
<!--            <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>-->
            <li><a href="<?php echo get_theme_mod('google_plus'); ?>" class="icon alt fa-google"><span class="label">Facebook</span></a></li>
            <li><a href="<?php echo get_theme_mod('yelp'); ?>" class="icon alt fa-yelp"><span class="label">Instagram</span></a></li>
<!--            <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>-->
<!--            <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
        </ul>
        <ul class="copyright">
            <li>&copy; Untitled</li>
            <li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>
</div>
<!-- Scripts -->
<script src="<? echo THEME_DIR; ?>/assets/js/jquery.min.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/jquery.scrolly.min.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/jquery.scrollex.min.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/skel.min.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/util.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/owl.carousel.min.js"></script>
<script src="<? echo THEME_DIR; ?>/assets/js/main.js"></script>
<!--[if lte IE 8]>
<script src="assets/js/ie/respond.min.js"></script><![endif]-->
</body>

</html>