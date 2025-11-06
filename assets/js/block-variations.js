const { getBlockVariations, registerBlockVariation } = wp.blocks;
const { __ } = wp.i18n;
const domReady = wp.domReady;

domReady(() => {

	// Grid
	const groupVariations = getBlockVariations('core/group');
	if (!groupVariations.some(variation => 'group-grid' === variation.name)) {
		registerBlockVariation('core/group', {
			name: 'group-grid',
			title: 'Grid',
			icon: 'grid-view',
			description: 'Arrange blocks in a grid',
			category: 'design',
			attributes: {
				align: true,
				layout: {
					type: 'grid'
				}
			},
			scope: [ 'block', 'inserter', 'transform' ],
			isActive: (blockAttributes) =>
				blockAttributes.layout?.type === 'grid',
		});
	}

	// Cover
	// Define the icon for the Large Image Fade-in block variation.
	// TODO? https://make.wordpress.org/core/2021/12/28/take-more-control-over-inner-block-areas-as-a-block-developer/
	const lgImageFadeInIcon = wp.element.createElement(
		wp.primitives.SVG,
		{ xmlns: "http://www.w3.org/2000/svg", viewBox: "0 0 24 24" },
		wp.element.createElement(
			wp.primitives.Path,
			{
				d: "M18.7 3H5.3C4 3 3 4 3 5.3v13.4C3 20 4 21 5.3 21h13.4c1.3 0 2.3-1 2.3-2.3V5.3C21 4 20 3 18.7 3zm.8 15.7c0 .4-.4.8-.8.8H5.3c-.4 0-.8-.4-.8-.8V5.3c0-.4.4-.8.8-.8h6.2v8.9l2.5-3.1 2.5 3.1V4.5h2.2c.4 0 .8.4.8.8v13.4z",
			}
		)
	);

	const coverVariations = getBlockVariations('core/cover');
	if (!coverVariations.some(variation => 'cover-img-right-text' === variation.name)) {
		registerBlockVariation('core/cover', {
			name: 'cover-img-right-text',
			title: 'Cover - Text & Image Right',
			icon: lgImageFadeInIcon,
			description: '(Advanced) Create a cover image with a large image on the right that allows for overlapping image and text. This is different than the normal cover in that the column sizes and position in are pre-determined. ',
			category: 'media',
			attributes: {
				overlayColor: 'mc-brand',
				isUserOverlayColor: true,
				align: 'full',
				tagName: 'section',
				className: 'is-variation-img-text has-img-right no-subgrid is-style-us-bkg-right--xl',
			},
			innerBlocks: [
				[ 'core/group', { type: 'constrained', className: "cover-text-right" } ],
				[ 'core/image', { className: "cover-img-right" } ]
			],
			scope: [ 'inserter' ],
			isActive: [ 'className' ]
		});
	}
	if (!coverVariations.some(variation => 'cover-img-left-text' === variation.name)) {
		registerBlockVariation('core/cover', {
			name: 'cover-img-left-text',
			title: 'Cover - Image Left & Text',
			icon: lgImageFadeInIcon,
			description: '(Advanced) Create a cover image with a large image on the left that allows for overlapping image and text. This is different than the normal cover in that the column sizes and position in are pre-determined. ',
			category: 'media',
			attributes: {
				overlayColor: 'mc-brand',
				isUserOverlayColor: true,
				align: 'full',
				tagName: 'section',
				className: 'is-variation-img-text has-img-left no-subgrid is-style-us-bkg-right--xl',
			},
			innerBlocks: [
				[ 'core/image', { className: "cover-img-left" } ],
				[ 'core/group', { type: 'constrained', className: "cover-text-left" } ]
			],
			scope: [ 'inserter' ],
			isActive: [ 'className' ]
		});
	}
});
