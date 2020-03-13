let
	tpj = jQuery,
	revSelector = '#rev_slider_zoom_horizontal';

tpj( document ).ready( function () {
	if ( tpj( revSelector ).revolution == undefined ) {
		revslider_showDoubleJqueryError( revSelector );
	} else {
		let
			defaults = {
				delay:                     9000,
				jsFileLocation:            'components/revolution/',
				sliderLayout:              'fullscreen',
				fullScreenOffsetContainer: '#header-zoom-horizontal',
				minHeight:                 '260',
				gridwidth:                 1280,
				stopLoop:                  'off',
				stopAfterLoops:            -1,
				stopAtSlide:               -1,
				spinner:                   'off',
				viewPort:                  {
					enable:       true,
					outof:        'wait',
					visible_area: '80%',
					presize:      true
				},
				navigation:                {
					onHoverStop: 'off',
					arrows:      {
						enable:        true,
						hide_onleave:  true,
						hide_onmobile: true,
						hide_under:    1361,
						style:         'uranus'
					},
					bullets:     {
						enable:       true,
						style:        'hermes',
						hide_onleave: false,
						h_align:      'center',
						v_align:      'bottom',
						h_offset:     0,
						v_offset:     20,
						hide_over:    1360,
						space:        10
					},
					touch:       {
						touchenabled:        'on',						// Enable Swipe Function : on/off
						swipe_treshold:      75,					// The number of pixels that the user must move their finger by before it is considered a swipe.
						swipe_min_touches:   1,					// Min Finger (touch) used for swipe
						drag_block_vertical: false,				// Prevent Vertical Scroll during Swipe
						swipe_direction:     'horizontal'
					}
				},
				parallax:                  {
					type:             'scroll',
					origo:            'slidercenter',
					speed:            1000,
					levels:           [ 5, 10, 15, 20, 25, 30, 35, 40,
						45, 46, 47, 48, 49, 50, 51, 55 ],
					disable_onmobile: 'on'
				},
				debugMode:                 false
			},
			xMode = {
				fullScreenOffsetContainer: null,
			};

		tpj( revSelector ).show().revolution( window.xMode ? Util.merge([ defaults, xMode ]) : defaults );
	}
} ).on( 'revolution.slide.onloaded', function () {
	document.querySelector( revSelector ).parentElement.classList.add( 'loaded' );
} );
