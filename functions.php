<?php

/**
 * My theme function
 * */ 

 // theme tittle
 add_theme_support('title-tag' );

 // theme css and jquery file calling
 function habib_css_js_file_calling(){
    wp_enqueue_style('habib_style', get_stylesheet_uri() );
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'./js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'./js/main.js', array(), '1.0.0', 'true');
   
 }
 add_action( 'wp_enqueue_scripts', 'habib_css_js_file_calling');

// google font enqueue
function habib_add_google_fonts(){
  wp_enqueue_style('habib_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&family=Poppins&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'habib_add_google_fonts');



 // theme function

 function habib_customizar_register($wp_customize){
  // Header area function
   $wp_customize->add_section('habib_header_area', array(
    'title'=>__("Header Area", "habib"),
    'description'=> 'if you interested to update your header area, you can do it here.'
   ));
   $wp_customize->add_setting('habib_logo', array(
    'default'=>get_bloginfo( 'template_directory') . '/img/logo.png',
   ));
   $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'habib_logo', array(
    'label'=>'Logo upload',
    'description'=>'If you interested to change or update logo you can dot it',
    'setting'=>'habib_logo',
    'section'=>'habib_header_area',
   )));

   // Menu Position Position
   $wp_customize->add_section('habib_menu_option', array(
    'title'=>__('Menu position Option', 'habib'),
    'description'=> 'if you interested to change your menu position, you can change it here.'
   ));
   $wp_customize->add_setting('habib_menu_position', array(
    'default'=>'right_menu',
   ));
   $wp_customize->add_control('habib_menu_position', array(
    'label'=>'Menu Position',
    'description'=>'Select your menu position',
    'setting'=>'habib_menu_position',
    'section'=>'habib_menu_option',
    'type'=>'radio',
    'choices'=>array(
      'left_menu'=>'Left Menu',
      'right_menu'=>'Right Menu',
      'center_menu'=>'Center Menu',
    )
   ));
 }

 add_action( 'customize_register', 'habib_customizar_register' );


 // menu register
 register_nav_menu('primary', __('Primary Menu','habib'));