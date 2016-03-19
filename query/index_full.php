<?php

	include( HEADER. 'header.php'); ?>

	<?php 
	   
   
		   if(!empty($temp)) {
		   		$file =  TEMPLATE . $temp . '.php';
					if(is_file($file)) include ($file); 
					else echo "<br />Nie ma takiej strony :-(";
		   }
	   
	   
	   else {
	   	      include (TEMPLATE . 'front-page.php'); 
		
	   }
	       
	?> 
<footer class="col-full">


<!-- Wszystko nad -->
<div class="col-6" >
	<div id="footer-slider1" class="flexslider fs-basic fs-style-1">
		<ul class="slides">
			<li>
				<img src="/scss/img/slide/slide-1.jpg" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>
<div class="col-6" >
	<!-- Wszystko pod -->
	<div id="footer-slider2" class="flexslider fs-basic fs-style-2">
		<ul class="slides">
			<li>
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>
<!-- strzaki nad -->

<div class="col-6" >
	<div id="footer-slider3" class="flexslider fs-basic fs-style-3">
		<ul class="slides">
			<li>
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>
<div class="col-6" >
	<div id="footer-slider4" class="flexslider fs-basic fs-style-4">
		<ul class="slides">
			<li>
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>

<div class="col-6" >
	<div id="footer-slider-thumbnails" class="flexslider fs-basic fs-style-3">
		<ul class="slides">
			<li data-thumb="/scss/img/slide/slide-1.jpg"">
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li data-thumb="/scss/img/slide/slide-2.jpg"">
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>
<div class="col-6" >
	<div id="footer-carousel" class="flexslider fs-basic fs-style-3">
		<ul class="slides">
			<li>
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>	
			<li>
				<img src="/scss/img/slide/slide-1.jpg"" alt="">
			</li>
			<li>
				<img src="/scss/img/slide/slide-2.jpg"" alt="">
			</li>			
		</ul>
	</div>
</div>





<!--- slic slides -->

<div class="col-6" >
	<div id="slick-slides-1" class="slick-basic slick-style-1">
		<div><img src="/scss/img/slide/slide-1.jpg" alt=""></div>
		<div><img src="/scss/img/slide/slide-2.jpg" alt=""></div>
		<div><img src="/scss/img/slide/slide-1.jpg" alt=""></div>
		<div><img src="/scss/img/slide/slide-2.jpg" alt=""></div>
	</div>
</div>















</footer><!-- .footer  -->
</body></html>