<?php

if(!function_exists('theme_default_values'))
{
    function theme_default_values(){
        $defaults = [];

        $defaults['short_description_setting'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $defaults['long_description_setting'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
		$defaults['oss_number_of_features'] = 1;
		$defaults['oss_about_section_heading']	= 'Who We Are?';
		$defaults['oss_about_section_description']	= 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
		$defaults['oss_services_section_heading'] = 'What Our Shop Offers & What We Provide';
		$defaults['oss_number_of_services'] = 1;
		$defaults['oss_display_whatsapp_button'] = false;
		$defaults['oss_display_call_button'] = false;
		$defaults['oss_service_section_whatsapp_link'] = '#';
		$defaults['oss_service_section_call_link'] = '#';

        return $defaults;
    }
}

if ( ! function_exists( 'oss_get_option' ) )
{
	function oss_get_option( $key ) {

		$default_options = theme_default_values();
		if ( empty( $key ) ) {
			return;
		}

		$theme_options = (array)get_theme_mod( 'theme_options' );
		$theme_options = wp_parse_args( $theme_options, $default_options );

		$value = null;

		if ( isset( $theme_options[ $key ] ) ) {
			$value = $theme_options[ $key ];
		}

		return $value;

	}
}