<?php 
	function oss_register_short_description_partials( $wp_customize ){
		$wp_customize->selective_refresh->add_partial( 'theme_options[short_description_setting]', array(
			'selector'            => '.site-short-description',
			'settings'            => 'theme_options[short_description_setting]',
			'render_callback' 	  => 'oss_short_description_render_callback',
		) );
	}
	add_action( 'customize_register', 'oss_register_short_description_partials', 11 );
		

	function oss_register_about_section_description_partials( $wp_customize ){
		$wp_customize->selective_refresh->add_partial( 'theme_options[oss_about_section_description]', array(
			'selector'            => '.site-long-description',
			'settings'            => 'theme_options[oss_about_section_description]',
			'render_callback' 	  => 'oss_about_section_description_render_callback',
		) );
	}
	add_action( 'customize_register', 'oss_register_about_section_description_partials', 11 );
	