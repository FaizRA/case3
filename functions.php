<?php

function onphpid_scripts()
{

    wp_enqueue_style(
        'onphpid-bootstrap',
        get_template_directory_uri() .'/vendor/bootstrap/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'onphpid-bootstrap2',
        get_template_directory_uri() .'/css/grayscale.min.css'
    );

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
?>
