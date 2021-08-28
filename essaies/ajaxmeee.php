<?php
		if(isset($_POST['sh_nl'])){
				//faire un check pour chaque n-l si deja envoyé ou pas?
				switch($_POST['sh_nl']){
						case"en":$id="enseignement spirituel";
								// if($result=$mysqli->query("select phrqe from blog where user_name=='".date('W')."';"))	if($v=$result->fetch_array())	$ens=$v['phrase'];
								$message_txt="<div><a href='./../enseignements-spirituels/index.php?enseignement-spirituel=$v'>Lien vers la newsletter <b>\"$id\"</b>de http://librairie-puissance-divine.ci</a> : Puissance Divine d'Amour d'Abidjan, cocody 2 plateaux</div>";
						break;
						case"pe":$id="pens&eacute;e quotidienne";
								$message_txt="<div>Lien vers la <a href='http://www.librairie-puissance-divine.ci/index.php?id=pe' title='newsletter religieuse catholique pensée quotidienne librairie religieuse puissance divine'>newsletter <b>\"$id\"</b> de http://librairie-puissance-divine.ci</a></div>";break;
						default:break;
				}echo$message_txt;
		}elseif(isset($_POST['id'])){
				$email=array();
				if($result=$mysqli->query("select email from newsletter where id='".$_POST['id']."';"))
						while($v=$result->fetch_array())
								//faire l'uplet statut de la table newsletter
								// if((($v['id']=='en')&&$v['statut']!=date('W'))||($v['id']=='pe'&&$v['statut']!=date('z'))||($v['id']!='pe'||$v['id']=='pac')&&$v['statut']!=date('n')))
										$email[]=$v['email'];
				// echo$email;
				// print_r($email);
		
		
				$message_txt=$_POST['msg'];
				ini_set('sendmail_from', 'achicyr@hotmail.fr');
				foreach($email as $v)
				{		$mail = $v;
						if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
						{$passage_ligne = "\r\n";}
						else{$passage_ligne = "\n";}
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
						if(!mail($v,$sujet,$message,$header))echo utf8_encode("Envoie de la newsletter à $v &eacute;chou&eacute;.<br/>");else $cptbis+=1;
				}echo "$cptbis envoies r&eacute;ussis sur $cpt .";
		}