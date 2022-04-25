<?php

if ( !function_exists( 'oss_sanitize_number_range' ) )
{
	function oss_sanitize_number_range( $input, $setting )
    {
		// Ensure input is an absolute integer.
		$input = absint( $input );

		// Get the input attributes associated with the setting.
		$atts = $setting->manager->get_control( $setting->id )->input_attrs;

		// Get min.
		$min = ( isset( $atts['min'] ) ? $atts['min'] : $input );

		// Get max.
		$max = ( isset( $atts['max'] ) ? $atts['max'] : $input );

		// Get Step.
		$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );

		// If the input is within the valid range, return it; otherwise, return the default.
		return ( $min <= $input && $input <= $max && is_int( $input / $step ) ? $input : $setting->default );
	}
}


if ( ! function_exists( 'oss_checkbox_sanitize' ) )
{
	function oss_checkbox_sanitize( $checked ) {

		return ( ( isset( $checked ) && true === $checked ) ? true : false );

	}
}