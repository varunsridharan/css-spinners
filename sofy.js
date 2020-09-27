let $files = {};

[ 'border', 'bubble', 'grow', 'round', 'skeleton' ].forEach( ( data, i ) => {
	$files[ `./src/spinners/${data}.scss` ] = [
		{
			scss: true,
			autoprefixer: true,
			dist: `./dist/${data}/`,
			rename: `${data}.css`,
			watch: true,
		},
		{
			scss: true,
			autoprefixer: true,
			minify: true,
			dist: `./dist/${data}/`,
			rename: `${data}.min.css`,
			watch: true,
		}
	];
} );

$files[ './src/all-spinner.scss' ] = [
	{
		scss: true,
		dist: `./dist/`,
		rename: `all.css`,
	},
	{
		scss: true,
		minify: true,
		dist: `./dist/`,
		rename: `all.min.css`,
	}
];

module.exports = { files: $files };