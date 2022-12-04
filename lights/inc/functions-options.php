<?php

function lights_customize_register( $wp_customize ) {

    $wp_customize->add_section( 
        'lights_site_settings', 
        array(
            'title'       => 'Site settings',
            'priority'    => 100,
            'capability'  => 'edit_theme_options',
        ) 
    );

    $wp_customize->add_setting( 'lights_bg', array(
        'default' => '', 
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( 
        $wp_customize, 
        'lights_page_background', 
        array(
            'label' => 'Upload Image',
            'priority' => 20,
            'section' => 'lights_site_settings',
            'settings' => 'lights_bg',
            'button_labels' => array(
                'select' => 'Select Image',
                'remove' => 'Remove Image',
                'change' => 'Change Image',
        )
    )));



}
add_action('customize_register','lights_customize_register');