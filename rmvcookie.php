<?php
global $HTTP_COOKIE_VARS;
	if (sizeof($HTTP_COOKIE_VARS))
			while (list ($Cookie, $x) = each ($HTTP_COOKIE_VARS)) setcookie($Cookie,'',time()-1000);
	
?>