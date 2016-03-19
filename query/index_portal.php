<?php

	include_once( HEADER. 'header_portal.php'); 
	  
	   
		if(!empty($temp)) {
		   		$file =  TEMPLATE . $temp . '.php';
					if(is_file($file)) include ($file); 
					else echo "<br />Nie ma takiej strony :-(";
		   }
	   	else {
	   	      include (TEMPLATE . 'front-page.php'); 
			}
	       
	?> 
<footer></footer>
</body></html>
