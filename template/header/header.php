<!DOCTYPE html>
<html lang="en" class="svg js">
	<head>
		<title>fat</title>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<link href="style.css" rel="stylesheet" media="screen"/>
<script type="text/javascript" src="js/library/jquery-1.11.2.min.js" ></script>
		<!--	<script type="text/javascript" src="js/plugins/html5.js" ></script> -->

		<script type="text/javascript" src="js/plugins/flexslider.min.js" ></script>
		<script type="text/javascript" src="js/plugins/slick.min.js" ></script>

		<script type="text/javascript" src="js/plugins/jquery.fancybox.pack.js" ></script>
		<!-- <script type="text/javascript" src="js/plugins/jquery.justifiedGallery.min.js" ></script> -->
		<!-- <script type="text/javascript" src="js/plugins/mapa.js" ></script> -->
		
		<script type="text/javascript" src="js/main.js" ></script>
		<script type="text/javascript">
		/* <![CDATA[ */
		var screenReaderText = {"expand":"<span class=\"screen-reader-text\">rozwi\u0144 menu potomne<\/span>","collapse":"<span class=\"screen-reader-text\">zwi\u0144 menu potomne<\/span>"};
		/* ]]> */
		</script>
<?php if ($temp == 'contact') { ?>
			<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;ver=4.3.1'></script>
			<script type="text/javascript" src="js/mapa.js" ></script>
<?php } ?>
	</head>
<body class="home">


<header id="site-header" class="col-full-no over">
			<div class="title-area">
				<h1>
					<a href="http://kamilzerebny.pl/" rel="home" class="link-logo">
						<img class="logo-svg" alt="Fotografia Krajobrazowa – Kamil Żerebny" src="http://kamilzerebny.pl/wp-content/themes/wp_portfolio/img/logo.svg">
						<img class="logo-png" alt="Fotografia Krajobrazowa – Kamil Żerebny" src="http://kamilzerebny.pl/wp-content/themes/wp_portfolio/img/logo.png">
						<span class="logo-tekst">Kamil Żerebny</span>
					</a>
				</h1>
			</div>	
			<?php include_once( ELEMENT. 'nav_horizontal_over.php'); ?>
</header>
			<?php include_once( ELEMENT. 'full_slider.php'); ?>







