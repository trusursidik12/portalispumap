let
	tpj = jQuery,
	revSelector = '#rev_slider_28_1',
	revapiParallaxZoomSlices;

tpj( document ).ready( function () {
	if ( tpj( revSelector ).revolution == undefined ) {
		revslider_showDoubleJqueryError( revSelector );
	} else {
		let
			defaults = {
				delay:                     5500,
				sliderType:                'standard',
				jsFileLocation:            'components/revolution/',
				sliderLayout:              'fullscreen',
				fullScreenOffsetContainer: '#header-parallax-zoom-slices',
				responsiveLevels:          [ 1280, 1024, 778, 480 ],
				visibilityLevels:          [ 1280, 1024, 778, 480 ],
				gridwidth:                 1280,
				minHeight:                 '260',
				stopLoop:                  'off',
				stopAfterLoops:            -1,
				stopAtSlide:               -1,
				spinner:                   'off',
				debugMode:                 false,
				viewPort: {
					enable: true,
					outof: 'wait',
					visible_area: '80%',
					presize: true
				},
				fallbacks: {
					simplifyAll: 'on'
				},
				navigation:                {
					onHoverStop:           'off',
					arrows:                {
						style:         'custom',
						enable:        true,
						hide_under:    767,
						hide_onleave:  false,
						left:          {
							h_align:  'left',
							v_align:  'center',
							h_offset: 20,
							v_offset: 0
						},
						right:         {
							h_align:  'right',
							v_align:  'center',
							h_offset: 20,
							v_offset: 0
						}
					},
					bullets:               {
						enable:        true,
						hide_onmobile: false,
						style:         'hermes',
						hide_onleave:  false,
						direction:     'horizontal',
						h_align:       'center',
						v_align:       'bottom',
						h_offset:      0,
						v_offset:      20,
						space:         5
					}
				}
			},
			xMode = {
				fullScreenOffsetContainer: null,
			};

		revapiParallaxZoomSlices = tpj( revSelector ).show().revolution( window.xMode ? Util.merge([ defaults, xMode ]) : defaults );
	}

	if ( revapiParallaxZoomSlices ) revapiParallaxZoomSlices.revSliderSlicey();
} ).on('revolution.slide.onloaded', function() {
	document.querySelector( revSelector ).parentElement.classList.add( 'loaded' );
});
