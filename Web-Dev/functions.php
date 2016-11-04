<?php
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');
 
// ENQUEUE STYLES
     
function enqueue_styles() {
     
    /** REGISTER css/screen.cs **/
    wp_register_style( 'bootstrap', THEME_DIR . '/css/bootstrap.min.css', array(), '1', 'all' );
    wp_register_style( 'font-awesone', THEME_DIR . '/css/font-awesome.min.css', array(), '1', 'all' );
    wp_register_style( 'animate', THEME_DIR . '/css/animate.min.css', array(), '1', 'all' );
    wp_register_style( 'lightbox', THEME_DIR . '/css/lightbox.css', array(), '1', 'all' );
    wp_register_style( 'main', THEME_DIR . '/css/main.css', array(), '1', 'all' );
    wp_register_style( 'responsive', THEME_DIR . '/css/responsive.css', array(), '1', 'all' );
    wp_register_style( 'style', THEME_DIR . '/css/style.css', array(), '1', 'all' );

    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'font-awesone' );
    wp_enqueue_style( 'animate' );
    wp_enqueue_style( 'lightbox' );
    wp_enqueue_style( 'main' );
    wp_enqueue_style( 'responsive' );
    wp_enqueue_style( 'style' );
         
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// REG NAV
register_nav_menus( array(
	'main_menu' => 'Web Dev Navigation Menu'
) );

function web_dev_customize_register( $wp_customize ) {
  // SECTIONS
  $wp_customize->add_section( 'contacts', array(
  'title' => __( 'Contact information' ),
  'description' => __( 'Add address, phone etc. here!' ),
  'priority' => 30
) );

											  //SETINGS
											  $wp_customize->add_setting( 'address', $def );

											  $wp_customize->add_setting( 'town', $def );

											  $wp_customize->add_setting( 'state', $def );

											  $wp_customize->add_setting( 'zip_code', $def );

											  $wp_customize->add_setting( 'phone', $def );

											  $wp_customize->add_setting( 'google_plus', $def );

											  $wp_customize->add_setting( 'yelp', $def );

											  $wp_customize->add_setting( 'mail', $def );

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

							  $wp_customize->add_control( 'mail', array(
							  'type' => 'text',
							  'section' => 'contacts',
							  'label' => __( 'E-mail' ),
							  'description' => __( 'This is an E-mail control.' )
							) );
}
add_action( 'customize_register', 'web_dev_customize_register' );


function author_meta_box_markup($object)
{
        wp_nonce_field(basename(__FILE__), "meta-box-nonce");
        $post = the_post();
        if( in_category('testimonials', $post) )
        echo '	
        <div>
            <label for="meta-box-text">Author</label>
            <input name="meta-box-text" type="text" value="'. echo get_post_meta($object->ID, "meta-box-text", true) .'">
        </div> ';

}
function add_author_meta_box()
{
    add_meta_box("author-meta-box", "Author", "author_meta_box_markup", "post", "normal", "high", null);
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
    $cat = "testimonials";
    if($cat != $post->)
    $meta_box_text_value = "";
    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);
}
add_action("save_post", "save_custom_meta_box", 10, 3);

wp_insert_term(
  'Testimonials',
  'category',
  array(
    'description'=> '',
    'slug' => 'testimonials'
  );