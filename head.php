		<meta content="charset=iso-8859-2" />
		<meta name="viewport" content="width=device-width" />
		
		
		<meta name="google" content="unavailable_after:[date]">
		
		
		<link href="//fonts.googleapis.com/css?family=Lobster:400" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
		<link rel="shortcut icon" href="images/pda.jpg" />
		<link rel="image_src" href="images/pda.ico" />
		<link rel="publisher" href="https://www.facebook.com/profile.php?id=251750848293498&fref=ts" />
		
		
		<?php 	if(isset($_SESSION['admin'])){ ?>
		<link rel="stylesheet" href="admin.css" type="text/css" media="all" /><?php 
				}else{	switch($_SESSION['navigateur']['name']){
								case"Chrome":$_SESSION['css']='';break;
								case"Safari":$_SESSION['css']='';break;
								case"Firefox":$_SESSION['css']='-moz';break;
								case"Opera":$_SESSION['css']='-o';break;
								case"MSIE":$_SESSION['css']='-ie';break;
								default:break;
						}
		?>
		<link rel="stylesheet" href="style<?php echo$_SESSION['css']; ?>.css" type="text/css" media="all" /><?php } ?>
		<style>
		<?php
			if(strpos($_SERVER['REMOTE_ADDR'],'196.47.137.126')!==false)echo"#admin{display:block;}";
		?>
		</style>
		
		<script type="text/javascript" src="index.js"></script>
		<script type="text/javascript" src="admin.js"></script>