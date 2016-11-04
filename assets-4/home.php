<? get_header(); ?>
    <!-- Banner -->
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Hi, we are <? bloginfo('name'); ?></h1>
            </header>
            <div class="content">
                <p><? bloginfo('description'); ?></p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Get Started</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Main -->
    <div id="main">
    <!-- One -->
    <section id="one" class="tiles">
<?php
$pages = get_pages($args);
foreach ($pages as $post) {
    setup_postdata($post);
    echo '<article >
            <span class="image">
                <img src="'. get_post_meta($post->ID, 'background', true) .'" alt=""/>
            </span>
            <header class="major">
                <h3><a href="'. get_the_permalink() .'" class="link">'. get_the_title() .'</a></h3>
                <p>'.  wp_trim_words( get_the_content(), 25, '...' ) .'</p>
            </header>
        </article >';
}
?>
    </section>
    <header class="secondary">
        <h2> OUR BEST WEBSITE DESIGNS </h2>
    </header>
    <!-- /header-->
    <section id="corousel" class="tiles second carousel">
        <?
        global $post;
        $args = array('category' => 'portfolio');
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
            setup_postdata($post);
            echo '<div style="background: url('. get_post_meta($post->ID, 'background', true) .') no-repeat; background-size: contain;">
                    <header class="">
                        <a href="' . get_the_permalink() . '">
                            <h3><a href = "' . get_the_permalink() . '" class="link" >' . get_the_title() . '</a> </h3 >
                        <p>' . wp_trim_words(get_the_content(), 5, '...') . '</p>
                        </a >
                    </header>
                </div>';
        }
        ?>

    </section>
    <!--Two -->
    <section id="two">
        <header class="secondary">
            <h2> ESSENTIAL ADVANTAGES OF White Web </h2>
        </header>
        <div class="inner">
            <dl>
                <style>
                    dl .textwidget {
                        display: inline-block;
                        width: 60%;
                        margin-bottom: 1em;
                    }
                </style>
                <?php dynamic_sidebar( 'advantages' ); ?>
<!--                <dt> Our values</dt>-->
<!--                <dd> White Web is an e - commerce web development company that will bring all your bravest ideas to-->
<!--                    life!We know how important it is for clients to communicate and cooperate with a company that-->
<!--                    has-->
<!--                    firm values, and we do our best to prove it . Creating first -class projects, completing them-->
<!--                    beforehand, being honest and open - minded are main rules we always follow .-->
<!--                </dd>-->
<!--                <dt> Custom development</dt>-->
<!--                <dd> Who doesn't want his website to be unique and customized? That's why our company provides full-->
<!--                    --->
<!--                    cycle, professional web development services . Before developing a website, app or online store,-->
<!--                    our-->
<!--                    specialists analyze client's target audience, competitors and business peculiarities, which-->
<!--                    gives us-->
<!--                    an opportunity to create a project that is custom made for the client.-->
<!--                </dd>-->
<!--                <dt>Range of services</dt>-->
<!--                <dd>As we are a web and mobile development company, we provide these services: website design and-->
<!--                    development, markuping, formation of project requirements, website architecture, IOS and Android-->
<!--                    app-->
<!--                    development, and responsive design.-->
<!--                </dd>-->
<!--                <dt>Team of professionals</dt>-->
<!--                <dd>Entrusting your project to our company you are sure that it is in safe hands. Our team of-->
<!--                    professional specialists will do their best to make sure you get the best. Owing to their-->
<!--                    experience-->
<!--                    in web and app development, we speak one language with a client.-->
<!--                </dd>-->
<!--                <dt>Long-term experience</dt>-->
<!--                <dd>We have worked hard for about 10 years to achieve the reputation we now have. Thanks to more-->
<!--                    than-->
<!--                    450 realized projects with high conversion rates and UX best practices, White Web is considered-->
<!--                    the-->
<!--                    leader in the domain of web and app development.-->
<!--                </dd>-->
<!--                <dt>Mutual respect and understanding</dt>-->
<!--                <dd>Looking for a company to be on the same wavelength with? You can stop your search here! Our-->
<!--                    outsource web development company will surely take into consideration all your wishes, and we-->
<!--                    will-->
<!--                    do our best so that we do not betray your trust. Every client is our partner; that is our main-->
<!--                    motto, so every time we start a project we build a long-term relationship based on mutual-->
<!--                    understanding and respect.-->
<!--                </dd>-->
            </dl>
        </div>
    </section>
    <header class="secondary">
        <h2>testimonials</h2>
    </header>
    <section id="testimonials">
        <?php dynamic_sidebar( 'testimonials' ); ?>
    </section>
    </div>
    <? get_footer(); ?>