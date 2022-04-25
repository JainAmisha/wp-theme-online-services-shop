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
			require OSS_THEME_DIR.'/inc/class-accordion-control.php';

			$this->description_settings($wp_customize);
			$this->image_settings($wp_customize);
			$this->features_section_settings($wp_customize);
			$this->about_section_settings($wp_customize);
			$this->services_section_settings($wp_customize);

			require OSS_THEME_DIR.'/inc/sanitize.php';
			require OSS_THEME_DIR.'/inc/active-callback.php';
			require OSS_THEME_DIR.'/inc/selectors/logo-selector.php';
			require OSS_THEME_DIR.'/inc/selectors/description-selector.php';
		}

		public function description_settings($wp_customize)
		{
			// Panel
			$wp_customize->add_panel('front_page_sections', array(
				'title' 	=> __( 'FrontPage Sections', 'online_services_shop' ),
					'priority' 	=> 2,
					'capability' => 'edit_theme_options',
				)
			);

			// Section
			$wp_customize->add_section(
				'frontpage_descriptions',
				array(
					'title'    	=> __( 'Descriptions' ),
					'priority' 	=> 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_sections',
				)
			);

			// Short Description Setting
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
					'section' => 'frontpage_descriptions',
					'settings' => 'theme_options[short_description_setting]',
					'type' => 'textarea'
				)
			);
		}

		public function image_settings($wp_customize)
		{
			$wp_customize->add_section(
				'frontpage_custom_image', 
				array(
					'title'      => __('Images','oss'),
					'priority'   => 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_sections',
				) 
			);

			$wp_customize->add_setting( 'theme_options[oss_banner_image_right]',array(
				'capability' 			=> 'edit_theme_options'
			) );

			$wp_customize->add_control(
				new WP_Customize_Cropped_Image_Control
					(
						$wp_customize,
						'theme_options[oss_banner_image_right]', 
						array(
							'label'		  => __('Banner Section Image', 'oss'),
							'description' => __('Please select square image with dimensions around be 546 × 519 pixels.', 'oss'),
							'section'	  => 'frontpage_custom_image',
							'width'		  => 546, // cropper Width
							'height'	  => 519 // cropper Height
						)
					)
			);

		}

		public function features_section_settings($wp_customize)
		{
			$wp_customize->add_section(
				'frontpage_features_section',
				array(
					'title'    	=> __( 'Features Section' ),
					'priority' 	=> 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_sections',
				)
			);


			// 2. Number of items
			$wp_customize->add_setting('theme_options[oss_number_of_features]', 
				array(
				'default' 			=> $this->defaults['oss_number_of_features'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'oss_sanitize_number_range'
				)
			);

			$wp_customize->add_control('theme_options[oss_number_of_features]', 
				array(
				'label'       => __('Number Of Features', 'oss'),
				'description' => __('Save & Refresh the customizer to see its effect. Maximum is 4.', 'oss'),
				'section'     => 'frontpage_features_section',   
				'settings'    => 'theme_options[oss_number_of_features]',
				'type'        => 'number',
				'input_attrs' => array(
						'min'	=> 2,
						'max'	=> 4,
						'step'	=> 1,
					),
				)
			);

			$oss_number_of_features = oss_get_option( 'oss_number_of_features' );

			for( $i=1; $i<=$oss_number_of_features; $i++ )
			{
				// Heading
				$wp_customize->add_setting('theme_options[oss_feature_heading'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					)
				);

				$wp_customize->add_control('theme_options[oss_feature_heading'.$i.']', 
					array(
					'label'       => sprintf( __('Feature Heading #%1$s', 'oss'), $i),
					'section'     => 'frontpage_features_section',   
					'settings'    => 'theme_options[oss_feature_heading'.$i.']',
					'type'        => 'text'
					)
				);

				// Description
				$wp_customize->add_setting('theme_options[oss_feature_description'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_textarea_field'
					)
				);

				$wp_customize->add_control('theme_options[oss_feature_description'.$i.']', 
					array(
					'label'       => sprintf( __('Feature Description #%1$s', 'oss'), $i),
					'section'     => 'frontpage_features_section',   
					'settings'    => 'theme_options[oss_feature_description'.$i.']',
					'type'        => 'textarea'
					)
				);

				// Image
				$wp_customize->add_setting( 'theme_options[oss_feature_image'.$i.']',array(
					// 'sanitize_callback'		=> 'esc_url_raw',
					'capability' 			=> 'edit_theme_options'
				));

				$wp_customize->add_control(
					new WP_Customize_Cropped_Image_Control
					(
						$wp_customize,
						'theme_options[oss_feature_image'.$i.']', 
						array(
							'label'			=> sprintf( __('Feature Image #%1$s', 'oss'), $i),
							'description' 	=> __('Image dimensions should be 70×70 pixels.', 'oss'),
							'section'		=> 'frontpage_features_section',
							'height'		=> 70, // cropper Height
							'width'			=> 70
						)
					)
				);
			}
		}

		public function about_section_settings($wp_customize)
		{
			$wp_customize->add_section(
				'frontpage_about_section', 
				array(
					'title'      => __('About Section','oss'),
					'priority'   => 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_sections',
				) 
			);

			// Heading
			$wp_customize->add_setting('theme_options[oss_about_section_heading]', 
				array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control('theme_options[oss_about_section_heading]', 
				array(
				'label'       => __('Section Heading', 'oss'),
				'section'     => 'frontpage_about_section',   
				'settings'    => 'theme_options[oss_about_section_heading]',
				'type'        => 'text'
				)
			);

			// Description
			$wp_customize->add_setting('theme_options[oss_about_section_description]', 
				array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_textarea_field',
				)
			);

			$wp_customize->add_control('theme_options[oss_about_section_description]', 
				array(
				'label'       => __('Section Description', 'oss'),
				'section'     => 'frontpage_about_section',   
				'settings'    => 'theme_options[oss_about_section_description]',
				'type'        => 'textarea'
				)
			);

			// Image
			$wp_customize->add_setting( 'theme_options[oss_about_section_image_left]',array(
				// 'sanitize_callback'		=> 'esc_url_raw',
				'capability' 			=> 'edit_theme_options'
			));

			$wp_customize->add_control(
				new WP_Customize_Cropped_Image_Control
				(
					$wp_customize,
					'theme_options[oss_about_section_image_left]', 
					array(
						'label'		=> __('Section Image', 'oss'),
						'description' => __('Image dimensions should be 570×399 pixels.', 'oss'),
						'section'	=> 'frontpage_about_section',
						'width'		=> 570,
						'height'	=> 399 // cropper Height
					)
				)
			);

			$progress_bars = 3;

			for( $i=1; $i<=$progress_bars; $i++ )
			{
				// Heading
				$wp_customize->add_setting('theme_options[oss_progress_bar_heading'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					)
				);

				$wp_customize->add_control('theme_options[oss_progress_bar_heading'.$i.']', 
					array(
					'label'       => sprintf( __('Progress Bar Heading #%1$s', 'oss'), $i),
					'section'     => 'frontpage_about_section',   
					'settings'    => 'theme_options[oss_progress_bar_heading'.$i.']',
					'type'        => 'text'
					)
				);

				// Precentage
				$wp_customize->add_setting('theme_options[oss_progress_bar_value'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'absint'
					)
				);

				$wp_customize->add_control('theme_options[oss_progress_bar_value'.$i.']', 
					array(
					'label'       => sprintf( __('Progress Bar Value #%1$s', 'oss'), $i),
					'description' => __('Percentage(%)', 'oss'),
					'section'     => 'frontpage_about_section',   
					'settings'    => 'theme_options[oss_progress_bar_value'.$i.']',
					'type'        => 'number'
					)
				);
			}

		}

		public function services_section_settings($wp_customize)
		{
			$wp_customize->add_section(
				'frontpage_services_section', 
				array(
					'title'      => __('Services Section','oss'),
					'priority'   => 20,
					'capability' => 'edit_theme_options',
					'panel'		=>'front_page_sections',
				) 
			);

			// Heading
			$wp_customize->add_setting('theme_options[oss_services_section_heading]', 
				array(
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
				)
			);

			$wp_customize->add_control('theme_options[oss_services_section_heading]', 
				array(
				'label'       => __('Section Heading', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_services_section_heading]',
				'type'        => 'text'
				)
			);


			// 2. Number of items
			$wp_customize->add_setting('theme_options[oss_number_of_services]', 
				array(
				'default' 			=> $this->defaults['oss_number_of_services'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'oss_sanitize_number_range'
				)
			);

			$wp_customize->add_control('theme_options[oss_number_of_services]', 
				array(
				'label'       => __('Number Of Services', 'oss'),
				'description' => __('Save & Refresh the customizer to see its effect. Maximum is 15.', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_number_of_services]',
				'type'        => 'number',
				'input_attrs' => array(
						'min'	=> 1,
						'max'	=> 15,
						'step'	=> 1,
					),
				)
			);

			$wp_customize->add_setting('theme_options[oss_display_whatsapp_button]', 
				array(
				'default' 			=> $this->defaults['oss_display_whatsapp_button'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'oss_checkbox_sanitize'
				)
			);

			$wp_customize->add_control('theme_options[oss_display_whatsapp_button]', 
				array(
				'label'       => __('Whatsapp Button Enable', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_display_whatsapp_button]',
				'type'        => 'checkbox',
				)
			);

			$wp_customize->add_setting('theme_options[oss_service_section_whatsapp_link]', 
				array(
				'default'           => $this->defaults['oss_service_section_whatsapp_link'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',	
				'sanitize_callback' => 'sanitize_url'
				)
			);

			$wp_customize->add_control('theme_options[oss_service_section_whatsapp_link]', 
				array(
				'label'       => __('Whatsapp Link', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_service_section_whatsapp_link]',	
				'active_callback' => 'oss_whatsapp_icon_active',		
				'type'        => 'url'
				)
			);

			$wp_customize->add_setting('theme_options[oss_display_call_button]', 
				array(
				'default' 			=> $this->defaults['oss_display_call_button'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'oss_checkbox_sanitize'
				)
			);

			$wp_customize->add_control('theme_options[oss_display_call_button]', 
				array(
				'label'       => __('Call Button Enable', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_display_call_button]',
				'type'        => 'checkbox',
				)
			);

			$wp_customize->add_setting('theme_options[oss_service_section_call_link]', 
				array(
				'default'           => $this->defaults['oss_service_section_call_link'],
				'type'              => 'theme_mod',
				'capability'        => 'edit_theme_options',	
				'sanitize_callback' => 'sanitize_url'
				)
			);

			$wp_customize->add_control('theme_options[oss_service_section_call_link]', 
				array(
				'label'       => __('Call Link', 'oss'),
				'section'     => 'frontpage_services_section',   
				'settings'    => 'theme_options[oss_service_section_call_link]',	
				'active_callback' => 'oss_call_icon_active',		
				'type'        => 'url'
				)
			);


			$wp_customize->add_setting( 'theme_options[accordion]',array(
				'capability' 			=> 'edit_theme_options'
			));

			$wp_customize->add_control(
				new WP_OSS_Accordion_Customize_Control
				(
					$wp_customize,
					'theme_options[accordion]', 
					array(
						'label'			=> __('Test', 'oss'),
						'section'		=> 'frontpage_services_section',
					)
				)
			);

			$oss_number_of_services = oss_get_option( 'oss_number_of_services' );

			for( $i=1; $i<=$oss_number_of_services; $i++ )
			{
				// Heading
				$wp_customize->add_setting('theme_options[oss_service_heading'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_text_field',
					)
				);

				$wp_customize->add_control('theme_options[oss_service_heading'.$i.']', 
					array(
					'label'       => sprintf( __('Service Heading #%1$s', 'oss'), $i),
					'section'     => 'frontpage_services_section',   
					'settings'    => 'theme_options[oss_service_heading'.$i.']',
					'type'        => 'text'
					)
				);

				// Description
				$wp_customize->add_setting('theme_options[oss_service_description'.$i.']', 
					array(
					'type'              => 'theme_mod',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'sanitize_textarea_field'
					)
				);

				$wp_customize->add_control('theme_options[oss_service_description'.$i.']', 
					array(
					'label'       => sprintf( __('Service Description #%1$s', 'oss'), $i),
					'section'     => 'frontpage_services_section',   
					'settings'    => 'theme_options[oss_service_description'.$i.']',
					'type'        => 'textarea'
					)
				);

				// Image
				$wp_customize->add_setting( 'theme_options[oss_service_image'.$i.']',array(
					// 'sanitize_callback'		=> 'esc_url_raw',
					'capability' 			=> 'edit_theme_options'
				));

				$wp_customize->add_control(
					new WP_Customize_Cropped_Image_Control
					(
						$wp_customize,
						'theme_options[oss_service_image'.$i.']', 
						array(
							'label'			=> sprintf( __('Service Image #%1$s', 'oss'), $i),
							'description' 	=> __('Image dimensions should be 286×180 pixels.', 'oss'),
							'section'		=> 'frontpage_services_section',
							'width'			=> 286,
							'height'		=> 180
						)
					)
				);
			}

		}
	}
	new Online_Services_Shop_Custom_Options();
}