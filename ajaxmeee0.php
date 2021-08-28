<?php
		if(isset($_POST['nl'])){$message_txt=array('ac'=>'','pe'=>'','pr'=>'','en'=>'');
				$separateur="<br/><br/><br/>";
				$d=array('en'=>date('W'),'pr'=>date('n'),'pe'=>date('j'),'ac'=>date('n'));
				$email=array();
				$emails=array();
				
				$connexion = mysql_connect('localhost', 'root_pda_website', 'q3p_Vv75');
				mysql_select_db('admin_pda');
				if($requete_en_cours = mysql_query("select * from newsletter;")){
						$cptn=0;
						// echo mysql_num_rows($requete_en_cours)."lmkkkkkkkkklklmlk";
						while($row=mysql_fetch_assoc($requete_en_cours)){$cptn++;	
								if($row['statut']<$d[$row['id']])				
								{		$email[$row['email']]['message_txt']='';
										$email[$row['email']]['statut']=$row['statut'];
										$email[$row['email']][]=$row['id'];
										$query[]="update newsletter set statut='".$d[$row['id']]."' where email='".$row['email']."' and id='".$row['id']."';";
								}//else echo$row['statut'].'&&'.$d[$row['id']].'||';
								// echo$row['statut'].'&&'.$d[$row['id']].'<br/>';
						}
						// 
				}
				// var_dump($query);
				// foreach($query as $k=>$v){if(!$requete_en_cours = mysql_query($v)){echo"chiotte!";}
				foreach($email as $k=>$v){//echo"#!#".$k;
						for($i=0;$i<count($v)-1;$i++){//echo$i.$v[$i];
										switch($v[$i]){
											case"en":
														$id="enseignement spirituel";$idp="enseignements_spirituels";
														$connexion = mysql_connect('localhost', 'root_pda_website', 'q3p_Vv75');
														mysql_select_db('admin_pda');
														if($requete_en_cours = mysql_query("select phrase as a from blog where user_name='".date('W')."';"))
																if($row=mysql_fetch_assoc($requete_en_cours))
																		$idpp=$row['a'];
																else echo"rien";
														else echo"select phrase as a from blog where user_name='".date('W')."';";
														// if($result=$mysqli->query("select phrqe from blog where user_name=='".date('W')."';"))	if($v=$result->fetch_array())	$ens=$v['phrase'];
														$emails[$k]['message_txt'].="$separateur<h1>Enseignement spirituel</h1>
																	  <div>Lien vers la <a href='http://www.librairie-puissance-divine.ci/newsletters-religieuses/enseignements-spirituels/index.php?enseignement-spirituel=$idpp' title='newsletter religieuse catholique enseignement spirituel, librairie religieuse puissance divine'>newsletter <b>\"$id\"</b>de http://librairie-puissance-divine.ci</a> : votre ecommerce religieux en Abidjan !</div><br/>
																	  <div>Hashtag facebook <img src='http://librairie-puissance-divine.ci/images/fba.png' alt=''/> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://www.facebook.com/hashtag/$idp</div>
																	  <div>Hashtag twitter <img src='http://librairie-puissance-divine.ci/images/twa.png' alt=''/> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://twitter.com/hashtag/$idp?f=realtime</div>
																	  <div>Hashtag google+ <img src='http://librairie-puissance-divine.ci/images/gpa.png' alt=''/> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://plus.google.com/explore/$idp</div>
													";break;
											case"pe":$id="pens&eacute;e quotidienne";$idp="pensees_quotidiennes";
													$emails[$k]['message_txt'].="$separateur<h1>Pensée quotidienne</h1>
																  <div>Lien vers la <a href='http://www.librairie-puissance-divine.ci/newsletters-religieuses/pensees-quotidiennes/index.php?pensee-quotidienne=".$v['statut']."' title='newsletter religieuse catholique pensée quotidienne, librairie religieuse puissance divine'>newsletter <b>\"$id\"</b> de http://librairie-puissance-divine.ci</a> : votre ecommerce religieux en Abidjan !</div><br/>
																  <div>Hashtag facebook <span class='fba'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://www.facebook.com/hashtag/$idp</div>
																  <div>Hashtag twitter <span class='twa'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://twitter.com/hashtag/puissancedivine_$idp?f=realtime</div>
																  <div>Hashtag google+ <span class='gpa'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://plus.google.com/explore/$idp</div>
													";break;
											case"pr":$id="prières mensuelles";$idp="prieres_speciales";
													$emails[$k]['message_txt'].="$separateur<h1>Prière spéciale</h1>
																  <div>Lien vers la <a href='http://www.librairie-puissance-divine.ci/newsletters-religieuses/preires-speciales/index.php?priere-speciale=".$v['statut']."' title='newsletter religieuse catholique pensée quotidienne, librairie religieuse puissance divine'>newsletter <b>\"$id\"</b> de http://librairie-puissance-divine.ci</a> : votre ecommerce religieux en Abidjan !</div><br/>
																  <div>Hashtag facebook <span class='fba'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://www.facebook.com/hashtag/$idp</div>
																  <div>Hashtag twitter <span class='twa'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://twitter.com/hashtag/puissancedivine_$idp?f=realtime</div>
																  <div>Hashtag google+ <span class='gpa'></span> Newsletter Puissance Divine #<b>\"$idp\"</b> : https://plus.google.com/explore/$idp</div>
													";break;
											case"ac":$id="actualité Puissance Divine";$idp="acutalite";include('actu.php');
													break;
											//default est la newsletter actualité
											default:$emails[$k]['message_txt'].="$separateur rien";break;
										}
						}
						// echo'$v=';var_dump($v);
				}
				// var_dump($emails);
				//==========
				$cpt=0;$cptbis=0;
				// print_r($email);
				
				$mysqli=$_SESSION['mysqli'];
				$mysqli->set_Charset("utf8");
				$aa='';foreach($query as $k=>$v){
						if(!$result=$mysqli->query($v))$aa.="$v<br/>";
				}echo$aa."<br/>";
				foreach($emails as $k=>$v)
				{		$mail = $k;
						$message_txt=$v['message_txt'];
						$message_html =    "<!DOCTYPE html>
											<html>
												<head>
													<meta charset='utf-8' />
													<title>Titre</title>
													<style>body{background:url(images/ecommerce-catholique-saint-esprit-Dieu-amour.png) center center no-repeat;
													</style>
												</head>

												<body>$message_txt
												</body>
											</html>";
						$boundary = "-----=".md5(rand());
						ini_set('sendmail_from', 'achicyr@hotmail.fr');
						if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
						{$passage_ligne = "\r\n";}
						else{$passage_ligne = "\n";}	
						
						
						$sujet = "newsletter Puissance Divine d'Amour d'Abidjan:";
						$header = "From: \"ACHI Geneviève\"<puissancedamour@gmail.com>".$passage_ligne;
						$header.= "Reply-to: \"WeaponsB\" <puissancedamour@gmail.com>".$passage_ligne;
						$header.= "MIME-Version: 1.0".$passage_ligne;
						$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
						$message = $passage_ligne."--".$boundary.$passage_ligne;
						$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						$message.= $passage_ligne.$message_txt.$passage_ligne;
						$message.= $passage_ligne."--".$boundary.$passage_ligne;
						$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
						$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
						$message.= $passage_ligne.$message_html.$passage_ligne;
						$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
						$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
						$cpt+=1;
						if(!mail($k,$sujet,$message,$header))$faileds=$k.';;;';else{ $cptbis+=1;$mail_copy.="($cptbis) $mail;";}
				}echo "<br/><br/><br/>$cptbis envoies r&eacute;ussis sur $cpt .<br/><br/><br/>Liste des emails envoyés: <br/>$mail_copy <br/><br/><br/>Liste des echecs:<br/> $faileds<br/>";
				
		}