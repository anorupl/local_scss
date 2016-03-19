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


<header id="site-header" class="col-full-no">
			<div class="title-area col-title">
				<h1>
					<a href="#" rel="home" class="link-logo">
						Kamil Żerebny
					</a>
				</h1>
			</div>	
			<?php include( ELEMENT. 'nav_horizontal.php'); ?>
			<div class="col-8">
				<?php include_once( ELEMENT. 'auto_slider.php'); ?>
			</div>
			<div id="header-content" class="col-4">
				<form method="get" class="searchform" action="#">
					<label for="s" class="screen-reader-text">Search</label>
					<input type="text" class="field" name="s" id="s" placeholder="Search">
					<button type="submit" class="submit" name="submit" id="searchsubmit" value="Search"><i class="icon-search"></i></button>
				</form>
				<hr>
				<div id="widget_top">
					<div class="widget_top">
					<span>Nadchodzące wydarzenia</span>
					<ul class="hfeed vcalendar">
						<li class="tribe-events-list-widget-events hentry vevent type-tribe_events post-14158 tribe-clearfix tribe-events-category-spotkania tribe-events-venue-8976">
							<div class="when backg">
								<div class="miesiac">paź</div><div class="dzien">8</div><div>czw</div> 
							</div>
							<a href="http://bartoszyce.pl/event/kulturalne-czwartki-jolanta-litwin-sarzynska/" rel="bookmark"><div class="event">Kulturalne Czwartki – Jolanta Litwin-Sarzyńska</div></a>
						</li>	
					</ul>
					<!-- .hfeed -->
				</div></div>
				
				
				
			</div>
<div class="col-full">
<!-- Menu poziome -->
        
			<button class="icon-button-small-menu" aria-expanded="false" aria-controls="menu-id">Menu and widgets</button>          	
          	<nav id="menu-id" class="horizontal simple hidde" data-class="horizontal simple hidde" role="navigation">
          	<h2 class="screen-reader-text">Nawigacja</h2>

			<?php include( ELEMENT. 'nav_ul.php'); ?>
			
			</nav> <!-- Koniec Menu poziome -->
			<div class="clear"></div>	
</div>
			
			
	
</header>







