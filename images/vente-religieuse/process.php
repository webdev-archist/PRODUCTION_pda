<?php
require('config.php');
require('class/Image.php');
	// var_dump($_POST['envoie']);
	print_r($_POST);
	if(isset($_POST['supp'])){
		$image=new Image();
		// var_dump($_FILES);
		// print_r($_FILES);
		$image->delete_image($_POST['filename']);
		print_r($image->msg_error);
	}
	if(isset($_POST['upload_envoie'])){
		$image=new Image();
		// var_dump($_FILES);
		// print_r($_FILES);
		if($imageupl=$image->uploadz($_FILES))
		$msg_upl_succ=$image->msg_err;
		else
		$msg_upl_err=$image->msg_err;
	}
	if(isset($_POST['envoie'])){echo"oui";
		if(empty($_POST['title']) || empty($_POST['descr']))
			// $error="Une ou plusieurs informations sont manquantes<br/><a href='".WEB_DIR_URL."index.php?admin=ok'>retour</a>";
			echo "Une ou plusieurs informations sont manquantes<br/><a href='".WEB_DIR_URL."index.php?admin=ok'>retour</a>";
		else{
			$image=new Image();
			if(!isset($_POST['fichierUpdate']))
				if($insertImage=$image->insertImage(trim($_POST['title']),trim($_POST['descr']),trim($_POST['fichier']))){
					header('location:'.WEB_DIR_URL.'index.php?admin=ok&insertImage=ok');
				}
				else
					$error="Une erreur est survenu, l'inertion dans la base de donnée n'a pas pu se faire<br/><a href='".WEB_DIR_URL."admin.php'>retour</a>";
			else
				if($updateImage=$image->updateImage(trim($_POST['title']),trim($_POST['descr']),trim($_POST['fichierUpdate']))){
					header('location:'.WEB_DIR_URL.'index.php?admin=ok&updateImage=ok');
				}
				else
					$error="Une erreur est survenu, l'inertion dans la base de donnée n'a pas pu se faire<br/><a href='".WEB_DIR_URL."admin.php'>retour</a>";
					// echo"Une erreur est survenu, l'inertion dans la base de donnée n'a pas pu se faire<br/><a href='".WEB_DIR_URL."admin.php'>retour</a>";
		}
	}else echo"non";
	
	