<?php 
	function oss_register_short_description_partials( $wp_customize ){
		$wp_customize->selective_refresh->add_partial( 'theme_options[short_description_setting]', array(
			'selector'            => '.site-short-description',
			'settings'            => 'theme_options[short_description_setting]',
			'render_callback' 	  => 'oss_short_description_render_callback',
		) );
	}
	add_action( 'customize_register', 'oss_register_short_description_partials', 11 );
		

	function oss_register_long_description_partials( $wp_customize ){
		$wp_customize->selective_refresh->add_partial( 'theme_options[long_description_setting]', array(
			'selector'            => '.site-long-description',
			'settings'            => 'theme_options[long_description_setting]',
			'render_callback' 	  => 'oss_long_description_render_callback',
		) );
	}
	add_action( 'customize_register', 'oss_register_long_description_partials', 11 );
	