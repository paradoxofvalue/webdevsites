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
                <li class="icon fa-paper-plane-o">
                    <h3>Our values</h3>
                    <p>Artjoker is an e-commerce web development company that will bring all your bravest ideas to life! We know how important it is for clients to communicate and cooperate with a company that has firm values, and we do our best to prove it. Creating first-class projects, completing them beforehand, being honest and open-minded are main rules we always follow.</p>
                </li>
                <li class="icon fa-laptop">
                    <h3>Custom development</h3>
                    <p>Who doesn't want his website to be unique and customized? That's why our company provides full-cycle, professional web development services. Before developing a website, app or online store, our specialists analyze client's target audience, competitors and business peculiarities, which gives us an opportunity to create a project that is custom made for the client.</p>
                </li>
                <li class="icon fa-code">
                    <h3>Range of services</h3>
                    <p>As we are a web and mobile development company, we provide these services: website design and development, markuping, formation of project requirements, website architecture, IOS and Android app development, and responsive design.</p>
                </li>
                <li class="icon fa-headphones">
                    <h3>Team of professionals</h3>
                    <p>Entrusting your project to our company you are sure that it is in safe hands. Our team of professional specialists will do their best to make sure you get the best. Owing to their experience in web and app development, we speak one language with a client.</p>
                </li>
                <li class="icon fa-heart-o">
                    <h3>Long-term experience</h3>
                    <p>We have worked hard for about 10 years to achieve the reputation we now have. Thanks to more than 450 realized projects with high conversion rates and UX best practices, Artjoker is considered the leader in the domain of web and app development.</p>
                </li>
                <li class="icon fa-flag-o">
                    <h3>Mutual respect and understanding</h3>
                    <p>Looking for a company to be on the same wavelength with? You can stop your search here! Our outsource web development company will surely take into consideration all your wishes, and we will do our best so that we do not betray your trust. Every client is our partner; that is our main motto, so every time we start a project we build a long-term relationship based on mutual understanding and respect.</p>
                </li>
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