<?php

function oss_customize_partial_name() {
	bloginfo( 'name' );
}

function oss_customize_partial_description() {
	bloginfo( 'description' );
}
	
function oss_short_description_render_callback() {
    return get_theme_mod( 'theme_options[short_description_setting]' );
}

function oss_about_section_description_render_callback() {
    return get_theme_mod( 'theme_options[oss_about_section_description]' );
}