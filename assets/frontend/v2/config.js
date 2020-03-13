const
	action = require( 'tempaw-functions' ).action,
	preset = require( './custom-presets' );

module.exports = {
	livedemo: {
		enable: true,
		server: {
			baseDir: `dev/`,
			directory: false
		},
		port: 8000,
		open: false,
		notify: true,
		reloadDelay: 0,
		ghostMode: {
			clicks: false,
			forms: false,
			scroll: false
		}
	},
	sass: {
		enable: true,
		showTask: false,
		watch: `dev/**/*.scss`,
		source: `dev/**/!(_)*.scss`,
		dest: `dev/`,
		options: {
			outputStyle: 'expanded',
			indentType: 'tab',
			indentWidth: 1,
			linefeed: 'cr'
		}
	},
	pug: {
		enable: true,
		showTask: false,
		watch: `dev/**/*.pug`,
		source: `dev/pages/!(_)*.pug`,
		dest: `dev/`,
		options: {
			pretty: true,
			verbose: true,
			self: true,
			emitty: true
		}
	},
	autoprefixer: {
		enable: false,
		options: {
			cascade: true,
			browsers: ['Chrome >= 45', 'Firefox ESR', 'Edge >= 12', 'Explorer >= 10', 'iOS >= 9', 'Safari >= 9', 'Android >= 4.4', 'Opera >= 30']
		}
	},
	watcher: {
		enable: true,
		watch: `dev/**/*.js`
	},
	lint: {
		showTask: true,
		sass: 'dev/components/!(bootstrap)/**/*.scss',
		pug: 'dev/**/*.pug',
		js: 'dev/**/!(*.min).js',
		html: 'dev/**/*.html'
	},
	buildRules: {
		// Project build recommendation
		// Gulp Settings >> Node options >> --max-old-space-size=4096
		'Build Livedemo': [
			// Clean dist
			action.clean({ src: 'dist/livedemo/v2' }),

			// Copy files to a temporary folder
			action.copy({
				src: [
					'dev/**/*.pug',
					'dev/**/*.scss',
					'dev/**/*.js'
				],
				dest: 'tmp'
			}),

			// Deleting code fragments
			action.delMarker({
				src: [
					'tmp/**/*.pug',
					'tmp/**/*.scss',
					'tmp/**/*.js'
				],
				dest: 'tmp',
				marker: 'DIST'
			}),

			// Copy css
			action.copy({
				src: 'dev/**/*.css',
				dest: 'dist/livedemo/site/v2/'
			}),

			// Compile sass
			action.sass({
				src: 'tmp/**/*.scss',
				dest: 'dist/livedemo/site/v2/',
				autoprefixer: false
			}),

			// Compile pug
			action.pug({
				src: `tmp/pages/!(_)*.pug`,
				dest: 'dist/livedemo/site/v2/'
			}),

			// Copy js files
			action.copy({
				src: 'tmp/**/*.js',
				dest: 'dist/livedemo/site/v2/'
			}),

			// Copy fonts
			action.copy({
				src: [
					'dev/**/*.otf',
					'dev/**/*.eot',
					'dev/**/*.svg',
					'dev/**/*.ttf',
					'dev/**/*.woff',
					'dev/**/*.woff2'
				],
				dest: 'dist/livedemo/site/v2/'
			}),

			// Copy & minify images
			action.minifyimg({
				src: [
					'dev/**/*.png',
					'dev/**/*.jpg',
					'dev/**/*.gif'
				],
				dest: 'dist/livedemo/site/v2/'
			}),

			// Copy other files
			action.copy({
				src: [
					'dev/**/*.ico',
					'dev/**/*.php',
					'dev/**/*.json',
					'dev/**/*.txt',
					'dev/**/*.mp4'
				],
				dest: 'dist/livedemo/site/v2/'
			}),

			// Delete temporary folder
			action.clean({ src: 'tmp' })
		],
		'Build Granter': [
			// Clean dist
			action.clean({ src: 'dist/granter/v2' }),

			// GRANTER
			// Copy dev
			action.copy({
				src: [
					'dev/**/*.pug',
					'dev/**/*.scss',
					'dev/**/*.html',
					'dev/**/*.css',
					'dev/**/*.js',
					'dev/**/*.otf',
					'dev/**/*.eot',
					'dev/**/*.svg',
					'dev/**/*.ttf',
					'dev/**/*.woff',
					'dev/**/*.woff2',
					'dev/**/*.png',
					'dev/**/*.jpg',
					'dev/**/*.gif',
					'dev/**/*.ico',
					'dev/**/*.php',
					'dev/**/*.tpl',
					'dev/**/*.json',
					'dev/**/*.txt',
					'dev/**/*.mp4'
				],
				dest: 'dist/granter/v2/dev'
			}),

			// Copy project files
			action.copy({
				src: [
					'config.js',
					'gulpfile.js',
					'package.json'
				],
				dest: 'dist/granter/v2'
			})
		],
		'To Builder': [
			preset.builderThrow({
				dev: 'dev',
				builder: 'builder',
				pages: 'index.html',
				debug: true
			})
		],
		'Babel': [
			action.minifyJs({
				src: [
					'dev/components/base/core.js',
					'dev/components/base/script.js'
				],
				dest: 'dev/components/base'
			})
		],
		'Util Backup': [
			action.pack({
				src: [ 'dev/**/*', '*.*', '.gitignore' ], dest: 'versions/',
				name( dateTime ) { return `backup-${dateTime[0]}-${dateTime[1]}.zip`; }
			})
		]
	}
};
