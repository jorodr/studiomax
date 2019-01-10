<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// ******************** Add nessesery styles and scripts ********************

function studiomax_styles_and_scripts() {
    $template_directory = get_template_directory_uri();
    
    // add styles
    wp_enqueue_style(bootstrap, $template_directory . '/vendor/bootstrap/bootstrap.min.css');
    wp_enqueue_style(lightbox, $template_directory . '/vendor/lightbox/lightbox.css');
    wp_enqueue_style(studiomax, $template_directory . '/css/studiomax.css');
    
    // add scripts
    wp_enqueue_script('bootstrap', $template_directory . '/vendor/bootstrap/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('lightbox', $template_directory . '/vendor/lightbox/lightbox.min.js', array('jquery'), false, true);
    wp_enqueue_script('scrollto', $template_directory . '/vendor/scroll_to/jquery.scrollTo.min.js', array('jquery'), false, true);
    wp_enqueue_script('studiomax', $template_directory . '/js/scripts.js', array('jquery'), false, true);
}

add_action('wp_enqueue_scripts', 'studiomax_styles_and_scripts');

// ******************** Custom settings ********************

function studiomax_custom_settings($wp_customize) {
    $wp_customize->add_panel('studiomax_customizer', array(
        'title' => __('Studiomax Options')
    ));
    
    $wp_customize->add_section('studiomax_frontpage_images', array(
        'title' => __('Frontpage Images', 'studiomax'),
        'panel' => 'studiomax_customizer'
    ));
    
    
    // Top front image
    $wp_customize->add_setting('studiomax_frontpage_header_image', array(
      'default' => get_template_directory_uri() . '/images/Onepixel_1089312_1400.jpg'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'studiomax_frontpage_header_image', array(
      'label' => __('Top Image', 'studiomax'),
      'description' => 'The main frontend image',
      'width' => 1400,
      'height' => 933,
      'section' => 'studiomax_frontpage_images',
      'settings' => 'studiomax_frontpage_header_image'
      )
    ));
    
    // About us image
    $wp_customize->add_setting('studiomax_about_us_image', array(
      'default' => get_template_directory_uri() . '/images/Onepixel_1089312_1400.jpg'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'studiomax_about_us_image', array(
      'label' => __('About Us Image', 'studiomax'),
      'description' => 'The main frontend image',
      'width' => 640,
      'height' => 480,
      'section' => 'studiomax_frontpage_images',
      'settings' => 'studiomax_about_us_image'
      )
    ));
    
    // Services image
    $wp_customize->add_setting('studiomax_services_image', array(
      'default' => get_template_directory_uri() . '/images/Onepixel_3313854'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'studiomax_services_image', array(
      'label' => __('Services Image', 'studiomax'),
      'description' => 'Services image',
      'width' => 1400,
      'height' => 933,
      'section' => 'studiomax_frontpage_images',
      'settings' => 'studiomax_services_image'
      )
    ));
    
    // Quote image
    $wp_customize->add_setting('studiomax_quote_image', array(
      'default' => get_template_directory_uri() . '/images/Onepixel_2670458'
    ));

    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'studiomax_quote_image', array(
      'label' => __('Quote Image', 'studiomax'),
      'description' => 'The main frontend image',
      'width' => 1400,
      'height' => 933,
      'section' => 'studiomax_frontpage_images',
      'settings' => 'studiomax_quote_image'
      )
    ));
}

add_action('customize_register', 'studiomax_custom_settings');

// ******************** Widgets areas ********************

function studiomax_widgets_setup() {
  register_sidebar(array(
    'name' => 'frontpage-gallery-widget-area',
    'id' => 'frontpage-gallery-widget-area',
    'before_widget' => '<div class="frontpage-gallery">',
    'after_widget' => '</div>',
    'before_title' => '<h5>',
    'after_title' => '</h5>',
    'description' => 'Frontpage gallery widget area',
  ));  
}

add_action('widgets_init', 'studiomax_widgets_setup');