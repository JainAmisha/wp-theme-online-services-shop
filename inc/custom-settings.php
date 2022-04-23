<?php

class Online_Services_Shop_Custom_Options
{
    public function __construct(){
        add_action( 'customize_register', array( $this, 'register_controls' ) );
    }

    public function register_controls()
    {
        global $wp_customize;
        $wp_customize->add_section(
			'frontpage_custom_data',
			array(
				'title'    => __( 'Front Page Custom Data' ),
				'priority' => 20,
			)
		);

        $wp_customize->add_control(
			'short_description',
			array(
				'label'   => __( 'Short Description' ),
				'section' => 'frontpage_custom_data',
			)
		);
    }
} new Online_Services_Shop_Custom_Options();