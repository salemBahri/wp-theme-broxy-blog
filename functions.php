<?php 

//stylesheet
function broxy_blog_enqueue_stylesheets(){
     // Enqueue CSS files
    wp_enqueue_style('broxy-bookcenter-stylesheet',get_stylesheet_uri());
    wp_enqueue_style('broxy-blog-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('broxy-blog-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.all.min.css');
    wp_enqueue_style('broxy-blog-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('broxy-blog-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('broxy-blog-simple-scrollbar', get_template_directory_uri() . '/assets/css/simple-scrollbar.css');
    wp_enqueue_style('broxy-blog-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_style_add_data('broxy-bookcenter-stylesheet','rtl','replace');

     // Enqueue JS files
     wp_enqueue_script('broxy-blog-jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, true);
     wp_enqueue_script('broxy-blog-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-contact', get_template_directory_uri() . '/assets/js/contact.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-main', get_template_directory_uri() . '/assets/js/main.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-maps', get_template_directory_uri() . '/assets/js/maps.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), null, true);
     wp_enqueue_script('broxy-blog-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-particle-animation', get_template_directory_uri() . '/assets/js/particle-animation.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-plugins', get_template_directory_uri() . '/assets/js/plugins.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-resize-sensor', get_template_directory_uri() . '/assets/js/ResizeSensor.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-scrolla', get_template_directory_uri() . '/assets/js/scrolla.jquery.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-simple-scrollbar', get_template_directory_uri() . '/assets/js/simple-scrollbar.min.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-syo-timer', get_template_directory_uri() . '/assets/js/SyoTimer.js', array('broxy-blog-jquery'), null, true);
     wp_enqueue_script('broxy-blog-theia-sticky-sidebar', get_template_directory_uri() . '/assets/js/theia-sticky-sidebar.min.js', array('broxy-blog-jquery'), null, true);
}
add_action('wp_enqueue_scripts','broxy_blog_enqueue_stylesheets');

function enqueue_google_maps_api() {
    if (!is_admin()) { // Only enqueue on the frontend
        wp_enqueue_script(
            'google-maps-api',
            'https://maps.googleapis.com/maps/api/js?key=AIzaSyCO5gB5AYjVEtuZxzRDMCOQ8_PEXikYRcg',
            array(), // No dependencies
            null,    // No specific version
            true     // Load in the footer
        );
    }
}
add_action('wp_enqueue_scripts', 'enqueue_google_maps_api');


//theme Support
add_theme_support( 'post-thumbnails' );


// menu
function broxy_register_menues(){
	register_nav_menus(array('main-menu'=>'Main Menu'));
}
add_action('init','broxy_register_menues');



function my_theme_customizer($wp_customize) {
    // Add a setting for the header logo
    $wp_customize->add_setting('logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add a control to upload the header logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'    => 'Upload Header Logo',
        'section'  => 'title_tagline', // This can be changed to another section if needed
        'settings' => 'logo',
    )));

    // Add a setting for the footer logo
    $wp_customize->add_setting('footer_logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));

    // Add a control to upload the footer logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
        'label'    => 'Upload Footer Logo',
        'section'  => 'title_tagline', // You can change the section if needed
        'settings' => 'footer_logo',
    )));
}
add_action('customize_register', 'my_theme_customizer');


function custom_image_sizes() {
    add_image_size('custom-size1', 555, 571, true); // true enables cropping
    add_image_size('custom-size2', 388, 301, true); // true enables cropping
}
add_action('after_setup_theme', 'custom_image_sizes');



function broxy_register_widgets(){

            $sidebar_about_me=array(
                'name'=>'Sidebar About Me',
                'id'=>'sidebaraboutme',
                'before_widget'=>'<div id="%1$s" class="widget widget-content %2$s">',
                'after_widget'=>'</div>',
                'before_title'=>'<h4>',
                'after_title'=>'</h4>'
            );
            register_sidebar($sidebar_about_me);

        $footer1=array(
            'name'=>'Footer Column 1',
            'id'=>'footer1',
            'before_widget'=>'<div id="%1$s" class="widget widget-content %2$s">',
            'after_widget'=>'</div>',
            'before_title'=>'<h2>',
            'after_title'=>'</h2>'
        );
    register_sidebar($footer1);

    $footer2=array(
         'name'=>'Footer Column 2',
         'id'=>'footer2',
         'before_widget'=>'<div id="%1$s" class="widget widget-content %2$s">',
            'after_widget'=>'</div>',
         'before_title'=>'<h2>',
         'after_title'=>'</h2>'
    );
    register_sidebar($footer2);


    $footer3=array(
         'name'=>'Footer Column 3',
         'id'=>'footer3',
         'before_widget'=>'<div id="%1$s" class="widget widget-content %2$s">',
            'after_widget'=>'</div>',
         'before_title'=>'<h2>',
         'after_title'=>'</h2>'
    );
    register_sidebar($footer3);
}
add_action('widgets_init','broxy_register_widgets');









// Add Coming Soon settings page
function coming_soon_settings_page() {
    add_options_page(
        'Coming Soon Mode',
        'Coming Soon Mode',
        'manage_options',
        'coming-soon-settings',
        'render_coming_soon_settings_page'
    );
}
add_action('admin_menu', 'coming_soon_settings_page');

// Render the Coming Soon settings page
function render_coming_soon_settings_page() {
    ?>
    <div class="wrap">
        <h1 style="color:blueviolet">Coming Soon Mode</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('coming_soon_settings_group');
            do_settings_sections('coming_soon_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

// Register and define the Coming Soon setting
function coming_soon_register_settings() {
    register_setting('coming_soon_settings_group', 'coming_soon_enabled');

    add_settings_section(
        'coming_soon_settings_section',
        'Coming Soon Settings',
        null,
        'coming_soon_settings'
    );

    add_settings_field(
        'coming_soon_enabled',
        'Enable Coming Soon Mode',
        'render_coming_soon_checkbox',
        'coming_soon_settings',
        'coming_soon_settings_section'
    );
}
add_action('admin_init', 'coming_soon_register_settings');

// Render the checkbox for Coming Soon mode
function render_coming_soon_checkbox() {
    $value = get_option('coming_soon_enabled', false);
    ?>
    <input type="checkbox" name="coming_soon_enabled" value="1" <?php checked($value, true); ?>>
    <?php
}

function check_coming_soon_mode() {
    // Get the Coming Soon mode setting
    $coming_soon = get_option('coming_soon_enabled', false);

    // If Coming Soon mode is enabled and the user is not logged in or admin
    if ($coming_soon && !is_user_logged_in() && !is_admin()) {
        // Prevent redirect loop by excluding the Coming Soon page itself
        if (!is_page('coming-soon')) {
            wp_redirect(home_url('/coming-soon/'));
            exit;
        }
    }
}
add_action('template_redirect', 'check_coming_soon_mode');
