<?php
		if(isset($_POST['sh_nl'])){$message_txt=array('ac'=>'','pe'=>'','pr'=>'','en'=>'');
				$separateur="<br/><br/><br/>";
				$d=array('en'=>date('W'),'pr'=>date('n'),'pe'=>date('j'),'ac'=>date('n'));
				$email=array();
				$emails=array();
				
				$connexion = mysql_connect('localhost', 'root_pda_website', 'q3p_Vv75');
				mysql_select_db('admin_pda');
						switch($_POST['sh_nl']){
							case"en":
										if($requete_en_cours = mysql_query("select phrase from blog where user_name='".date('W')."';"))
												if($row=mysql_fetch_assoc($requete_en_cours))$idp=$row['phrase'];	
										echo"Suivez la newsletter religieuse \"enseignements spirituels\" de la Puissance Divine d'Amour d'Abidjan, faites vos commentaires, invitez le saint-esprit à vos côtés.
										
										#enseignements_spirituels 
										https://www.facebook.com/hashtag/enseignements_spirituels
										https://twitter.com/hashtag/enseignements_spirituels?f=realtime
										https://plus.google.com/explore/enseignements_spirituels
										
										http://www.librairie-puissance-divine.ci/enseignements-spirituels/index.php?enseignement-spirituel=$idp";
									break;
							case"pe":	
										echo"Suivez la newsletter religieuse \"enseignements spirituels\" de la Puissance Divine d'Amour d'Abidjan, faites vos commentaires, invitez le saint-esprit à vos côtés.
										
										#pensees_quotidiennes 
										https://www.facebook.com/hashtag/pensees_quotidiennes
										https://twitter.com/hashtag//puissancedivine_pensees_quotidiennes?f=realtime
										https://plus.google.com/explore/pensees_quotidiennes
										
										http://www.librairie-puissance-divine.ci/newsletters-religieuses/pensees-quotidiennes/index.php?pensee-quotidienne=".date('z');
									break;
							case"pr":	
										echo"Suivez la newsletter religieuse \"enseignements spirituels\" de la Puissance Divine d'Amour d'Abidjan, faites vos commentaires, invitez le saint-esprit à vos côtés.
										
										#prieres_speciales
										https://www.facebook.com/hashtag/prieres_speciales
										https://twitter.com/hashtag//puissancedivine_prieres_speciales?f=realtime
										https://plus.google.com/explore/prieres_speciales
										
										http://www.librairie-puissance-divine.ci/newsletters-religieuses/prieres-catholiques/index.php?priere-speciale=".date('n');
									break;
							case"ac":$id="actualité Puissance Divine";$idp="acutalite";include('actu.php');
									break;
							//default est la newsletter actualité
							default:$emails[$k]['message_txt'].="$separateur rien";break;
						}
		}