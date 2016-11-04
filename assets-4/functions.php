<?
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles()
{

    wp_register_style('fontawesome', THEME_DIR . '/assets/css/font-awesome.min.css', array(), '1', 'all');
    wp_register_style('ie8', THEME_DIR . '/assets/css/ie8.css', array(), '1', 'all');
    wp_register_style('ie9', THEME_DIR . '/assets/css/ie9.css', array(), '1', 'all');
    wp_register_style('main', THEME_DIR . '/assets/css/main.css', array(), '1', 'all');
    wp_register_style('owlcarousel', THEME_DIR . '/assets/css/owl.carousel.css', array(), '1', 'all');
    wp_register_style('owltheme', THEME_DIR . '/assets/css/owl.theme.css', array(), '1', 'all');

    wp_enqueue_style('fontawesome');
    // wp_enqueue_style( 'ie8' );
    // wp_enqueue_style( 'ie9' );
    wp_enqueue_style('main');
    wp_enqueue_style('owlcarousel');
    wp_enqueue_style('owltheme');

}

// REG NAV
register_nav_menus(array(
    'header_menu' => 'PWeb Dev Navigation Menu',
    'footer_menu' => 'its a footer menu',
    'footer_menu1' => 'its a footer menu1',
));

function govno_jopa_widgets_init()
{
    register_sidebar(array(
        'name' => __('ESSENTIAL ADVANTAGES OF WHITE WEB', 'govno_jopa'),
        'id' => 'advantages',
        'description' => __('ESSENTIAL ADVANTAGES OF WHITE WEB block.', 'theme-slug'),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<dt>',
        'after_title' => '</dt>',
    ));
    register_sidebar(array(
        'name' => __('TESTIMONIALS', 'govno_jopa'),
        'id' => 'testimonials',
        'description' => __('TESTIMONIALS block.', 'theme-slug'),
        'before_widget' => '<div><header>',
        'after_widget' => '</header></div>',
        'before_title' => '',
        'after_title' => '',
    ));
}

function govno_jopa_customize_register( $wp_customize ) {
    // SECTIONS
    $wp_customize->add_section( 'contacts', array(
        'title' => __( 'Contact information' ),
        'description' => __( 'Add address, phone etc. here!' ),
        'priority' => 30
    ) );

    //SETINGS
    $wp_customize->add_setting( 'address', array('default' => '1234 Somewhere Street') );

    $wp_customize->add_setting( 'town', array('default' => 'Someville') );

    $wp_customize->add_setting( 'state', array('default' => 'SM') );

    $wp_customize->add_setting( 'zip_code', array('default' => '00000') );

    $wp_customize->add_setting( 'phone', array('default' => '(000) 000-0000') );

    $wp_customize->add_setting( 'email', array('default' => 'information@untitled.tld') );

    $wp_customize->add_setting( 'google_plus', array('default' => 'https://plus.google.com/') );

    $wp_customize->add_setting( 'yelp', array('default' => 'https://www.yelp.com/') );

    //CONTROLS
    $wp_customize->add_control( 'address', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Address' ),
        'description' => __( 'This is a address control.' )
    ) );

    $wp_customize->add_control( 'town', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Town' ),
        'description' => __( 'This is a town control.' )
    ) );

    $wp_customize->add_control( 'state', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'State (Short)' ),
        'description' => __( 'This is a state control.' )
    ) );

    $wp_customize->add_control( 'zip_code', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'ZIP Code' ),
        'description' => __( 'This is a ZIP code control.' )
    ) );

    $wp_customize->add_control( 'phone', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Phone Number' ),
        'description' => __( 'This is a phone number control.' )
    ) );

    $wp_customize->add_control( 'email', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Email' ),
        'description' => __( 'This is a email control.' )
    ) );

    $wp_customize->add_control( 'google_plus', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Google+' ),
        'description' => __( 'This is a Google+ link control.' )
    ) );

    $wp_customize->add_control( 'yelp', array(
        'type' => 'text',
        'section' => 'contacts',
        'label' => __( 'Yelp' ),
        'description' => __( 'This is a Yelp link control.' )
    ) );
}

add_action( 'customize_register', 'govno_jopa_customize_register' );
add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('widgets_init', 'govno_jopa_widgets_init');