<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES

function enqueue_styles()
{


    wp_register_style('style_main', THEME_DIR . '/assets/css/style.css', array(), '1', 'all');
    wp_register_style('font-awesone', THEME_DIR . '/assets/css/font-awesome.min.css', array(), '1', 'all');

    wp_enqueue_style('style_main');
    wp_enqueue_style('font-awesone');

}

add_action('wp_enqueue_scripts', 'enqueue_styles');

// REG NAV
register_nav_menus(array(
    'main_menu' => 'PWeb Dev Navigation Menu'
));
show_admin_bar(0);


add_action( 'widgets_init', 'first_widgets_init' );

function first_widgets_init() {
    register_sidebar( array(
        'name' => __( 'First slider', 'first' ),
        'id' => 'slider-1',
        'description' => __( '', 'first' )
    ) );
    register_sidebar( array(
        'name' => __( 'Second slider', 'first' ),
        'id' => 'slider-2',
        'description' => __( '', 'first' )
    ) );
}

add_filter('widget_text', 'do_shortcode');

function sub_zero_customize_register( $wp_customize )
{
    // SECTIONS
    $wp_customize->add_section('socials', array(
        'title' => __('Socials'),
        'priority' => 30
    ));

    //SETINGS
    $wp_customize->add_setting( 'twitter', array('default' => 'https://twitter.com') );

    $wp_customize->add_setting( 'facebook', array('default' => 'https://facebook.com') );

    $wp_customize->add_setting( 'instagram', array('default' => 'https://instagram.com') );

    $wp_customize->add_setting( 'dribbble', array('default' => 'https://dribbble.com') );

    $wp_customize->add_setting( 'email', array('default' => 'https://email.com') );

    //CONTROLS
    $wp_customize->add_control( 'twitter', array(
        'type' => 'text',
        'section' => 'socials',
        'label' => __( 'Twitter' ),
        'description' => __( 'Social link.' )
    ) );

    $wp_customize->add_control( 'facebook', array(
        'type' => 'text',
        'section' => 'socials',
        'label' => __( 'Facebook' ),
        'description' => __( 'Social link.' )
    ) );

    $wp_customize->add_control( 'instagram', array(
        'type' => 'text',
        'section' => 'socials',
        'label' => __( 'Instagram' ),
        'description' => __( 'Social link.' )
    ) );

    $wp_customize->add_control( 'dribbble', array(
        'type' => 'text',
        'section' => 'socials',
        'label' => __( 'Dribbble' ),
        'description' => __( 'Social link.' )
    ) );

    $wp_customize->add_control( 'email', array(
        'type' => 'text',
        'section' => 'socials',
        'label' => __( 'Email' ),
        'description' => __( 'Our email.' )
    ) );
}

add_action( 'customize_register', 'sub_zero_customize_register' );

function icon_meta_box_markup($object)
{
        wp_nonce_field(basename(__FILE__), "meta-box-nonce");

        ?>
        <div>
            <label for="meta-box-text">Icon</label>
            <input name="meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">

            <?php
}

function add_icon_meta_box()
{
    add_meta_box("icon-meta-box", "Icon Meta Box", "icon_meta_box_markup", "post", "normal", "high", null);
}

add_action("add_meta_boxes", "add_icon_meta_box");

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);
}

add_action("save_post", "save_custom_meta_box", 10, 3);