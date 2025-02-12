<?php

class TeamMember extends ET_Builder_Module {

	function init() {
		$this->name       = esc_html__( 'Team member', 'et_builder' );
		$this->plural     = esc_html__( 'Team Members', 'et_builder' );
		$this->slug       = 'divi_team_member';
		$this->vb_support = 'on';

		$this->main_css_element = '%%order_class%%.divi_team_member';

		$this->settings_modal_toggles = array(
			'general'  => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'et_builder' ),
					'image'        => esc_html__( 'Image', 'et_builder' ),
				),
			),
			'advanced' => array(
				'toggles' => array(
					'icon'  => esc_html__( 'Icon', 'et_builder' ),
					'image' => esc_html__( 'Image', 'et_builder' ),
					'text'  => array(
						'title'    => esc_html__( 'Text', 'et_builder' ),
						'priority' => 49,
					),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'animation' => array(
						'title'    => esc_html__( 'Animation', 'et_builder' ),
						'priority' => 90,
					),
				),
			),
		);

		$this->advanced_fields = array(
			'fonts'                 => array(
				'header' => array(
					'label'    => esc_html__( 'Title', 'et_builder' ),
					'css'      => array(
						'main'      => "{$this->main_css_element} h4, {$this->main_css_element} h1.et_pb_module_header, {$this->main_css_element} h2.et_pb_module_header, {$this->main_css_element} h3.et_pb_module_header, {$this->main_css_element} h5.et_pb_module_header, {$this->main_css_element} h6.et_pb_module_header",
						'important' => 'plugin_only',
					),
					'header_level' => array(
						'default' => 'h4',
					),
				),
				'body'   => array(
					'label'    => esc_html__( 'Body', 'et_builder' ),
					'css'      => array(
						'main' => "{$this->main_css_element} *",
					),
				),
			),
			'background'            => array(
				'settings' => array(
					'color' => 'alpha',
				),
			),
			'borders'               => array(
				'default' => array(),
				'image' => array(
					'css'          => array(
						'main' => array(
							'border_radii'  => "{$this->main_css_element} .et_pb_team_member_image",
							'border_styles' => "{$this->main_css_element} .et_pb_team_member_image",
						),
					),
					'label_prefix' => esc_html__( 'Image', 'et_builder' ),
					'tab_slug'     => 'advanced',
					'toggle_slug'  => 'image',
				),
			),
			'box_shadow'            => array(
				'default' => array(),
				'image'   => array(
					'label'           => esc_html__( 'Image Box Shadow', 'et_builder' ),
					'option_category' => 'layout',
					'tab_slug'        => 'advanced',
					'toggle_slug'     => 'image',
					'css'          => array(
						'main'         => '%%order_class%% .et_pb_team_member_image',
						'custom_style' => true,
					),
					'default_on_fronts'  => array(
						'color'    => '',
						'position' => '',
					),
				),
			),
			'margin_padding' => array(
				'css' => array(
					'important' => 'all',
				),
			),
			'max_width'             => array(
				'css' => array(
					'module_alignment' => '%%order_class%%.et_pb_team_member.et_pb_module',
				),
			),
			'text'                  => array(
				'use_background_layout' => true,
				'options' => array(
					'background_layout' => array(
						'default' => 'light',
					),
				),
			),
			'filters'               => array(
				'css' => array(
					'main' => '%%order_class%%',
				),
				'child_filters_target' => array(
					'tab_slug' => 'advanced',
					'toggle_slug' => 'image',
				),
			),
			'image'                 => array(
				'css' => array(
					'main' => '%%order_class%% .et_pb_team_member_image',
				),
			),
			'button'                => false,
		);

		$this->custom_css_fields = array(
			'member_image' => array(
				'label'    => esc_html__( 'Member Image', 'et_builder' ),
				'selector' => '.et_pb_team_member_image',
			),
			'member_description' => array(
				'label'    => esc_html__( 'Member Description', 'et_builder' ),
				'selector' => '.et_pb_team_member_description',
			),
			'title' => array(
				'label'    => esc_html__( 'Title', 'et_builder' ),
				'selector' => '.et_pb_team_member_description h4',
			),
			'member_position' => array(
				'label'    => esc_html__( 'Member Position', 'et_builder' ),
				'selector' => '.et_pb_member_position',
			),
			'member_social_links' => array(
				'label'    => esc_html__( 'Member Social Links', 'et_builder' ),
				'selector' => '.team-soc',
			),
		);

		$this->help_videos = array(
			array(
				'id'   => esc_html( 'rrKmaQ0n7Hw' ),
				'name' => esc_html__( 'An introduction to the Person module', 'et_builder' ),
			),
		);
	}

	function get_fields() {
		$fields = array(
			'name' => array(
				'label'           => esc_html__( 'Name', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the name of the person', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'position' => array(
				'label'           => esc_html__( 'Position', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( "Input the person's position.", 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'image_url' => array(
				'label'              => esc_html__( 'Image URL', 'et_builder' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'et_builder' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'et_builder' ),
				'update_text'        => esc_attr__( 'Set As Image', 'et_builder' ),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'et_builder' ),
				'toggle_slug'        => 'image',
			),
			'facebook_url' => array(
				'label'           => esc_html__( 'Facebook Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input Facebook Profile Url.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'twitter_url' => array(
				'label'           => esc_html__( 'Twitter Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input Twitter Profile Url', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'google_url' => array(
				'label'           => esc_html__( 'Google+ Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input Google+ Profile Url', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'linkedin_url' => array(
				'label'           => esc_html__( 'LinkedIn Profile Url', 'et_builder' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input LinkedIn Profile Url', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'content' => array(
				'label'           => esc_html__( 'Description', 'et_builder' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input the main text content for your module here.', 'et_builder' ),
				'toggle_slug'     => 'main_content',
			),
			'icon_color' => array(
				'label'             => esc_html__( 'Icon Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon',
			),
			'icon_hover_color' => array(
				'label'             => esc_html__( 'Icon Hover Color', 'et_builder' ),
				'type'              => 'color-alpha',
				'custom_color'      => true,
				'tab_slug'          => 'advanced',
				'toggle_slug'       => 'icon',
			),
		);

		return $fields;
	}

	function render( $attrs, $content = null, $render_slug ) {
		$name              = $this->props['name'];
		$position          = $this->props['position'];
		$image_url         = $this->props['image_url'];
		$animation         = $this->props['animation'];
		$facebook_url      = $this->props['facebook_url'];
		$twitter_url       = $this->props['twitter_url'];
		$google_url        = $this->props['google_url'];
		$linkedin_url      = $this->props['linkedin_url'];
		$background_layout = $this->props['background_layout'];
		$icon_color        = $this->props['icon_color'];
		$icon_hover_color  = $this->props['icon_hover_color'];
		$header_level      = $this->props['header_level'];

		$image = $social_links = '';

		if ( '' !== $icon_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .team-soc a',
				'declaration' => sprintf(
					'color: %1$s !important;',
					esc_html( $icon_color )
				),
			) );
		}

		if ( '' !== $icon_hover_color ) {
			ET_Builder_Element::set_style( $render_slug, array(
				'selector'    => '%%order_class%% .team-soc a:hover',
				'declaration' => sprintf(
					'color: %1$s !important;',
					esc_html( $icon_hover_color )
				),
			) );
		}

		if ( '' !== $facebook_url ) {
			$social_links .= sprintf(
				'<a href="%1$s" class="et_pb_font_icon et_pb_facebook_icon"><span>%2$s</span></a>',
				esc_url( $facebook_url ),
				esc_html__( 'Facebook', 'et_builder' )
			);
		}

		if ( '' !== $twitter_url ) {
			$social_links .= sprintf(
				'<a href="%1$s" class="et_pb_font_icon et_pb_twitter_icon"><span>%2$s</span></a>',
				esc_url( $twitter_url ),
				esc_html__( 'Twitter', 'et_builder' )
			);
		}

		if ( '' !== $google_url ) {
			$social_links .= sprintf(
				'<a href="%1$s" class="et_pb_font_icon et_pb_google_icon"><span>%2$s</span></a>',
				esc_url( $google_url ),
				esc_html__( 'Google+', 'et_builder' )
			);
		}

		if ( '' !== $linkedin_url ) {
			$social_links .= sprintf(
				'<a href="%1$s" class="et_pb_font_icon et_pb_linkedin_icon"><span>%2$s</span></a>',
				esc_url( $linkedin_url ),
				esc_html__( 'LinkedIn', 'et_builder' )
			);
		}

		if ( '' !== $social_links ) {
			$social_links = sprintf( '<div class="team-soc">%1$s</div>', $social_links );
		}

		// Added for backward compatibility
		if ( empty( $animation ) ) {
			$animation = 'top';
		}

		if ( '' !== $image_url ) {
			// Images: Add CSS Filters and Mix Blend Mode rules (if set)
			if ( array_key_exists( 'image', $this->advanced_fields ) && array_key_exists( 'css', $this->advanced_fields['image'] ) ) {
				$generate_css_filters_image = $this->generate_css_filters(
					$render_slug,
					'child_',
					self::$data_utils->array_get( $this->advanced_fields['image']['css'], 'main', '%%order_class%%' )
				);
			}

			$image_pathinfo = pathinfo( $image_url );
			$is_image_svg   = isset( $image_pathinfo['extension'] ) ? 'svg' === $image_pathinfo['extension'] : false;

			$image = sprintf(
				'<img src="%1$s" alt="%2$s" />',
				esc_attr( $image_url ),
				esc_attr( $name ),
				esc_attr( " et_pb_animation_{$animation}" ),
				$generate_css_filters_image,
				$is_image_svg ? esc_attr( " et-svg" ) : ''
			);
		}

		$video_background = $this->video_background();
		$parallax_image_background = $this->get_parallax_image_background();

		// Module classnames
		$this->add_classname( array(
			"et_pb_bg_layout_{$background_layout}",
			'clearfix',
			$this->get_text_orientation_classname()
		) );

		$output = sprintf(
			'<div class="members">
				%9$s
				%8$s
				%2$s
				<div class="team-det">
					%5$s
					%6$s
					%1$s
				</div>
				%7$s <!-- .et_pb_team_member_description -->
			</div> <!-- .et_pb_team_member -->',
			$this->content,
			( '' !== $image ? $image : '' ),
			$this->module_id(),
			$this->module_classname( $render_slug ),
			( '' !== $name ? sprintf( '<%1$s>%2$s</%1$s>', et_pb_process_header_level( $header_level, 'h5' ), esc_html( $name ) ) : '' ),
			( '' !== $position ? sprintf( '<h6>%1$s</h6>', esc_html( $position ) ) : '' ),
			$social_links,
			$video_background,
			$parallax_image_background
		);

		return $output;
	}
}

new TeamMember;
