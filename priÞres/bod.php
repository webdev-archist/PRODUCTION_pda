			<?php					var_dump($mysqli->query("select * from menu;"));
			?>
<div id='containall' class='<?php if(isset($_GET['menu']))if($_GET['menu']=="vente"||$_GET['menu']=="lieux-activites"||$_GET['menu']=="priere"||$_GET['menu']=="objectifs") echo$_GET['menu'];else echo"main" ?>'>
		<section id='container' class='container'>
		<?php
				if(isset($_GET['menu']))
						switch($_GET['menu']){
								case"priere":case"retraite-spirituelle":case"weekend-du-rosaire":case"location-espace":case"assistance-spirituelle":retraite();
								break;
								case"vente":vente();
								break;
								case"dioceses":diocese();
								break;
								case "vente-en-ligne-objets-pieux":echo vente('objet');
								break;
								case "vente-en-ligne-publications":echo vente('publication');
								break;
								case "lieu-librairie":lieux();include('librairie.php');
								break;
								case "lieux-activites":lieux();
								break;
								case "lieu-bolobi":lieux();include('bolobi.php');
								break;
								case "lieu-fraternite":lieux();include('fraternite.php');
								break;
								case "enseignements":case "archive_enseignement":case "archive_enseignements":include('enseignements.php');
								break;
								case "livredor":include('livredor.php');
								break;
								default:?>
										<iframe src='<iframe width="420" height="315" src="//www.youtube.com/embed/xuYreqSDgHA" frameborder="0" allowfullscreen></iframe>'></iframe>
										La <strong>Puissance Divine d'Amour d'Abidjan</strong> a pour objectifs de :<br/><ul><li>Vendre des objets de piété et des livres religieux.</li><li>Organiser des retraites spirituelles et des week-ends de prières et de repos.</li><li>Louer le centre de retraite spirituelle de Bolobi.</li><li>Apporter assistance spirituelle et psychique.</li></ul>
								<?php break;
						}
				elseif(isset($_GET['panier'])||isset($_POST['panier']))
						include('panier.php');
				elseif(isset($_POST['inscription'])){// $mysqli=new mysqli('localhost','root','','lib');

						$mysqli=$_SESSION['mysqli'];
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						$mysqli->set_Charset("utf8");
						$tmp='';
						if(isset($_POST['enseignement']))$tmp.='enseigenement|';
						if(isset($_POST['actualite']))$tmp.='actualite|';
						if(isset($_POST['meditation']))$tmp.='meditation|';
						if(isset($_POST['priere']))$tmp.='priere|';
						if(isset($_POST['fin']))$tmp.='fin|';
						$tmp=substr($tmp,0,strlen($tmp)-1);
						$rqt="insert into inscripts(`email`,`news`) values('".$_POST['inscription']."','$tmp');";
						if(!$result=$mysqli->query($rqt))echo "inscription échoué";
				}
				elseif(isset($_POST['situation'])){
				}elseif($_SESSION['cle']==1){//echo"oooooooooooooooooo";
						if(isset($_POST['paiement_articles'])){//echo"aaaaaaaaaaaaaaaaa";
								$complement='vente';
								$comp='commande';
								// echo date("Y-m-d H:i:s");

								$mysqli=$_SESSION['mysqli'];
								// $mysqli=new mysqli('localhost','root','','lib');
								// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
								$mysqli->set_Charset("utf8");
								$tel=intval($_POST['phone_compte_user']);
								$vir=$_POST['numero_de_carte'];
								$lig=$_POST['email_compte_user'];
								// echo$vir.$tel.$lig;
								
								
								$tmp="abcdefghijklmnopkrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";		$i=0;$code="";
								while($i<5){$a=rand(0,strlen($tmp)-2);	$code.=substr($tmp,$a,1);	$i++;}
								$aa='';$rqt='';
								$expiration=date('d-m-Y', time()+(7 * 24 * 60 * 60));
								$expirationBD=date('Y-m-d', time()+(7 * 24 * 60 * 60));
								$rqt.="insert into commande(`id` ,`nom` ,`email` ,`tel` ,`tel2` ,`adresse` ,`adresse_comp` ,`cp` ,`pays` ,`montant` ,`timestamp` ,`expiration` ,`type_de_carte` ,`securite` ,`numero_de_carte` ,`nomporteur` ,`type_de_lig` ,`email_compte` ,`email_compte_user` ,`type_de_tel` ,`phone_compte` ,`phone_compte_user`) values('$code','".$_POST['nom']."','".$_POST['email']."','".$_POST['telephone']."','".$_POST['telephone2']."','".$_POST['adresse']."','".$_POST['adresse_comp']."','".$_POST['codepostal']."','".$_POST['pays']."','".$_SESSION['PDmontant']."','".date("Y-m-d H:i:s")."','$expirationBD','".$_POST['type_de_carte']."','".$_POST['securite']."','".$_POST['numero_de_carte']."','".$_POST['nom_porteur']."','".$_POST['type_de_lig']."','".$_POST['email_compte']."','".$_POST['email_compte_user']."','".$_POST['type_de_tel']."','".$_POST['phone_compte']."','".$_POST['phone_compte_user']."');";
								if(!$result=$mysqli->query($rqt)){
										while($i<5){$a=rand(0,strlen($tmp)-2);	$code.=substr($tmp,$a,1);	$i++;}
										$rqt.="insert into commande(`id` ,`nom` ,`email` ,`tel` ,`tel2` ,`adresse` ,`adresse_comp` ,`cp` ,`pays` ,`type_de_carte` ,`securite` ,`numero_de_carte` ,`nomporteur` ,`type_de_lig` ,`email_compte` ,`email_compte_user` ,`type_de_tel` ,`phone_compte` ,`phone_compte_user`) values('$code','".$_POST['nom']."','".$_POST['email']."','".$_POST['telephone']."','".$_POST['telephone2']."','".$_POST['adresse']."','".$_POST['codepostal']."','".$_POST['pays']."','".date("Y-m-d H:i:s")."','$expirationBD','".$_POST['type_de_carte']."','".$_POST['securite']."','".$_POST['numero_de_carte']."','".$_POST['nom_porteur']."','".$_POST['type_de_lig']."','".$_POST['email_compte']."','".$_POST['email_compte_user']."','".$_POST['type_de_tel']."','".$_POST['phone_compte']."','".$_POST['phone_compte_user']."');";
										if(!$result=$mysqli->query($rqt)){
												echo$rqt.'<br/>'; 
												print_r(var_dump($result));print_r(get_class_methods('mysqli'));
										}else include('confirmation_vente.php');
								}
								else{ 
										foreach($_COOKIE['panier'] as $k=>$v){
												
												$aa="$k','$v";
												if($result=$mysqli->query("insert into liste(`id_commande` ,`id_article` ,`quantity`) values('$code','$aa'); "))
												{}
												// echo"WorkED!";
												// else echo'NOTworked!';

												// echo"insert into liste(`id_commande` ,`id_article` ,`quantity`) values('$code','$aa'); ";
												// $rqt.="insert into liste(`id_commande` ,`id_article` ,`quantity`) values('$code','$aa'); ";
										 }//echo"ddddddddddddddddd";
										include('email_conf.php');
										include('confirmation_vente.php');
										// echo"ddddddddddddddddd";
								}
										
									
						}elseif(isset($_POST['retraite_validation'])){ //echo'retraite_validation<br/> créer la table retraite, et insérer ce formulaire';print_r($_POST);
								// ".$_POST['']."
								// if($_SERVER['REMOTE_ADDR']=='127.0.0.1'){print_r($_POST);echo'<hr/>';}
								// echo"ouiiiiiii";
								$expiration=date('d-m-Y', time()+(7 * 24 * 60 * 60));
								
								$complement='vente';
								$comp='réservation';
								if(isset($_POST['phone_compte_user']))$tel=$_POST['phone_compte_user'];								
								if(isset($_POST['numero']))$vir=$_POST['numero'];
								if(isset($_POST['email_compte_user']))$lig=$_POST['email_compte_user'];
								// $_SESSION['PDmontant']=$_POST['montant'];
								
								$mysqli=$_SESSION['mysqli'];
								// $mysqli=new mysqli('localhost','root','','lib');
								// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
								$mysqli->set_Charset("utf8");
								if(isset($_POST['type']))$type=$_POST['type'];else $type='';
								if(isset($_POST['date1']))$date1=$_POST['date1'];else $date1='';
								if(isset($_POST['date2']))$date2=$_POST['date2'];else $date2='';
								
								if(isset($_POST['phone_compte_user']))$rqt="INSERT INTO `reservation` (`id`, `id_retraite`, `username`, `nombre`, `nom`, `email`, `tel1`, `tel2`, `adresse`, `pays`, `timestamp`, `date1`, `date2`, `montant`, `type_de_tel`, `phone_compte`, `phone_compte_user`, `type_de_lig`, `email_compte`, `email_compte_user`, `type_de_carte`, `numero`, `secu`, `nomp`) 
								VALUES ('', '".$_POST['id']."', '$type', '".$_POST['nombre']."', '".$_POST['nom']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['telci']."', '".$_POST['adresse']."', '".$_POST['pays']."', '".date("Y-m-d H:i:s")."', '$date1', '$date2', '".$_POST['montant']."', '".$_POST['type_de_tel']."', '".str_replace(' ','',$_POST['phone_compte'])."', $tel, '".$_POST['type_de_lig']."', '".$_POST['email_compte']."', '$lig', '".$_POST['type_de_carte']."', '$vir', '".$_POST['secu']."', '".$_POST['nomp']."');";
								else $rqt="INSERT INTO `reservation` (`id`, `id_retraite`, `username`, `nombre`, `nom`, `email`, `tel1`, `tel2`, `adresse`, `pays`, `timestamp`, `date1`, `date2`, `montant`) 
								VALUES ('', '".$_POST['id']."', '$type', '".$_POST['nombre']."', '".$_POST['nom']."', '".$_POST['email']."', '".$_POST['telephone']."', '".$_POST['telci']."', '".$_POST['adresse']."', '".$_POST['pays']."', '".date("Y-m-d H:i:s")."', '$date1', '$date2', '".$_POST['montant']."');";
								if(!$result=$mysqli->query($rqt)){echo$rqt.'<br/>'; 
										print_r(var_dump($result));
								}
								else{ include('email_conf.php');include('confirmation_retraite.php');
										
								}
						}
				}elseif(!isset($_POST['paiement_articles'])&&!isset($_POST['retraite_validation'])){
		?>
				<div id='diapo_intro'><!--<span id='ooo'></span>-->
						<article>
								<h3>Librairie Puissance Divine</h3>
								<figure>
										<img src='images/librairie-puissance-d-amour/librairie-religieuse-entree.jpg' alt='librairie religieuse Puissance Divine, entree, abidjan 2plateaux rue des jardins'/>
										<figcaption>L'interieur de la librairie et le personnel, toujours là pour vous guider, quelques soient vos préocupations spirituelles</figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-d-amour/librairie-religieuse-statues-livres.jpg' alt='librairie religieuse Puissance Divine, fond, abidjan 2plateaux rue des jardins'/>
										<figcaption>De nombreux objets de piété y sont à votre disposition: bibles, livres, icônes, statues, grottes, croix, cd-rom, bijoux etc..</figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-d-amour/librairie-religieuse-cd.jpg' alt='librairie religieuse Puissance Divine, bijouterie, abidjan 2plateaux rue des jardins'/>
										<figcaption>Nous proposons des cd-rom, livres d'enseignements et de louanges au Seigneur. Ces articles sont très appréciés par notre clientèle.</figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-d-amour/librairie-religieuse-exterieur.jpg' alt='librairie religieuse Puissance Divine, exterieur, abidjan 2plateaux rue des jardins'/>
										<figcaption>Librairie Puissance Divine à Abidjan IIplateaux rue des jardins.</figcaption>
								</figure>
						</article>
						<article>
								<h3>Fraternité Puissance Divine d'Amour</h3>
								<figure>
										<img src='images/fraternite-puissance-d-amour/fraternite-religieuse-devanture.jpg' alt="fraternite religieuse Puissance Divine d'Amour, exterieur, abidjan 2plateaux rue des jardins"/>
										<figcaption>La fraternité puissance divine d'amour à Abidjan IIplateaux rue des jardins est un lieu de prière à disposition des fidèles chrétiens pour des cénacles de prière les mardis de chaque semaine à 18H.</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-d-amour/fraternite-religieuse-exterieur.jpg' alt="fraternite religieuse Puissance Divine, colombe porte entree, abidjan 2plateaux rue des jardins"/>
										<figcaption>Nos prières se tournent vers l'Esprit-Saint, pour l'avènement du règne de Dieu dans nos coeurs et nos relations.</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-d-amour/fraternite-religieuse-interieur.jpg' alt="fraternite religieuse Puissance Divine, croix jésus, mère marie, colombe du christ"/>
										<figcaption>Un lieu calme et propice au rapprochement des liens avec le Seigneur</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-d-amour/fraternite-religieuse-interieur-2.jpg' alt="librairie religieuse Puissance Divine, eucharistie pretre et fidèle"/>
										<figcaption>La fraternité Puissance Divine d'Amour se réunit tous les mardis à son siège pour invoquer l'Esprit-Saint, afin que se réalise la promesse du Seigneur Jésus de donner une nouvelle Pentecôte: une Pentecôte d'amour au monde.<br/>Les membres de la fraternité Puissance Divine d'Amour, répartis à travers le monde, invoquent l'Esprit-Saint chaque jour pour hâter l'avènement de cette Pentecôte nouvelle. Demandez la prière et le chapelet à l'Esprit-Saint et rejoignez-nous.</figcaption>
								</figure>
						</article>
				</div>
		<?php } ?>
		</section>
		<div><?php if(isset($_GET['menu']))if($_GET['menu']=='priere')echo"Le centre d'accueil et d'hébergement est en aménagement. Les travaux seront terminés début février 2015.";?></div>
</div>