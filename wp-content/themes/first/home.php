<?php get_header(); ?>

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
            <h2><?php bloginfo('name'); ?></h2>
            <p>    
                <?php bloginfo('description'); ?>
            </p>
        </div>
        <a href="#one" class="more scrolly">See More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper style1 special">
        <div class="inner">
            <header class="major">
                <h2>SERVICES</h2>
                <p>We develop profitable ecommerce websites for the sake of your KPIs and conversion rates based on CMS.<br/>
                    We offer responsive website development which will make your life easier and cheaper.<br/>
                    You will enjoy Android and IOS app development services provided by our company. </p>
            </header>
            <ul class="icons major services">
                <li><a href="<?php echo get_theme_mod('ecommerce'); ?>"><span class="icon fa-cogs major style1"><span class="label">Lorem</span></span><br/>E-COMMERCE</a></li>
                <li><a href="<?php echo get_theme_mod('websitedevelopment'); ?>"><span class="icon fa-desktop major style2"><span class="label">Ipsum</span></span><br/>WEB DEVELOPMENT</a></li>
                <li><a href="<?php echo get_theme_mod('mobileappdevelopment'); ?>"><span class="icon fa-mobile major style3"><span class="label">Dolor</span></span><br/>MOBILE APP DEVELOPMENT</a></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <header class="major">
            <h2 class="portfolio-main-title">OUR WORKS</h2>
        </header>
        <p class="portfolio-main-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aliquam architecto eaque enim inventore laboriosam, magni nisi placeat quam reprehenderit sed sequi sunt temporibus! Architecto culpa nesciunt quae ratione sequi.</p>
        <ul class="features">
            <?php
                $args = array(
                    'category_name' => 'portfolio',
                    'posts_per_page' => '3');
                $my_posts = get_posts($args);
                foreach( $my_posts as $post )
                {
                    setup_postdata($post);

                    echo '<li class="icon portfolio-preview">
                              <a href="' . get_the_permalink() . '"> 
                                  <h3 class="portfolio-title">' . get_the_title() . '</h3>
                                  ' . get_the_content() . '
                              </a>
                          </li>';
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="inner">
            <header class="major">
                <h2>ESSENTIAL ADVANTAGES OF White Web <br/><span class="more_character">=</span><br/> OUR 6 TIPS TO BE A GOOD PARTNER
                    sed condimentum</h2>
                <p>Want to check our professionalism? Contact our manager and order the website development. We promise you that immediately after its launching, you already will be able to make sure we are the best website design company.</p>
            </header>
            <ul class="features">
                <?php
                    global $post;
                    $args = array(
                        'category_name' => 'main_link',
                        'posts_per_page' => '6');
                    $my_posts = get_posts($args);
                    foreach( $my_posts as $post )
                    {
                        setup_postdata($post);
                        echo '<li class="icon fa-' . get_post_meta( get_the_ID(), 'meta-box-text', true) . '">
                                <h3>' . get_the_title() . '</h3>
                                <p>' . get_the_content() . '</p>
                              </li>';
                    }

                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper alt style2">
        <h2>CLients' testimonials</h2>
        <ul class="testimonials">
            <?php
                global $post;
                $args = array(
                    'category_name' => 'testimonials',
                    'posts_per_page' => '3');
                $my_posts = get_posts($args);
                foreach( $my_posts as $post )
                {
                    setup_postdata($post);
                    echo '<li>
                              <h3>' . get_the_title() . '</h3>
                              ' . get_the_content() . '
                          </li>';
                }
                wp_reset_postdata();
            ?>
        </ul>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style4">
        <div class="inner">
            <header>
                <h2>Ready to discuss your project?</h2>
                <p>Write to us or know more.</p>
            </header>
            <ul class="actions vertical">
                <!-- here static link -->
                <li><a href="http://vlove.com.ua/websites/whiteweb1/contacts/" id="request_but" class="button fit">REQUEST A QUOTE</a></li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?>