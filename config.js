let $single_func = ( $file_name ) => {
	return {
		dist: './dist/spinners/',
		conact: $file_name,
		scss: true,
		sourcemap: false,
		watch: [ './src/*.*', './src/spinners/*.scss' ]
	};
};

let $_json          = {};
$_json.project_name = 'css-spinners';
$_json.scss         = {
	'./src/all-spinner.scss': {
		dist: './dist/',
		conact: 'all-spinner.min.css',
		scss: true,
		sourcemap: false,
		watch: [ './src/*.*', './src/spinners/*.scss' ]
	},
	'./src/spinners/border.scss': $single_func( 'border.css' ),
	'./src/spinners/bubble.scss': $single_func( 'bubble.css' ),
	'./src/spinners/grow.scss': $single_func( 'grow.css' ),
	'./src/spinners/round.scss': $single_func( 'round.css' )
};
$_json.js           = false;
$_json.wppot        = false;

/**
 * Settings any feature to false will not trigger for any files untill its
 * overridden in file config.
 * js:{
 *     "your_file_source":{
 *         scss:true,
 *         dist:"your_file_dist",
 *     }
 * }
 */
$_json.status = {
	scss: true,
	autoprefixer: true,
	sourcemap: true,
	webpack: true,
	babel: false,
	parcel: false,
	rollup: false,
	minify: true,
	uglify: true,
	combine_files: true,
	concat: true,
};
$_json.default_config = {
	/**
	 * Production Configs.
	 */
	combine_files: {
		append: 'wponion-append',
		prepend: 'wponion-prepend',
		inline: 'wponion-inline',
	},
	minify: {
		args: {},
		callback: false
	},
	concat: {},
	scss: {
		outputStyle: 'expanded'
	},
	sourcemap: '../maps',
	autoprefixer: {
		browsers: [ 'last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4' ],
		cascade: false
	},
	webpack: {
		mode: 'production',
		output: {
			filename: '[name].js',
		},
		target: 'node',
		module: {
			rules: [
				{
					test: /\.js$/,
					loader: 'babel-loader',
					options: {
						presets: [ 'es2015' ]
					}
				}
			]
		},
	},
	parcel: false,
	uglify: true,
	babel: {
		presets: [ '@babel/env' ],
	},
	wppot: {},

	/**
	 * Development Config.
	 */
	webpack_dev: {
		devtool: 'inline-source-map',
		mode: 'development',
		target: 'node',
		output: {
			filename: '[name].js',
		},
		module: {
			rules: [
				{
					test: /\.js$/,
					loader: 'babel-loader',
					options: {
						presets: [ 'es2015' ]
					}
				}
			]
		},
	},
	uglify_dev: false,
};
module.exports        = $_json;
