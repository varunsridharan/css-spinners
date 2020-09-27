<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CSSPIN - CSS Spinners and Loaders</title>
	<link href="../dist/all.css" rel="stylesheet" type="text/css">
	<link href="../demo/demo.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="CSSPIN - CSS Spinners and Loaders">
	<meta name="twitter:description"
		  content="CSS Spinners and Loaders - Modular, Customizable and Single HTML Element Code">
	<meta name="twitter:image:src"
		  content="https://raw.githubusercontent.com/varunsridharan/css-spinners/master/demo/simple.jpg">
	<meta name="twitter:creator" content="@varunsridharan2">
	<meta name="twitter:url" content="https://varunsridharan.github.io/css-spinners/">
	<meta property="og:title" content="CSSPIN - CSS Spinners and Loaders">
	<meta property="og:description"
		  content="CSS Spinners and Loaders - Modular, Customizable and Single HTML Element Code">
	<meta property="og:url" content="https://varunsridharan.github.io/css-spinners/">
	<meta property="og:image"
		  content="https://raw.githubusercontent.com/varunsridharan/css-spinners/master/demo/simple.jpg">
</head>
<body>
<!--CSSPin Wrapper-->
<div class="cp-wrapper">

	<!--Header-->
	<h1>CSSSP<span>INNER</span></h1>
	<p>CSS Spinners and Loaders - Modular, Customizable and Single HTML Element Code</p>
	<a href="http://github.com/varunsridharan/css-spinners" target="_blank">View on Github</a>
	<a href="https://sva.onl/css-spinner-tweet" target=_blank>Tweet</a>
	<!--//Header-->

	<?php
	$spinners = array(
		'Simple Spinner'   => 'spin',
		'Spinner Grow'     => 'spin-grow',
		'Spinner Round'    => 'spin-round',
		'Spinner Bubble'   => 'spin-bubble',
		'Spinner Skeleton' => 'spin-skeleton',
	);
	$colors   = array( 'primary', 'secondary', 'info', 'success', 'danger', 'warning', 'light', 'dark' );

	foreach ( $spinners as $title => $spinner ) {
		?>

		<div class="cp-spinners">
			<br/>
			<h2><?php echo $title; ?></h2>
			<div class="cp-spinner-block">
				<div class="<?php echo $spinner; ?>"></div>
				<span><?php echo $title; ?></span>
				<pre>&lt;div class="<?php echo $spinner; ?>"&gt;&lt;/div&gt</pre>
			</div>

			<?php
			foreach ( $colors as $color ) {
				?>
				<div class="cp-spinner-block <?php echo ( 'light' === $color ) ? 'dark' : ''; ?>">
					<div class="<?php echo $spinner; ?> <?php echo $color; ?>"></div>
					<span><?php echo $title; ?> <?php echo $color; ?></span>
					<pre>&lt;div class="<?php echo $spinner; ?> <?php echo $color; ?>"&gt;&lt;/div&gt</pre>
				</div>
				<?php
			}
			?>
			<hr/>
		</div>
		<?php
	}
	?>


	<!--Credits-->
	<p class="credits">&copy; Crafted with
		<svg class="animated-svg active" xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12">
			<path fill="#F26183"
				  d="M7.023,2.142A3.854,3.854,0,0,0,3.763-.005C1.3-.005,0,2.094,0,4.194c0,3.486,7.023,7.811,7.023,7.811s6.982-4.284,6.982-7.811c0-2.142-1.338-4.2-3.721-4.2A3.634,3.634,0,0,0,7.023,2.142Z"></path>
		</svg>
		at <a href="https://github.com/varunsridharan/" target="_blank">Varun Sridharan</a></p>
	<!--//Credits-->

</div>
<!--//CSSPin Wrapper-->
</body>
</html>
