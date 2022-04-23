<?php
if (class_exists( 'WP_Customize_Control'))
{
	class Online_Services_Shop_Custom_Options extends WP_Customize_Control
	{
		public function __construct(){
			add_action( 'customize_register', array( $this, 'register_controls' ) );

			$this->defaults = theme_default_values();
		}

		public function register_controls()
		{
			global $wp_customize;
			$wp_customize->add_panel('front_page_panel', array(
					'title' 	=> __( 'Theme Options', 'online_services_shop' ),
					'priority' 	=> 2,
					'capability' => 'edit_theme_options',
				)
			);

			$wp_customize->add_section(
				'frontpage_custom_data',
				array(
					'title'    	=> __( 'FrontPage Custom Data' ),
					'priority' 	=> 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_panel',
				)
			);

			$wp_customize->add_setting( 'theme_options[short_description_setting]', array(
				'default'    		=> $this->defaults['short_description_setting'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_textarea_field',
			) );

			$wp_customize->add_control(
				'short_description',
				array(
					'label'   => __( 'Short Description' ),
					'section' => 'frontpage_custom_data',
					'settings' => 'theme_options[short_description_setting]',
					'type' => 'textarea'
				)
			);

			$wp_customize->add_setting( 'theme_options[long_description_setting]', array(
				'default'    		=> $this->defaults['long_description_setting'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_textarea_field',
			) );

			$wp_customize->add_control(
				'long_description',
				array(
					'label'   => __( 'Long Description' ),
					'section' => 'frontpage_custom_data',
					'settings' => 'theme_options[long_description_setting]',
					'type' => 'textarea'
				)
			);

			require get_theme_file_path('/inc/selectors/logo-selector.php');
			require get_theme_file_path('/inc/selectors/description-selector.php');
		}
	}
	new Online_Services_Shop_Custom_Options();
}