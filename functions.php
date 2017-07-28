<?php

if ( ! function_exists ( 'alice_benham_setup') ) :

function alice_benham_setup(){
  //Lets wordpress handle the title tags
    add_theme_support( 'title-tag' );

}
endif;

add_action('after_setup_theme','alice_benham_setup');

// register menu_class

function alice_benham_menus(){

      register_nav_menus(

        array(
                  'primary' => __('Primary Menu'),
                  'footer' => __('Footer Menu')
        )

      );

}
add_action('init', 'alice_benham_menus');

// add scripts and style-sheets
if ( function_exists('register_sidebar') )
{ register_sidebar(array( 'before_widget' => '<li id="%1$s" class="widget %2$s">', 'after_widget' => '</li>', 'before_title' => '<h2 class="widgettitle">', 'after_title' => '</h2>', ));
 }

//add featured image support
add_theme_support( 'post-thumbnails' );



function alice_benham_scripts() {
  //ques the main style-sheets
  // wp_enqueue_script( 'script', get_template_directory_uri() . 'http://code.jquery.com/jquery-1.11.1.min.js', array ( 'jquery' ), '1.11.1' , true);


  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_style('folded_group_styles', get_stylesheet_uri() );

  wp_deregister_script('jquery');
  wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'spectragram', get_template_directory_uri() . '/js/spectragram.js', array ( 'jquery' ), '1.0.0' , true);
  wp_enqueue_script( 'waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js', array ( 'spectragram' ), '4.0.1' , true);
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/style.js', array ( 'waypoints' ), '1.0.0' , true);


}
add_action('wp_enqueue_scripts', 'alice_benham_scripts');
