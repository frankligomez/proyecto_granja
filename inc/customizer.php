<?php
/**
 * Theme Customizer.
 *
 * @package Epagreenlite
 */

/**
 * Retrieve a holder for Customizer options.
 *
 * @since  1.0.0
 * @return array
 */

function epagreenlite_get_customizer_options() {
	/**
	 * Filter a holder for Customizer options (for theme/plugin developer customization).
	 *
	 * @since 1.0.0
	 */
	return apply_filters( 'epagreenlite-theme/customizer/options' , array(
		'prefix'        => 'epagreenlite',
		'path'          => get_theme_file_path( 'framework/modules/customizer/' ),
		'capability'    => 'edit_theme_options',
		'type'          => 'theme_mod',
		'fonts_manager' => new CX_Fonts_Manager(),
		'options'       => array(

			/** `Site Indentity` section */
			'logo_image' => array(
				'title'   => esc_html__( 'Logo', 'epagreenlite' ),
				'section' => 'title_tagline',
				'field'   => 'image',
				'type'    => 'control',
			),
			'retina_logo_image' => array(
				'title'   => esc_html__( 'Retina Logo', 'epagreenlite' ),
				'section' => 'title_tagline',
				'field'   => 'image',
				'type'    => 'control',
			),
			'show_tagline' => array(
				'title'    => esc_html__( 'Show tagline on top panel', 'epagreenlite' ),
				'section'  => 'title_tagline',
				'priority' => 60,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'page_preloader' => array(
				'title'    => esc_html__( 'Show page preloader', 'epagreenlite' ),
				'section'  => 'title_tagline',
				'priority' => 62,
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),

			'general_settings' => array(
				'title'       => esc_html__( 'General Site settings', 'epagreenlite' ),
				'priority'    => 40,
				'type'        => 'panel',
			),

			/** `Favicon` section */
			'favicon' => array(
				'title'       => esc_html__( 'Favicon', 'epagreenlite' ),
				'priority'    => 25,
				'panel'       => 'general_settings',
				'type'        => 'section',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs' => array(
				'title'    => esc_html__( 'Breadcrumbs', 'epagreenlite' ),
				'priority' => 30,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'breadcrumbs_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs', 'epagreenlite' ),
				'section' => 'breadcrumbs',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_front_visibillity' => array(
				'title'   => esc_html__( 'Enable Breadcrumbs on front page', 'epagreenlite' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_page_title' => array(
				'title'   => esc_html__( 'Enable page title in breadcrumbs area', 'epagreenlite' ),
				'section' => 'breadcrumbs',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'breadcrumbs_path_type' => array(
				'title'   => esc_html__( 'Show full/minified path', 'epagreenlite' ),
				'section' => 'breadcrumbs',
				'default' => 'minified',
				'field'   => 'select',
				'choices' => array(
					'full'     => esc_html__( 'Full', 'epagreenlite' ),
					'minified' => esc_html__( 'Minified', 'epagreenlite' ),
				),
				'type'    => 'control',
			),

			/** `Social links` section */
			'social_links' => array(
				'title'    => esc_html__( 'Social links', 'epagreenlite' ),
				'priority' => 50,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'header_social_links' => array(
				'title'   => esc_html__( 'Show social links in header', 'epagreenlite' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'footer_social_links' => array(
				'title'   => esc_html__( 'Show social links in footer', 'epagreenlite' ),
				'section' => 'social_links',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Page Layout` section */
			'page_layout' => array(
				'title'    => esc_html__( 'Page Layout', 'epagreenlite' ),
				'priority' => 55,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),
			'container_type' => array(
				'title'   => esc_html__( 'Container type', 'epagreenlite' ),
				'section' => 'page_layout',
				'default' => 'fullwidth',
				'field'   => 'select',
				'choices' => array(
					'boxed'     => esc_html__( 'Boxed', 'epagreenlite' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'sidebar_width' => array(
				'title'   => esc_html__( 'Sidebar width', 'epagreenlite' ),
				'section' => 'page_layout',
				'default' => '1/3',
				'field'   => 'select',
				'choices' => array(
					'1/3' => '1/3',
					'1/4' => '1/4',
				),
				'sanitize_callback' => 'sanitize_text_field',
				'type'              => 'control',
			),

			/** `ToTop button` section */
			'totop_button' => array(
				'title'    => esc_html__( 'ToTop button', 'epagreenlite' ),
				'priority' => 60,
				'type'     => 'section',
				'panel'    => 'general_settings',
			),

			'totop_visibility' => array(
				'title'    => esc_html__( 'Show ToTop button', 'epagreenlite' ),
				'section'  => 'totop_button',
				'default'  => true,
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'totop_vertical_padding' => array(
				'title'       => esc_html__( 'Vertical Padding, px', 'epagreenlite' ),
				'section'     => 'totop_button',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_horizontal_padding' => array(
				'title'       => esc_html__( 'Horizontal Padding, px', 'epagreenlite' ),
				'section'     => 'totop_button',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_border_radius' => array(
				'title'   => esc_html__( 'Border Radius, px', 'epagreenlite' ),
				'section' => 'totop_button',
				'default' => '0',
				'field'   => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_bg_color' => array(
				'title'   => esc_html__( 'Background Color', 'epagreenlite' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_icon_color' => array(
				'title'   => esc_html__( 'Icon Color', 'epagreenlite' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_bg_color_hover' => array(
				'title'   => esc_html__( 'Background Color Hover', 'epagreenlite' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			'totop_icon_color_hover' => array(
				'title'   => esc_html__( 'Icon Color Hover', 'epagreenlite' ),
				'section' => 'totop_button',
				'default' => false,
				'field'   => 'hex_color',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_totop_enable',
			),

			/** `Color Scheme` panel */
			'color_scheme' => array(
				'title'       => esc_html__( 'Color Scheme', 'epagreenlite' ),
				'description' => esc_html__( 'Configure Color Scheme', 'epagreenlite' ),
				'priority'    => 40,
				'type'        => 'section',
			),

			'accent_color' => array(
				'title'   => esc_html__( 'Accent color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#398ffc',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'primary_text_color' => array(
				'title'   => esc_html__( 'Primary Text color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'secondary_text_color' => array(
				'title'   => esc_html__( 'Secondary Text color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#a1a2a4',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'invert_text_color' => array(
				'title'   => esc_html__( 'Invert Text color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_color' => array(
				'title'   => esc_html__( 'Link color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#398ffc',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'link_hover_color' => array(
				'title'   => esc_html__( 'Link hover color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h1_color' => array(
				'title'   => esc_html__( 'H1 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h2_color' => array(
				'title'   => esc_html__( 'H2 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h3_color' => array(
				'title'   => esc_html__( 'H3 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h4_color' => array(
				'title'   => esc_html__( 'H4 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h5_color' => array(
				'title'   => esc_html__( 'H5 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),
			'h6_color' => array(
				'title'   => esc_html__( 'H6 color', 'epagreenlite' ),
				'section' => 'color_scheme',
				'default' => '#3b3d42',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** `Typography Settings` panel */
			'typography' => array(
				'title'       => esc_html__( 'Typography', 'epagreenlite' ),
				'description' => esc_html__( 'Configure typography settings', 'epagreenlite' ),
				'priority'    => 45,
				'type'        => 'panel',
			),

			/** `Body text` section */
			'body_typography' => array(
				'title'       => esc_html__( 'Body text', 'epagreenlite' ),
				'priority'    => 5,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'body_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'body_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'body_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'body_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'body_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'body_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'body_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'body_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'body_typography',
				'default'     => '1.6',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'body_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'body_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'body_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'body_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'body_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'body_typography',
				'default' => 'left',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H1 Heading` section */
			'h1_typography' => array(
				'title'       => esc_html__( 'H1 Heading', 'epagreenlite' ),
				'priority'    => 10,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h1_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h1_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h1_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h1_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h1_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h1_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h1_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h1_typography',
				'default'     => '56',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h1_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h1_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h1_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h1_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h1_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h1_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h1_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H2 Heading` section */
			'h2_typography' => array(
				'title'       => esc_html__( 'H2 Heading', 'epagreenlite' ),
				'priority'    => 15,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h2_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h2_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h2_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h2_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h2_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h2_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h2_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h2_typography',
				'default'     => '40',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h2_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h2_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h2_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h2_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h2_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h2_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h2_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H3 Heading` section */
			'h3_typography' => array(
				'title'       => esc_html__( 'H3 Heading', 'epagreenlite' ),
				'priority'    => 20,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h3_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h3_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h3_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h3_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h3_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h3_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h3_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h3_typography',
				'default'     => '28',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h3_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h3_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h3_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h3_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h3_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h3_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h3_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H4 Heading` section */
			'h4_typography' => array(
				'title'       => esc_html__( 'H4 Heading', 'epagreenlite' ),
				'priority'    => 25,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h4_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h4_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h4_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h4_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h4_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h4_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h4_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h4_typography',
				'default'     => '20',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h4_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h4_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h4_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h4_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h4_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h4_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h4_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H5 Heading` section */
			'h5_typography' => array(
				'title'       => esc_html__( 'H5 Heading', 'epagreenlite' ),
				'priority'    => 30,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h5_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h5_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h5_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h5_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h5_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h5_typography',
				'default' => '300',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h5_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h5_typography',
				'default'     => '18',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h5_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h5_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h5_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h5_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h5_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h5_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h5_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `H6 Heading` section */
			'h6_typography' => array(
				'title'       => esc_html__( 'H6 Heading', 'epagreenlite' ),
				'priority'    => 35,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'h6_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'h6_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'h6_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'h6_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'h6_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'h6_typography',
				'default' => '500',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'h6_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'h6_typography',
				'default'     => '14',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 10,
					'max'  => 200,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'h6_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'h6_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'h6_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'h6_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'h6_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			'h6_text_align' => array(
				'title'   => esc_html__( 'Text Align', 'epagreenlite' ),
				'section' => 'h6_typography',
				'default' => 'inherit',
				'field'   => 'select',
				'choices' => epagreenlite_get_text_aligns(),
				'type'    => 'control',
			),

			/** `Logo text` section */
			'logo_typography' => array(
				'title'       => esc_html__( 'Logo text', 'epagreenlite' ),
				'priority'    => 40,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'header_logo_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'epagreenlite' ),
				'section'         => 'logo_typography',
				'default'         => 'Montserrat, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'header_logo_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'epagreenlite' ),
				'section'         => 'logo_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_styles(),
				'type'            => 'control',
			),
			'header_logo_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section'         => 'logo_typography',
				'default'         => '700',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_weight(),
				'type'            => 'control',
			),
			'header_logo_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'         => 'logo_typography',
				'default'         => '26',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'header_logo_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'epagreenlite' ),
				'section'         => 'logo_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => epagreenlite_get_character_sets(),
				'type'            => 'control',
			),

			/** `Menu` section */
			'menu_typography' => array(
				'title'       => esc_html__( 'Menu', 'epagreenlite' ),
				'priority'    => 45,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'menu_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'epagreenlite' ),
				'section'         => 'menu_typography',
				'default'         => 'Roboto, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'menu_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'epagreenlite' ),
				'section'         => 'menu_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_styles(),
				'type'            => 'control',
			),
			'menu_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section'         => 'menu_typography',
				'default'         => '400',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_weight(),
				'type'            => 'control',
			),
			'menu_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'         => 'menu_typography',
				'default'         => '14',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'menu_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'menu_typography',
				'default'     => '1.4',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'menu_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'menu_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'menu_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'epagreenlite' ),
				'section'         => 'menu_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => epagreenlite_get_character_sets(),
				'type'            => 'control',
			),

			/** `Breadcrumbs` section */
			'breadcrumbs_typography' => array(
				'title'       => esc_html__( 'Breadcrumbs', 'epagreenlite' ),
				'priority'    => 50,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'breadcrumbs_font_family' => array(
				'title'   => esc_html__( 'Font Family', 'epagreenlite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'Roboto, sans-serif',
				'field'   => 'fonts',
				'type'    => 'control',
			),
			'breadcrumbs_font_style' => array(
				'title'   => esc_html__( 'Font Style', 'epagreenlite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'normal',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_styles(),
				'type'    => 'control',
			),
			'breadcrumbs_font_weight' => array(
				'title'   => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section' => 'breadcrumbs_typography',
				'default' => '400',
				'field'   => 'select',
				'choices' => epagreenlite_get_font_weight(),
				'type'    => 'control',
			),
			'breadcrumbs_font_size' => array(
				'title'       => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '11',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '1.5',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'breadcrumbs_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'breadcrumbs_typography',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'breadcrumbs_character_set' => array(
				'title'   => esc_html__( 'Character Set', 'epagreenlite' ),
				'section' => 'breadcrumbs_typography',
				'default' => 'latin',
				'field'   => 'select',
				'choices' => epagreenlite_get_character_sets(),
				'type'    => 'control',
			),
			/** `Button` section */
			'button_typography' => array(
				'title'       => esc_html__( 'Button', 'epagreenlite' ),
				'priority'    => 55,
				'panel'       => 'typography',
				'type'        => 'section',
			),
			'button_font_family' => array(
				'title'           => esc_html__( 'Font Family', 'epagreenlite' ),
				'section'         => 'button_typography',
				'default'         => 'Roboto, sans-serif',
				'field'           => 'fonts',
				'type'            => 'control',
			),
			'button_font_style' => array(
				'title'           => esc_html__( 'Font Style', 'epagreenlite' ),
				'section'         => 'button_typography',
				'default'         => 'normal',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_styles(),
				'type'            => 'control',
			),
			'button_font_weight' => array(
				'title'           => esc_html__( 'Font Weight', 'epagreenlite' ),
				'section'         => 'button_typography',
				'default'         => '900',
				'field'           => 'select',
				'choices'         => epagreenlite_get_font_weight(),
				'type'            => 'control',
			),
			'button_font_size' => array(
				'title'           => esc_html__( 'Font Size, px', 'epagreenlite' ),
				'section'         => 'button_typography',
				'default'         => '11',
				'field'           => 'number',
				'input_attrs'     => array(
					'min'  => 6,
					'max'  => 50,
					'step' => 1,
				),
				'type'            => 'control',
			),
			'button_line_height' => array(
				'title'       => esc_html__( 'Line Height', 'epagreenlite' ),
				'description' => esc_html__( 'Relative to the font-size of the element', 'epagreenlite' ),
				'section'     => 'button_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1.0,
					'max'  => 3.0,
					'step' => 0.1,
				),
				'type' => 'control',
			),
			'button_letter_spacing' => array(
				'title'       => esc_html__( 'Letter Spacing, px', 'epagreenlite' ),
				'section'     => 'button_typography',
				'default'     => '1',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => -10,
					'max'  => 10,
					'step' => 1,
				),
				'type' => 'control',
			),
			'button_character_set' => array(
				'title'           => esc_html__( 'Character Set', 'epagreenlite' ),
				'section'         => 'button_typography',
				'default'         => 'latin',
				'field'           => 'select',
				'choices'         => epagreenlite_get_character_sets(),
				'type'            => 'control',
			),

			/** `Header` panel */
			'header_options' => array(
				'title'       => esc_html__( 'Header', 'epagreenlite' ),
				'priority'    => 60,
				'type'        => 'panel',
			),

			/** `Header styles` section */
			'header_styles' => array(
				'title'       => esc_html__( 'Styles', 'epagreenlite' ),
				'priority'    => 5,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'header_bg_color' => array(
				'title'           => esc_html__( 'Background Color', 'epagreenlite' ),
				'section'         => 'header_styles',
				'field'           => 'hex_color',
				'default'         => '#ffffff',
				'type'            => 'control',
			),
			'header_bg_image' => array(
				'title'   => esc_html__( 'Background Image', 'epagreenlite' ),
				'section' => 'header_styles',
				'field'   => 'image',
				'type'    => 'control',
			),
			'header_bg_repeat' => array(
				'title'   => esc_html__( 'Background Repeat', 'epagreenlite' ),
				'section' => 'header_styles',
				'default' => 'repeat',
				'field'   => 'select',
				'choices' => array(
					'no-repeat'  => esc_html__( 'No Repeat', 'epagreenlite' ),
					'repeat'     => esc_html__( 'Tile', 'epagreenlite' ),
					'repeat-x'   => esc_html__( 'Tile Horizontally', 'epagreenlite' ),
					'repeat-y'   => esc_html__( 'Tile Vertically', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'header_bg_position_x' => array(
				'title'   => esc_html__( 'Background Position', 'epagreenlite' ),
				'section' => 'header_styles',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'epagreenlite' ),
					'center' => esc_html__( 'Center', 'epagreenlite' ),
					'right'  => esc_html__( 'Right', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'header_bg_attachment' => array(
				'title'   => esc_html__( 'Background Attachment', 'epagreenlite' ),
				'section' => 'header_styles',
				'default' => 'scroll',
				'field'   => 'select',
				'choices' => array(
					'scroll' => esc_html__( 'Scroll', 'epagreenlite' ),
					'fixed'  => esc_html__( 'Fixed', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			/** `Top Panel` section */
			'header_top_panel' => array(
				'title'       => esc_html__( 'Top Panel', 'epagreenlite' ),
				'priority'    => 10,
				'panel'       => 'header_options',
				'type'        => 'section',
			),

			'top_panel_enable' => array(
				'title'   => esc_html__( 'Enable Top Panel', 'epagreenlite' ),
				'section' => 'header_top_panel',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'top_panel_bg' => array(
				'title'   => esc_html__( 'Background color', 'epagreenlite' ),
				'section' => 'header_top_panel',
				'default' => '#ffffff',
				'field'   => 'hex_color',
				'type'    => 'control',
			),

			/** Banner section */
			'header_top_panel_banner' => array(
				'title'       => esc_html__( 'Top Panel Banner Image', 'epagreenlite' ),
				'priority'    => 11,
				'panel'       => 'header_options',
				'type'        => 'section',
			),
			'top_panel_banner_visibility' => array(
				'title'       => esc_html__( 'Banner Visibility', 'epagreenlite' ),
				'section'     => 'header_top_panel_banner',
				'field'    => 'checkbox',
				'type'     => 'control',
			),
			'top_panel_banner_link'  => array(
				'title'   => esc_html__( 'Top Panel Banner Link', 'epagreenlite' ),
				'section' => 'header_top_panel_banner',
				'field'   => 'text',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_banner_enable',
			),
			'top_panel_banner_image' => array(
				'title'   => esc_html__( 'Top Panel Banner Image', 'epagreenlite' ),
				'section' => 'header_top_panel_banner',
				'field'   => 'image',
				'type'    => 'control',
				'active_callback' => 'epagreenlite_is_banner_enable',
			),
			'top_panel_banner_position' => array(
				'title'   => esc_html__( 'Image Position', 'epagreenlite' ),
				'section' => 'header_top_panel_banner',
				'default' => 'center',
				'field'   => 'select',
				'choices' => array(
					'left'   => esc_html__( 'Left', 'epagreenlite' ),
					'center' => esc_html__( 'Center', 'epagreenlite' ),
					'right'  => esc_html__( 'Right', 'epagreenlite' ),
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_banner_enable',
			),
			'top_panel_banner_offset' => array(
				'title'       => esc_html__( 'Vertical Padding, px', 'epagreenlite' ),
				'section'     => 'header_top_panel_banner',
				'default'     => '0',
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 0,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_banner_enable',
			),

			/** `Footer` panel */
			'footer_options' => array(
				'title'    => esc_html__( 'Footer', 'epagreenlite' ),
				'priority' => 110,
				'type'     => 'section',
			),

			'footer_copyright' => array(
				'title'   => esc_html__( 'Copyright text', 'epagreenlite' ),
				'section' => 'footer_options',
				'default' => epagreenlite_get_default_footer_copyright(),
				'field'   => 'textarea',
				'type'    => 'control',
			),

			/** `Blog Settings` panel */
			'blog_settings' => array(
				'title'       => esc_html__( 'Blog Settings', 'epagreenlite' ),
				'priority'    => 115,
				'type'        => 'panel',
			),

			/** `Blog` section */
			'blog' => array(
				'title'           => esc_html__( 'Blog', 'epagreenlite' ),
				'panel'           => 'blog_settings',
				'priority'        => 10,
				'type'            => 'section',
				//'active_callback' => 'is_home',
			),
			'blog_sidebar_position' => array(
				'title'    => esc_html__( 'Sidebar', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => 'one-right-sidebar',
				'field'    => 'select',
				'priority' => 10,
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'epagreenlite' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'epagreenlite' ),
					'none'              => esc_html__( 'No sidebar', 'epagreenlite' ),
				),
				'type' => 'control',
				'active_callback' => 'epagreenlite_is_blog_sidebar_enabled',
			),
			'blog_navigation_type' => array(
				'title'   => esc_html__( 'Navigation type', 'epagreenlite' ),
				'section' => 'blog',
				'default' => 'navigation',
				'field'   => 'select',
				'choices' => array(
					'navigation' => esc_html__( 'Navigation', 'epagreenlite' ),
					'pagination' => esc_html__( 'Pagination', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'blog_sticky_type' => array(
				'title'    => esc_html__( 'Sticky label type', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => 'icon',
				'field'    => 'select',
				'priority' => 15,
				'choices' => array(
					'label' => esc_html__( 'Text Label', 'epagreenlite' ),
					'icon'  => esc_html__( 'Font Icon', 'epagreenlite' ),
					'both'  => esc_html__( 'Text with Icon', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'blog_sticky_label' => array(
				'title'           => esc_html__( 'Featured Post Label', 'epagreenlite' ),
				'description'     => esc_html__( 'Label for sticky post', 'epagreenlite' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'Featured', 'epagreenlite' ),
				'field'           => 'text',
				'priority'        => 20,
				'active_callback' => 'epagreenlite_is_sticky_text',
				'type'            => 'control',
			),
			'blog_post_author' => array(
				'title'    => esc_html__( 'Show post author', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 25,
				'type'     => 'control',
			),
			'blog_post_publish_date' => array(
				'title'    => esc_html__( 'Show publish date', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 30,
				'type'     => 'control',
			),
			'blog_post_categories' => array(
				'title'    => esc_html__( 'Show categories', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 35,
				'type'     => 'control',
			),
			'blog_post_tags' => array(
				'title'    => esc_html__( 'Show tags', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 40,
				'type'     => 'control',
			),
			'blog_post_comments' => array(
				'title'    => esc_html__( 'Show comments', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => true,
				'field'    => 'checkbox',
				'priority' => 45,
				'type'     => 'control',
			),
			'blog_post_excerpt' => array(
				'title'   => esc_html__( 'Show Excerpt', 'epagreenlite' ),
				'section' => 'blog',
				'default' => true,
				'field'   => 'checkbox',
				'priority' => 50,
				'type'    => 'control'
			),
			'blog_post_excerpt_words_count' => array(
				'title'       => esc_html__( 'Excerpt Words Count', 'epagreenlite' ),
				'section'     => 'blog',
				'default'     => '50',
				'priority'    => 55,
				'field'       => 'number',
				'input_attrs' => array(
					'min'  => 1,
					'max'  => 100,
					'step' => 1,
				),
				'type' => 'control',
			),
			'blog_read_more_type' => array(
				'title'    => esc_html__( 'Read more button type', 'epagreenlite' ),
				'section'  => 'blog',
				'default'  => 'text',
				'field'    => 'select',
				'priority' => 60,
				'choices' => array(
					'text'      => esc_html__( 'Text', 'epagreenlite' ),
					'icon'      => esc_html__( 'Icon', 'epagreenlite' ),
					'text_icon' => esc_html__( 'Text & Icon', 'epagreenlite' ),
					'none'      => esc_html__( 'None', 'epagreenlite' ),
				),
				'type'    => 'control',
			),
			'blog_read_more_text' => array(
				'title'           => esc_html__( 'Read more button text', 'epagreenlite' ),
				'section'         => 'blog',
				'default'         => esc_html__( 'More', 'epagreenlite' ),
				'field'           => 'text',
				'priority'        => 65,
				'type'            => 'control',
				'active_callback' => 'epagreenlite_is_blog_read_more_btn_text',
			),

			/** `Post` section */
			'blog_post' => array(
				'title'           => esc_html__( 'Post', 'epagreenlite' ),
				'panel'           => 'blog_settings',
				'priority'        => 20,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'single_sidebar_position' => array(
				'title'   => esc_html__( 'Sidebar', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => 'one-right-sidebar',
				'field'   => 'select',
				'choices' => array(
					'one-left-sidebar'  => esc_html__( 'Sidebar on left side', 'epagreenlite' ),
					'one-right-sidebar' => esc_html__( 'Sidebar on right side', 'epagreenlite' ),
					'none'              => esc_html__( 'No sidebar', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'single_post_author' => array(
				'title'   => esc_html__( 'Show post author', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_publish_date' => array(
				'title'   => esc_html__( 'Show publish date', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_categories' => array(
				'title'   => esc_html__( 'Show categories', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_tags' => array(
				'title'   => esc_html__( 'Show tags', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_post_comments' => array(
				'title'   => esc_html__( 'Show comments', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'single_author_block' => array(
				'title'   => esc_html__( 'Enable the author block after each post', 'epagreenlite' ),
				'section' => 'blog_post',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),

			/** `Related Posts` section */
			'related_posts' => array(
				'title'           => esc_html__( 'Related posts block', 'epagreenlite' ),
				'panel'           => 'blog_settings',
				'priority'        => 30,
				'type'            => 'section',
				'active_callback' => 'callback_single',
			),
			'related_posts_visible' => array(
				'title'   => esc_html__( 'Show related posts block', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_block_title' => array(
				'title'   => esc_html__( 'Related posts block title', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => esc_html__( 'Related Posts', 'epagreenlite' ),
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_count' => array(
				'title'   => esc_html__( 'Number of post', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => '4',
				'field'   => 'text',
				'type'    => 'control',
			),
			'related_posts_grid' => array(
				'title'   => esc_html__( 'Layout', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => '2',
				'field'   => 'select',
				'choices' => array(
					'2'        => esc_html__( '2 columns', 'epagreenlite' ),
					'3'        => esc_html__( '3 columns', 'epagreenlite' ),
					'4'        => esc_html__( '4 columns', 'epagreenlite' ),
				),
				'type' => 'control',
			),
			'related_posts_image' => array(
				'title'   => esc_html__( 'Show post image', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_publish_date' => array(
				'title'   => esc_html__( 'Show post publish date', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_author' => array(
				'title'   => esc_html__( 'Show post author', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_title' => array(
				'title'   => esc_html__( 'Show post title', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			),
			'related_posts_excerpt' => array(
				'title'   => esc_html__( 'Display excerpt', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => false,
				'field'   => 'checkbox',
				'type' => 'control',
			),

			/* 'related_posts_categories' => array(
				'title'   => esc_html__( 'Show post categories', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */
			/* 'related_posts_tags' => array(
				'title'   => esc_html__( 'Show post tags', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */
			/* 'related_posts_comment_count' => array(
				'title'   => esc_html__( 'Show post comment count', 'epagreenlite' ),
				'section' => 'related_posts',
				'default' => true,
				'field'   => 'checkbox',
				'type'    => 'control',
			), */
	) ) );
}

/**
 * Return true if value of passed setting is not equal with passed value.
 *
 * @param  object $control Parent control.
 * @param  string $setting Setting name to check.
 * @param  string $value   Setting value to compare.
 * @return bool
 */
function epagreenlite_is_not_setting( $control, $setting, $value ) {

	if ( $value !== $control->manager->get_setting( $setting )->value() ) {
		return true;
	}

	return false;

}

/**
 * Return true if sticky label type set to text or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function epagreenlite_is_sticky_text( $control ) {
	return epagreenlite_is_not_setting( $control, 'blog_sticky_type', 'icon' );
}

/**
 * Return true if sticky label type set to icon or text with icon.
 *
 * @param  object $control
 * @return bool
 */
function epagreenlite_is_sticky_icon( $control ) {
	return epagreenlite_is_not_setting( $control, 'blog_sticky_type', 'label' );
}


/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
function epagreenlite_customizer_change_core_controls( $wp_customize ) {
	$wp_customize->get_control( 'site_icon' )->section      = 'epagreenlite_favicon';
	$wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'epagreenlite' );
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'epagreenlite_customizer_change_core_controls', 20 );

/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
function epagreenlite_get_font_styles() {
	return apply_filters( 'epagreenlite-theme/font/styles', array(
		'normal'  => esc_html__( 'Normal', 'epagreenlite' ),
		'italic'  => esc_html__( 'Italic', 'epagreenlite' ),
		'oblique' => esc_html__( 'Oblique', 'epagreenlite' ),
		'inherit' => esc_html__( 'Inherit', 'epagreenlite' ),
	) );
}

/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
function epagreenlite_get_character_sets() {
	return apply_filters( 'epagreenlite-theme/font/character_sets', array(
		'latin'        => esc_html__( 'Latin', 'epagreenlite' ),
		'greek'        => esc_html__( 'Greek', 'epagreenlite' ),
		'greek-ext'    => esc_html__( 'Greek Extended', 'epagreenlite' ),
		'vietnamese'   => esc_html__( 'Vietnamese', 'epagreenlite' ),
		'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'epagreenlite' ),
		'latin-ext'    => esc_html__( 'Latin Extended', 'epagreenlite' ),
		'cyrillic'     => esc_html__( 'Cyrillic', 'epagreenlite' ),
	) );
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
function epagreenlite_get_text_aligns() {
	return apply_filters( 'epagreenlite-theme/font/text-aligns', array(
		'inherit' => esc_html__( 'Inherit', 'epagreenlite' ),
		'center'  => esc_html__( 'Center', 'epagreenlite' ),
		'justify' => esc_html__( 'Justify', 'epagreenlite' ),
		'left'    => esc_html__( 'Left', 'epagreenlite' ),
		'right'   => esc_html__( 'Right', 'epagreenlite' ),
	) );
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
function epagreenlite_get_font_weight() {
	return apply_filters( 'epagreenlite-theme/font/weight', array(
		'100' => '100',
		'200' => '200',
		'300' => '300',
		'400' => '400',
		'500' => '500',
		'600' => '600',
		'700' => '700',
		'800' => '800',
		'900' => '900',
	) );
}

/**
 * Return array of arguments for dynamic CSS module
 *
 * @return array
 */

function epagreenlite_get_dynamic_css_options() {
	return apply_filters( 'epagreenlite-theme/dynamic_css/options', array(
		'prefix'        => 'epagreenlite',
		'type'          => 'theme_mod',
		'parent_handles' => array(
			'css' => 'epagreenlite-theme-style',
			'js'  => 'epagreenlite-theme-js',
		),
		'css_files'      => array(
			get_theme_file_path( 'assets/css/dynamic.css' ),
			get_theme_file_path( 'assets/css/dynamic/header.css' ),
			get_theme_file_path( 'assets/css/dynamic/menus.css' ),
			get_theme_file_path( 'assets/css/dynamic/social.css' ),
			get_theme_file_path( 'assets/css/dynamic/navigation.css' ),
			get_theme_file_path( 'assets/css/dynamic/buttons.css' ),
			get_theme_file_path( 'assets/css/dynamic/forms.css' ),
			get_theme_file_path( 'assets/css/dynamic/post.css' ),
			get_theme_file_path( 'assets/css/dynamic/page.css' ),
			get_theme_file_path( 'assets/css/dynamic/widgets.css' ),
		),
		'options_cb'     => 'get_theme_mods',
	) );
}

/**
 * Get default footer copyright.
 *
 * @since  1.0.0
 * @return string
 */
function epagreenlite_get_default_footer_copyright() {
	return esc_html__( '&copy; %%year%% Epagreenlite | Multipurpose WP Theme with Elementor Page Builder', 'epagreenlite' );
}

/**
 * Return true if blog sidebar enabled.
 *
 * @return bool
 */
function epagreenlite_is_blog_sidebar_enabled() {
	return apply_filters( 'epagreenlite-theme/customizer/blog-sidebar-enabled', true );
}


/**
 * Return true if option Read More button type is text type. Otherwise - return false.
 *
 * @return bool
 */
function epagreenlite_is_blog_read_more_btn_text() {
	$btn_type = epagreenlite_theme()->customizer->get_value( 'blog_read_more_type' );
	return 'text' === $btn_type || 'text_icon' === $btn_type ? true : false;
}

/**
 * Return false if option Enable Totop button is enable.
 *
 * @param  object $control Parent control.
 * @return bool
 */

function epagreenlite_is_totop_enable( $control ) {
	return epagreenlite_is_not_setting( $control, 'totop_visibility', false );
}

/**
 * Return false if option Banner Visibility is enable.
 *
 * @param object $control Parent control
 * @return bool
 */
function epagreenlite_is_banner_enable( $control ) {
	return epagreenlite_is_not_setting( $control, 'top_panel_banner_visibility', false );
}