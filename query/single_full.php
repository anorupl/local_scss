<?php

	include_once( HEADER. 'header_single.php'); 
	  
	   
		if(!empty($temp)) {
		   		$file =  SINGLE . $temp . '.php';
					if(is_file($file)) include ($file); 
					else echo "<br />Nie ma takiej strony :-(";
		   }
	   	else {
	   	      include (SINGLE. 'single_standard.php'); 
			}
	       
	?> 
<footer></footer>
</body></html>