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
                <h2>
                    E-commerce. <br/>
                    Website developmen. <br/>
                    Mobile app development.
                </h2>
                <p>We develop profitable ecommerce websites for the sake of your KPIs and conversion rates based on Magento, Drupal and Opencart CMS and offer responsive website development which will make your life easier and cheaper. You will enjoy Android and IOS app development services provided by our company. </p>
            </header>
            <ul class="icons major">
                <li><span class="icon fa-diamond major style1"><span class="label">Lorem</span></span></li>
                <li><span class="icon fa-heart-o major style2"><span class="label">Ipsum</span></span></li>
                <li><span class="icon fa-code major style3"><span class="label">Dolor</span></span></li>
            </ul>
        </div>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper alt style2">
        <?php
            dynamic_sidebar('slider-1');
        ?>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper style3 special">
        <div class="inner">
            <header class="major">
                <h2>ESSENTIAL ADVANTAGES OF ARTJOKER <br/> = OUR 6 TIPS TO BE A GOOD PARTNER
                    sed condimentum</h2>
                <p>Want to check our professionalism? Contact our manager and order the website development. We promise you that immediately after its launching, you already will be able to make sure we are the best website design company.</p>
            </header>
            <ul class="features">
                <?php
                    global $post;
                    $args = array(
                        'category' => 'main_link',
                        'posts_per_page' => '6');
                    $my_posts = get_posts(  "category=4&orderby=date&numberposts=6");
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

    <section id="four" class="wrapper alt style2">
        <?php
        dynamic_sidebar('slider-2');
        ?>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style4">
        <div class="inner">
            <header>
                <h2>Ready to discuss your project?</h2>
                <p>Write to us or know more.</p>
            </header>
            <ul class="actions vertical">
                <li><a href="contacts.thml" id="request_but" class="button fit">REQUEST A QUOTE</a></li>
            </ul>
        </div>
    </section>

<?php get_footer(); ?> 