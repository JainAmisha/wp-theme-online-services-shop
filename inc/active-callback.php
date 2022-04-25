<?php
// active callbacks

if(!function_exists('oss_whatsapp_icon_active')){
	function oss_whatsapp_icon_active( $control ) {
		if( $control->manager->get_setting( 'theme_options[oss_display_whatsapp_button]' )->value() == true ) {
			return true;
		}else{
			return false;
		}
	}
}

if(!function_exists('oss_call_icon_active')){
	function oss_call_icon_active( $control )
	{
		if( $control->manager->get_setting( 'theme_options[oss_display_call_button]' )->value() == true ) {
			return true;
		}else{
			return false;
		}
		return false;
	}
}