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

			$this->description_settings($wp_customize);
			$this->image_settings($wp_customize);
			$this->features_settings($wp_customize);
			$this->about_section_settings($wp_customize);
		
			require OSS_THEME_DIR.'/inc/sanitize.php';
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

		public function features_settings($wp_customize)
		{
			$wp_customize->add_section(
				'frontpage_features_section',
				array(
					'title'    	=> __( 'Features' ),
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
							'label'		=> __('Feature Image', 'oss'),
							'description' => __('Image dimensions should be 70×70 pixels.', 'oss'),
							'section'	=> 'frontpage_features_section',
							'height'	=> 70, // cropper Height
							'width'		=> 70
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
	}
	new Online_Services_Shop_Custom_Options();
}