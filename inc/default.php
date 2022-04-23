<?php

if(!function_exists('theme_default_values'))
{
    function theme_default_values(){
        $defaults = [];

        $defaults['short_description_setting'] = 'We provide all online services under one roof. Quality work and customer satisfaction is our topmost priority. Contact us now to get your work done at pocket-friendly costs.';
        $defaults['long_description_setting'] = 'We at Suraj Online Works help people with all kinds of online services, whether it is about booking online tickets, paying bills, filling a form, or applying for government identities such as Aadhar Card, PAN Card, and other certificates including - e-shram card, income certificate, caste certificate and much more.
        Our service cost is kept minimal to help as many people as we can.';

        return $defaults;
    }
}

if ( ! function_exists( 'theme_get_option' ) )
{
	function theme_get_option( $key ) {

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