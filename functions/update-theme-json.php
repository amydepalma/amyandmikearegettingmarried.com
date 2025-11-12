<?php
// https://make.wordpress.org/core/2022/10/10/filters-for-theme-json-data/
if ( ! function_exists( 'mc_base_update_theme_json' ) ) {
	add_filter( 'wp_theme_json_data_theme', 'mc_base_update_theme_json' );
	function mc_base_update_theme_json( $theme_json ) {
		$new_data = array(
			'version' => 3,
			'settings' => array(
				'appearanceTools' => true,
				'useRootPaddingAwareAlignments' => true,
				'layout' => array(
					'contentSize' => 'initial',
					'wideSize' => 'initial'
				),
				'color' => array(
					'text' => true,
					'defaultPalette' => false,
					'defaultGradients' => false,
					'customGradient' => true,
					'duotone' => [
						[ 'colors' => [ '#9E9E9E', '#FFF' ],
							'slug' => 'grayscale',
							'name' => 'Grayscale'
						],
						[ 'colors' => [ '#FFF', '#FFF' ],
							'slug' => 'white',
							'name' => 'White'
						],
						[ 'colors' => [ '#000', '#000' ],
							'slug' => 'black',
							'name' => 'Black'
						]
					],
					'customDuotone' => true,
					'defaultDuotone' => false,
					'palette' => array(
						array(
							'slug' => 'black',
							'color' => 'var(--black)',
							'name' => 'Black'
						),
						array(
							'slug' => 'gray-500',
							'color' => 'var(--gray-500)',
							'name' => 'Gray 500'
						),
						array(
							'slug' => 'gray-400',
							'color' => 'var(--gray-400)',
							'name' => 'Gray 400'
						),
						array(
							'slug' => 'gray-brand',
							'color' => 'var(--gray-brand)',
							'name' => 'Gray 300'
						),
						array(
							'slug' => 'gray-200',
							'color' => 'var(--gray-200)',
							'name' => 'Gray 200'
						),

						array(
							'slug' => 'gray-100',
							'color' => 'var(--gray-100)',
							'name' => 'Gray 100'
						),
						array(
							'slug' => 'gray-000',
							'color' => 'var(--gray-000)',
							'name' => 'Gray 000'
						),
						array(
							'slug' => 'white',
							'color' => 'var(--white)',
							'name' => 'White'
						),
					),
				),
				'typography' => array(
					'dropCap' => false,
					'defaultFontSizes' => false,
					'customFontSize' => false,
					'fontSizes' => array(
						array(
							'size' => 'var(--fs-xs)',
							'slug' => 'xs',
							'name' => 'Extra Small'
						),
						array(
							'size' => 'var(--fs-sm)',
							'slug' => 'sm',
							'name' => 'Small'
						),
						array(
							'size' => 'var(--fs-page)',
							'slug' => 'page',
							'name' => 'Page (H5 & H6)'
						),
						array(
							'size' => 'var(--fs-md)',
							'slug' => 'md',
							'name' => 'Medium (H4)'
						),
						array(
							'size' => 'var(--fs-lg)',
							'slug' => 'lg',
							'name' => 'Large (H3)'
						),
						array(
							'size' => 'var(--fs-xl)',
							'slug' => 'xl',
							'name' => 'Extra Large (H2)'
						),
						array(
							'size' => 'var(--fs-xxl)',
							'slug' => 'xxl',
							'name' => 'Extra Extra Large'
						),
						array(
							'size' => 'var(--fs-giant)',
							'slug' => 'giant',
							'name' => 'Giant (H1)'
						),
						array(
							'size' => 'var(--fs-jumbo)',
							'slug' => 'jumbo',
							'name' => 'Jumbo'
						),
						array(
							'size' => 'var(--fs-super)',
							'slug' => 'super',
							'name' => 'Super'
						),
					),
					'fontFamilies' => array(
						array(
							'fontFamily' => 'var(--ff-base)',
							'slug' => 'base',
							'name' => 'Base'
						),
						array(
							'fontFamily' => 'var(--ff-script)',
							'slug' => 'script',
							'name' => 'Script'
						)
					),
				),
				'spacing' => array(
					'blockGap' => true,
					'defaultSpacingSizes' => false,
					'spacingSizes' => array(
						array(
							'size' => 'var(--mc-spacer-xs)',
							'slug' => 'xs',
							'name' => 'Extra Small'
						),
						array(
							'size' => 'var(--mc-spacer-sm)',
							'slug' => 'sm',
							'name' => 'Small'
						),
						array(
							'size' => 'var(--mc-spacer-page)',
							'slug' => 'page',
							'name' => 'Page'
						),
						array(
							'size' => 'var(--mc-spacer-md)',
							'slug' => 'md',
							'name' => 'Medium'
						),
						array(
							'size' => 'var(--mc-spacer-lg)',
							'slug' => 'lg',
							'name' => 'Large'
						),
						array(
							'size' => 'var(--mc-spacer-xl)',
							'slug' => 'xl',
							'name' => 'Extra Large'
						),
						array(
							'size' => 'var(--mc-spacer-xxl)',
							'slug' => 'xxl',
							'name' => 'Extra Extra Large'
						),
						array(
							'size' => 'var(--mc-spacer-giant)',
							'slug' => 'giant',
							'name' => 'Giant'
						),
						array(
							'size' => 'var(--mc-spacer-jumbo)',
							'slug' => 'jumbo',
							'name' => 'Jumbo'
						),
						array(
							'size' => 'var(--mc-spacer-super)',
							'slug' => 'super',
							'name' => 'Super'
						),
					),
					'units' => array(
						'ch',
						'%',
						'px',
						'vh',
						'vw',
						'em',
						'rem'
					),
				),
				'shadow' => array(
					'defaultPresets' => false,
					'presets' => array(
						array(
							'name' => 'Small',
							'slug' => 'sm',
							'shadow' => 'var(--box-shadow-sm)'
						),
						array(
							'name' => 'Medium',
							'slug' => 'md',
							'shadow' => 'var(--box-shadow-md)'
						),
						array(
							'name' => 'Large',
							'slug' => 'lg',
							'shadow' => 'var(--box-shadow-lg)'
						),
						array(
							'name' => 'Extra Large',
							'slug' => 'xl',
							'shadow' => 'var(--box-shadow-xl)'
						),
					),
				),
				'blocks' => array(
					'core/buttons' => array(
						'spacing' => array(
							'blockGap' => true,
							'margin' => true,
							'padding' => false
						),
						'color' => array(
							'text' => false,
							'background' => false,
						),
						'border' => array(
							'radius' => false,
							'color' => false,
							'style' => false,
							'width' => false
						),
					),
					'core/button' => array(
						'typography' => array(
							'customFontSize' => false,
							'lineHeight' => false,
							'fontSizes' => array(
								array(
									'size' => 'var(--fs-xs)',
									'slug' => 'xs',
									'name' => 'Small'
								),
								array(
									'size' => 'var(--fs-sm)',
									'slug' => 'sm',
									'name' => 'Medium (Default)'
								),
								array(
									'size' => 'var(--fs-page)',
									'slug' => 'page',
									'name' => 'Large'
								),
								array(
									'size' => 'var(--fs-md)',
									'slug' => 'md',
									'name' => 'Extra Large'
								)
							),
							'letterSpacing' => false,
							'textDecoration' => false,
							'fontWeight' => false,
							'fontStyle' => false
						),
						'spacing' => array(
							'blockGap' => true,
							'margin' => true,
							'padding' => false
						),
						'border' => array(
							'radius' => false,
							'color' => false,
							'style' => false,
							'width' => false
						),
						'color' => array(
							'text' => false,
							'palette' => array(

								array(
									'slug' => 'white',
									'color' => 'var(--white)',
									'name' => 'White'
								),
								array(
									'slug' => 'gray-100',
									'color' => 'var(--gray-100)',
									'name' => 'Gray 100'
								),
								array(
									'slug' => 'gray-brand',
									'color' => 'var(--gray-brand)',
									'name' => 'Gray Brand'
								),
								array(
									'slug' => 'black',
									'color' => 'var(--black)',
									'name' => 'Black'
								),
							),
						)
					),
					'core/group' => array(
						'border' => array(
							'radius' => true
						)
					),
					'core/embed' => array(
						'border' => array(
							'radius' => true
						),
						'shadow' => array(
							'__experimentalSkipSerialization' => true
						)
					),
					'core/pullquote' => array(
						'typography' => array(
							'defaultFontSizes' => false,
							'customFontSize' => false,
							'lineHeight' => false,
							'fontSizes' => array(),
							'letterSpacing' => false,
							'textDecoration' => false,
							'textTransform' => false,
							'fontWeight' => false,
							'fontStyle' => false
						),
						'border' => array(
							'radius' => false,
							'color' => false,
							'style' => false,
							'width' => false
						),
						'color' => array(
							'text' => false,
							'link' => false,
							'background' => false
						)
					),
					'core/quote' => array(
						'typography' => array(
							'defaultFontSizes' => false,
							'customFontSize' => false,
							'fontSizes' => array(),
							'lineHeight' => false,
							'letterSpacing' => false,
							'textDecoration' => false,
							'textTransform' => false,
							'fontWeight' => false,
							'fontStyle' => false
						),
						'height' => false,
						'color' => array(
							'text' => false,
							'link' => false,
							'background' => true,
						),
						'background' => array(
							'backgroundImage' => false,
							'backgroundSize' => false,
						),
						'spacing' => array(
							'blockGap' => false,
							'margin' => true,
							'padding' => true
						),
						'border' => array(
							'color' => true,
							'width' => false,
							'radius' => false,
							'style' => false,
						)
					),
				),
			),
			'styles' => [
				'spacing' => array(
					'blockGap' => '1em'
				),
				'blocks' => array(
					'core/pullquote' => array(
						'spacing' => array(
							'margin' => array(
								'top' => '0',
								'bottom' => '0'
							),
							'padding' => array(
								'top' => 'var(--mc-spacer-xxl)',
								'bottom' => 'var(--mc-spacer-xxl)'
							)
						)
					),
					'core/quote' => array(
						'spacing' => array(
							'padding' => array(
								'top' => 'var(--mc-spacer-md)',
								'bottom' => 'var(--mc-spacer-md)'
							),
						),
					),
					'core/buttons' => array(
						'spacing' => array(
							'blockGap' => 'var(--mc-spacer-sm)',
							'margin' => array(
								'top' => '1.5em',
								'bottom' => '0'
							)
						),
					)
				),
			],
		);

		return $theme_json->update_with( $new_data );
	}
}