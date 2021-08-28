<?php
		//ce fichier sert à utiliser FacebookConnect
		include('fb.php');
		
		
		

		$mysqli=$_SESSION['mysqli'];
		// $mysqli=new mysqli('localhost','root','','lib');
		// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
		$mysqli->set_Charset("utf8");  
		
		if(isset($_GET['id'])){
				$email=array();
				if($result=$mysqli->query("select email from newsletter where id='".$_GET['id']."';"))
						while($v=$result->fetch_array())
								$email[]=$v['email'];
				// echo$email;
				// print_r($email);
		
		
		
				ini_set('sendmail_from', 'achicyr@hotmail.fr');
				foreach($email as $v)
				{		$mail = $v;
						if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
						{$passage_ligne = "\r\n";}
						else{$passage_ligne = "\n";}
				}				
				switch($_GET['id']){
						case"en":$id="enseignement spirituel";
								// if($result=$mysqli->query("select phrqe from blog where user_name=='".date('W')."';"))	if($v=$result->fetch_array())	$ens=$v['phrase'];
								if($result=$mysqli->query("select phrqe from blog where user_name=='".date('W')."';"))	if(!$v=$result->fetch_array()){}
								$message_txt="<div><a href='./../enseignements-spirituels/index.php?enseignement-spirituel=$v'>Lien vers la newsletter <b>\"$id\"</b>de http://librairie-puissance-divine.ci</a> : Puissance Divine d'Amour d'Abidjan, cocody 2 plateaux</div>";
						break;
						case"pe":$id="pensée quotidienne";
								$message_txt="<div><a href='index.php?id=pe'>Lien vers la newsletter <b>\"$id\"</b> de http://librairie-puissance-divine.ci</a></div>";break;
						default:break;
				}
		
				$message_html =    "<!DOCTYPE html>
									<html>
										<head>
											<meta charset='utf-8' />
											<title>Titre</title>
										</head>

										<body>$message_txt
										</body>
									</html>";
					$boundary = "-----=".md5(rand());
				//==========
 
				//=====Définition du sujet.
				$sujet = "newsletter $id de : Puissance Divine d'Amour d'Abidjan";
				//=========
				 
				//=====Création du header de l'e-mail.
				$header = "From: \"ACHI Geneviève\"<puissancedamour@gmail.com>".$passage_ligne;
				$header.= "Reply-to: \"WeaponsB\" <puissancedamour@gmail.com>".$passage_ligne;
				$header.= "MIME-Version: 1.0".$passage_ligne;
				$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
				//==========
				 
				//=====Création du message.
				$message = $passage_ligne."--".$boundary.$passage_ligne;
				//=====Ajout du message au format texte.
				$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
				$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
				$message.= $passage_ligne.$message_txt.$passage_ligne;
				//==========
				$message.= $passage_ligne."--".$boundary.$passage_ligne;
				//=====Ajout du message au format HTML
				$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
				$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
				$message.= $passage_ligne.$message_html.$passage_ligne;
				//==========
				$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
				$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
				//==========
				 
				//=====Envoi de l'e-mail à toute latable correspondante newsletter.
				$cpt=0;$cptbis=0;
				foreach($email as $v){$cpt+=1;
						if(!mail($v,$sujet,$message,$header))echo utf8_encode("Envoie de la newsletter &eacute;chou&eacute;.<br/>");else $cptbis+=1;
				}echo "$cptbis envoies r&eacute;ussis sur $cpt .";
		}else{
		
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
			<div><a href='index.php?id=en'>Lancer la newsletter hebdomadaire : enseignement spirituel</a></div>
			<div><a href='index.php?id=pe'>Lancer la newsletter quotidienne : pensée</a></div>
			<div><a href='index.php?id=ac'>Lancer la newsletter mensuelle : actualité</a></div>
			<div><a href='index.php?id=pr'>Lancer la newsletter hebdomadaire : prière</a></div>
    </body>
</html>
<?php
		}
?>