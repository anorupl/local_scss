<?php 
$index = 'index';
$temp = '';
$prefix = '_porto';

// Use php directroy separator for windows/unix compatibili
define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', dirname(__FILE__).DS);
define('TEMPLATE', SITE_ROOT . 'template'.DS);
define('QUERY', SITE_ROOT . 'query'.DS);

define('ELEMENT', TEMPLATE . 'element'.DS);
define('ELEMENT_PREFIX', TEMPLATE . 'element'.DS . $prefix .DS);
define('SINGLE', TEMPLATE . 'single'.DS);
define('HEADER', TEMPLATE . 'header'.DS);
define('SIDEBAR', TEMPLATE . 'sidebar'.DS);
define('TEMPLATE_H', TEMPLATE . 'header'.DS);
?>
<?php 
if (isset($_GET['index'])) 	{	$index = $_GET['index'];}   
if (isset($_GET['page'])) 	{	$temp = $_GET['page'];	} 		





// index Side
if ($index == 'index_side') { 

	include( QUERY. 'index_side.php');
}
// single Side
elseif ($index == 'index_single_side') { 
	include( QUERY. 'single_side.php');
}



//index full witch 
elseif ($index == 'index') { 
	include( QUERY. 'index_full.php');
}
//Single full witch
elseif ($index == 'index_single') { 
	include( QUERY. 'single_full.php');
}


//index portal
elseif ($index == 'index_portal') { 
	include( QUERY. 'index_portal.php');
}
//Single portal
elseif ($index == 'single_portal') { 

	include( QUERY. 'single_portal.php');
}


?>



