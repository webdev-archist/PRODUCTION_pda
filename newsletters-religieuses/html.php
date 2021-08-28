<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
			<?php 
			echo'ldll';
					// if you include this file you don't need to use composer
require_once('Facebook/autoload.php');
echo'lldl';
// use these
use Facebook\FacebookSession; 
use Facebook\FacebookRedirectLoginHelper; 

// initiate the session
			?>
    <a href='<?php echo$loginUrl; ?>'>entrez sur fb</a>
    </body>
</html>