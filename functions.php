<?php
require_once('cusmin.php');
function onphpid_scripts()
{

    wp_enqueue_style(
        'onphpid-bootstrap',
        get_template_directory_uri() .'/vendor/bootstrap/css/bootstrap.min.css'
    );

/*
wp_enqueue_style(
        'onphpid-bootstrap2',
        get_template_directory_uri() .'/css/grayscale.min.css'
    );
*/
$gambar = myprefix_get_theme_option( 'select_example' );
    if ($gambar == 1) {
      wp_enqueue_style(
          'onphpid-bootstrap2',
          get_template_directory_uri() .'/css/grayscale.min.css'
      );
    }elseif ($gambar == 2) {
      wp_enqueue_style(
          'onphpid-bootstrap2',
          get_template_directory_uri() .'/css/grayscale2.min.css'
      );
    }else {
      wp_enqueue_style(
          'onphpid-bootstrap2',
          get_template_directory_uri() .'/css/grayscale3.min.css'
      );
    };
    wp_enqueue_style(
        'onphpid-bootstrap3',
        get_template_directory_uri() .'/vendor/fontawesome-free/css/all.min.css'
    );

    wp_enqueue_style(
        'onphpid-bootstrap4',
        "https://fonts.googleapis.com/css?family=Varela+Round"
    );

    wp_enqueue_style(
        'onphpid-bootstrap5',
        "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    );

    wp_enqueue_style('onphpid-style', get_stylesheet_uri());



    wp_enqueue_script(
        'jquery-cdn',
        get_template_directory_uri() . '/vendor/jquery/jquery.min.js"',
        array(), '', true
    );

    wp_enqueue_script(
        'bootstrap-js2',
        get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        array(), '', true
    );

    wp_enqueue_script(
        'bootstrap-js3',
        get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js',
        array(), '', true
    );

    wp_enqueue_script(
        'bootstrap-js4',
        get_template_directory_uri() . '/js/grayscale.min.js',
        array(), '', true
    );
}

add_action('wp_enqueue_scripts', 'onphpid_scripts');

function miblog_widgets() {
  register_sidebar( array(
    'name' => 'sidebar',
    'id' => 'sidebar',
    'description' => 'Sidebar kanan',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ) );


}
  add_action( 'widgets_init', 'miblog_widgets' );

  function wpb_custom_new_menu() {
  register_nav_menus(
    array(
      'my-custom-menu' => __( 'My Custom Menu' ),
      'extra-menu' => __( 'Extra Menu' ),
      'my-head-menu' => __( 'My Head Menu' )
    )
  );
}
add_action( 'init', 'wpb_custom_new_menu' );
/*ALternate
function img()
{
    return get_template_directory_uri().'/img/';
}
*/
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
  'page_title' 	=> 'Theme General Settings',
  'menu_title'	=> 'Theme Option',
  'menu_slug' 	=> 'theme-general-settings2',
  'capability'	=> 'edit_posts',
  'redirect'		=> false
));

  acf_add_options_page(array(
  'page_title' 	=> 'Theme Settings',
  'menu_title'	=> 'Theme Settings',
  'menu_slug' 	=> 'theme-general-settings',
  'capability'	=> 'edit_posts',
  'redirect'		=> false
));

acf_add_options_sub_page(array(
  'page_title'  => 'Theme Header Settings',
  'menu_title'  => 'Header',
  'parent_slug' => 'theme-general-settings',
));

acf_add_options_sub_page(array(
  'page_title'  => 'Theme Footer Settings',
  'menu_title'  => 'Footer',
  'parent_slug' => 'theme-general-settings',
));
}

function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Mobil'
    );

    register_post_type( 'mobil', $args );
    $args = array(
      'public' => true,
      'label'  => 'Brand'
    );
    register_post_type( 'brand', $args );
}
add_action( 'init', 'codex_custom_init' );



?>
