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
register_nav_menu( 'main_menu', 'Web Dev Navigation Menu' );

function web_dev_customize_register( $wp_customize ) {
  // SECTIONS
    $wp_customize->add_section( 'contacts', array(
        'title' => __( 'Contact information' ),
        'description' => __( 'Add address, phone etc. here!' ),
        'priority' => 30
    ) );
    $wp_customize->add_section( 'geo', array(
        'title' => __( 'Geoposition' ),
        'description' => __( 'Geoposition information must be there!' ),
        'priority' => 30
    ) );
    $def = array('default' => '1234 Somewhere Street');

											  //SETINGS
											  $wp_customize->add_setting( 'address', $def );

											  $wp_customize->add_setting( 'town', $def );

											  $wp_customize->add_setting( 'state', $def );

											  $wp_customize->add_setting( 'zip_code', $def );

											  $wp_customize->add_setting( 'phone', $def );

											  $wp_customize->add_setting( 'google_plus', $def );

											  $wp_customize->add_setting( 'yelp', $def );

                                              $wp_customize->add_setting( 'mail', $def );

                                              $wp_customize->add_setting( 'lat', $def );

                                              $wp_customize->add_setting( 'lng', $def );

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

                            $wp_customize->add_control( 'lat', array(
                                'type' => 'text',
                                'section' => 'geo',
                                'label' => __( 'LAT:' ),
                                'description' => __( '' )
                            ) );

                            $wp_customize->add_control( 'lng', array(
                                'type' => 'text',
                                'section' => 'geo',
                                'label' => __( 'LNG:' ),
                                'description' => __( '' )
                        ) );
}
add_action( 'customize_register', 'web_dev_customize_register' );


function author_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    $post = $_GET['post'];
    if (in_category('testimonials', $post)){
        echo '	
        <div>
            <label for="meta-box-text">Author</label>
            <input name="meta-box-text" type="text" value="' . get_post_meta($object->ID, "author-meta", true) . '">
        </div> ';
    }else{
        echo '<div><label>Disable for this post(Only for testimonials).</label></div>';
    }

}
function add_author_meta_box()
{
    add_meta_box("author-meta-box", "Author", "author_meta_box_markup", "post", "normal", "high", null);
}
add_action("add_meta_boxes", "add_author_meta_box");
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
    update_post_meta($post_id, "author-meta", $meta_box_text_value);
}
add_action("save_post", "save_custom_meta_box", 10, 3);

wp_insert_term(
  'Testimonials',
  'category',
  array(
    'description'=> '',
    'slug' => 'testimonials'
  ));

add_theme_support( 'post-thumbnails' );

add_action( 'widgets_init', 'web_dev_widgets_init' );

function web_dev_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Services', 'web_dev' ),
        'id' => 'services',
        'description' => __( 'Use only "Service" Widget!', 'web_dev' )
    ) );
    register_sidebar( array(
        'name' => __( 'Clients', 'web_dev' ),
        'id' => 'clients',
        'description' => __( 'Use only "Image" Widget!', 'web_dev' ),
        'before_widget' => '<div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-2">',
        'after_widget' => '</div>'
    ) );
}
add_action( 'widgets_init', function(){
    register_widget( 'Service_Widget' );
});
/**
 * Adds Service_Widget widget.
 */
class Service_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'service_widget', // Base ID
            'Service Widget', // Name
            array( 'description' => __( 'A Service Widget', 'web_dev' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $content = $instance['content'];
        $link = $instance['link'];

        echo '<div class="col-sm-4 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service"><a href="'. $link .'">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="'.esc_url($instance['image_uri']).'" alt="">
                        </div>
                        <h2>'. $title .'</h2>
                        <p>'. $content .'</p>
                    </a></div>
                </div>';
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( '', 'web_dev' );
        }
        if ( isset( $instance[ 'content' ] ) ) {
            $content = $instance[ 'content' ];
        }
        else {
            $content = __( '', 'web_dev' );
        }
        if ( isset( $instance[ 'link' ] ) ) {
            $link = $instance[ 'link' ];
        }
        else {
            $link = __( '', 'web_dev' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo esc_attr( $link ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'content' ); ?>"><?php _e( 'Text:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'content' ); ?>" name="<?php echo $this->get_field_name( 'content' ); ?>"><?php echo esc_attr( $content ); ?>
            </textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('image_uri'); ?>">Image</label><br />
            <input type="text" class="img" name="<?php echo $this->get_field_name('image_uri'); ?>" id="<?php echo $this->get_field_id('image_uri'); ?>-field" value="<?php echo $instance['image_uri']; ?>" />
            <input type="button" class="select-img" value="Select Image" id="<?php echo $this->get_field_id('image_uri'); ?>"/>
            <img src="<?php echo $instance['image_uri']; ?>" width="100%" class="view">
        </p>
        <?php
    }
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['content'] = ( !empty( $new_instance['content'] ) ) ? strip_tags( $new_instance['content'] ) : '';
        $instance['link'] = ( !empty( $new_instance['link'] ) ) ? strip_tags( $new_instance['link'] ) : '';
        $instance['image_uri'] = ( !empty( $new_instance['image_uri'] ) ) ? strip_tags( $new_instance['image_uri'] ) : '';

        return $instance;
    }

}
function services_enqueue($hook)
{
    if ( 'widgets.php' != $hook ) {
        return;
    }

    wp_enqueue_style('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('services', THEME_DIR . '/script.js', null, null, true);

    wp_enqueue_media();
}
add_action('admin_enqueue_scripts', 'services_enqueue');

add_theme_support( 'post-formats', array( 'gallery' ) );

add_theme_support( 'custom-logo', array(
    'height'      => 60,
    'width'       => 200,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

