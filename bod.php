<div id='containall' class='<?php if(isset($_GET['menu']))if($_GET['menu']=="vente-en-ligne"||$_GET['menu']=="puissance-divine-fraternite-librairie-sanctuaire"||$_GET['menu']=="retraites-de-priere-spirituelles-abidjan"||$_GET['menu']=="objectifs-apostoliques") echo$_GET['menu'];else echo"main" ?>'>
		<section id='container' class='container'>
		<?php
		$Bh1=array(	"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan tient une librairie religieuse",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan tient un centre de retraite spirituel",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan tient une fraternité de prière",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan tient une fraternité de prière",
);

$Bh2=array(	"<span class='fhid'>Esprit-Saint</span> librairie religieuse, librairie chrétienne, librairie catholique",
			"<span class='fhid'>Esprit-Saint</span> saint martin de porres, bolobi, sanctuaire du rosaire",
			"<span class='fhid'>Esprit-Saint</span> fraternité chrétienne catholique, groupe de prière prière d'intercession",
			"<span class='fhid'>Esprit-Saint</span> fraternité chrétienne catholique, groupe de prière prière d'intercession",
);
	// var_dump($_GET['menu']);
	// var_dump($_SESSION['sql']['menus']);
	// echo"select menu,menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg";
	// var_dump($_SESSION['sql']['sousmenus']);
// if(isset($page)){$a=$page;$b=$page['img'];$c=$page['video'];$d=$page['textH'];$e=$page['keyword'];}else $a=$b=$c=$d=$e=null;
				if(isset($_GET['menu'])){
						fildariane($page);
						bal('h2',utf8_encode($page['textH']));
						bal('h3',utf8_encode($page['keyword']));
						switch($_GET['menu']){
								case"retraites-de-priere-spirituelles-abidjan":case"retraite-de-priere-spirituelle-esprit-saint-gregorienne":case"retraite-spirituelle-abidjan-week-ends-rosaire":case"location-espace-de-priere-abidjan":case"assistance-spirituelle-abidjan":retraite($page);
								break;
								case"vente-en-ligne":vente($page);
								break;
								case"objectifs-apostoliques":lieux();?>
										<span>La Fraternité Puissance Divine d'Amour d'Abidjan a pour objectifs de :</span><br/><ul><li>Sanctifier par la <strong>prière</strong> et la pratique de la <strong>charité</strong></li><li>Apporter <strong>assistance spirituelle</strong> et psychique.</li><li>Universaliser l'<strong>invocation à l'Esprit Saint</strong></li><li><strong>Vendre des objets de piété</strong> et des <strong>livres religieux</strong>.</li><li>Evangéliser par la diffusion de <strong>l'&Eacute;vangile Révélé</strong>.</li><li>Rassembler les apôtres et disciples du <strong>saint-esprit</strong>.</li></ul>
								<?php
								break;
								case "vente-en-ligne-objets-religieux-catholique":echo vente('objet',$page);
								break;
								case "vente-en-ligne-publications-chretiennes":echo vente('publication',$page);
								break;
								case "puissance-divine-librairie":lieux();include('librairie.php');
								break;
								case "puissance-divine-fraternite-librairie-sanctuaire":lieux();
								break;
								case "puissance-divine-sanctuaire":lieux();include('bolobi.php');
								break;
								case "puissance-divine-fraternite":lieux();include('fraternite.php');
								break;
								case "enseignements-spirituels-chretien-catholique":case "archive_enseignement":case "archive_enseignements":include('enseignements.php');
								break;
								case "livredor":include('livredor.php');
								break;
								default:?>
										<span>La Fraternité Puissance Divine d'Amour d'Abidjan a pour objectifs de :</span><br/><ul><li>Sanctifier par la <strong>prière</strong> et la pratique de la <strong>charité</strong></li><li>Apporter <strong>assistance spirituelle</strong> et psychique.</li><li>Universaliser l'<strong>invocation à l'Esprit Saint</strong></li><li><strong>Vendre des objets de piété</strong> et des <strong>livres religieux</strong>.</li><li>Evangéliser par la diffusion de <strong>l'&Eacute;vangile Révélé</strong>.</li><li>Rassembler les apôtres et disciples du <strong>saint-esprit</strong>.</li></ul>
								<?php break;
						}
				}elseif(isset($_GET['panier'])||isset($_POST['panier'])){
						if(isset($_GET['panier']))if($_GET['panier']=='promo'){		
						// $mysqli=new mysqli('localhost','root','','lib');
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						// $mysqli->set_Charset("utf8");
						
						$promo=$_POST['promo'];
						if($result=$mysqli->query("select * from promotions where id='$promo';")){if($v=$result->fetch_array()){$_SESSION['pdapromo']=$v;$promo=$v['reduc'];}}else $promo=0;
						}else $promo=0;
						$montant=0-$promo;
						include('panier.php');
				}elseif(isset($_POST['inscription'])){// $mysqli=new mysqli('localhost','root','','lib');
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						// $mysqli->set_Charset("utf8");
				}
				elseif(isset($_POST['situation'])){
				}elseif($_SESSION['cle']==1){//echo"oooooooooooooooooo";
						if(isset($_POST['paiement_articles'])){//echo"aaaaaaaaaaaaaaaaa";
								$complement='vente';
								$comp='commande';
								// echo date("Y-m-d H:i:s");
								// $mysqli=new mysqli('localhost','root','','lib');
								// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
								// $mysqli->set_Charset("utf8");
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
								
								if(isset($_POST['date1'])){$complement='vente';$comp='réservation';}else{$complement='vente';$comp='location espace prière';}
								if(isset($_POST['phone_compte_user']))$tel=$_POST['phone_compte_user'];								
								if(isset($_POST['numero']))$vir=$_POST['numero'];
								if(isset($_POST['email_compte_user']))$lig=$_POST['email_compte_user'];
								$_SESSION['PDmontant']=$_POST['montant'];
								// $mysqli=new mysqli('localhost','root','','lib');
								// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
								// $mysqli->set_Charset("utf8");
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
								else{ include('email_conf.php');include('confirmation_retraite.php'); }
						}
				}elseif(!isset($_POST['paiement_articles'])&&!isset($_POST['retraite_validation'])){$a=array();
						// if($result=$mysqli->query("select * from diapo;")){while($v=$result->fetch_array()){if(!isset($a[str_replace(' ','#_#',$v['id'])]))$a[str_replace(' ','#_#',$v['id'])]=array();$a[str_replace(' ','#_#',$v['id'])][]=$v;}}else echo"requete incorrecte";
						// echo"<div id='diapo_intro'>";
						// foreach($a as $k=>$v){echo"<article>
								// <h3>".str_replace('#_#',' ',$k)."</h3>";
								// foreach($v as $kk=>$vv){echo"<figure>
										// <img src='".$vv['img']."' alt=\"".$vv['alt']."\" title=\"".str_replace("'","&acute;",rmv_balise_($vv['texte']))."\" /><figcaption>".$vv['texte']."</figcaption>
										// </figure>";
								// }
								// echo"</article>";
						// }echo"</div>";
		?>
				<div id='diapo_intro'>
						<article>
								<h3>Librairie Puissance Divine</h3>
								<figure>
										<img src='images/librairie-puissance-divine/librairie-religieuse-entree.jpg' alt='librairie religieuse Puissance Divine, entree, abidjan 2plateaux rue des jardins'/>
										<figcaption>L'interieur de la <strong>librairie</strong> et le personnel, toujours là pour vous guider, quelques soient vos préocupations <strong>spirituelles</strong></figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-divine/librairie-religieuse-statues-livres.jpg' alt='librairie religieuse Puissance Divine, fond, abidjan 2plateaux rue des jardins'/>
										<figcaption>De nombreux <strong>objets de piété</strong> y sont à votre disposition: <strong>bibles</strong>, <strong>livres chrétiens</strong>, <strong>icônes religieuses</strong>, <strong>statues religieuse</strong>, <strong>grottes religieuse</strong>, <strong>croix posée</strong> et murales, cd-rom, bijoux etc..</figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-divine/librairie-religieuse-cd.jpg' alt='librairie religieuse Puissance Divine, bijouterie, abidjan 2plateaux rue des jardins'/>
										<figcaption>Nous proposons des cd-rom, livres d'enseignements et de louanges au Seigneur. Ces articles sont très appréciés par notre clientèle.</figcaption>
								</figure>
								<figure>
										<img src='images/librairie-puissance-divine/librairie-religieuse-exterieur.jpg' alt='librairie religieuse Puissance Divine, exterieur, abidjan 2plateaux rue des jardins'/>
										<figcaption>Librairie Puissance Divine à Abidjan IIplateaux rue des jardins.</figcaption>
								</figure>
						</article>
						<article>
								<h3>Fraternité Puissance Divine d'Amour</h3>
								<figure>
										<img src='images/fraternite-puissance-divine-d-amour/fraternite-religieuse-devanture.jpg' alt="fraternite religieuse Puissance Divine d'Amour, exterieur, abidjan 2plateaux rue des jardins"/>
										<figcaption>La <strong>fraternité puissance divine d'amour</strong> à <strong>Abidjan IIplateaux rue des jardins</strong> est un <strong>lieu de prière</strong> à disposition des <strong>fidèles chrétiens</strong> pour des <strong>cénacles de prière</strong> les mardis de chaque semaine à 18H.</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-divine-d-amour/fraternite-religieuse-exterieur.jpg' alt="fraternite religieuse Puissance Divine, colombe porte entree, abidjan 2plateaux rue des jardins"/>
										<figcaption>Nos <strong>prières</strong> se tournent vers l'<strong>Esprit-Saint</strong>, pour l'avènement du règne de Dieu dans nos coeurs et nos relations.</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-divine-d-amour/fraternite-religieuse-interieur.jpg' alt="fraternite religieuse Puissance Divine, croix jésus, mère marie, colombe du christ"/>
										<figcaption>Un lieu calme et propice au rapprochement des liens avec le Seigneur</figcaption>
								</figure>
								<figure>
										<img src='images/fraternite-puissance-divine-d-amour/fraternite-religieuse-interieur-2.jpg' alt="librairie religieuse Puissance Divine, eucharistie pretre et fidèle"/>
										<figcaption>La <strong>fraternité Puissance Divine d'Amour</strong> se réunit tous les mardis à son siège pour invoquer l'<strong>Esprit-Saint</strong>, afin que se réalise la promesse du <strong>Seigneur Jésus</strong> de donner une nouvelle Pentecôte: une Pentecôte d'amour au monde.<br/>Les membres de la <strong>fraternité Puissance Divine d'Amour</strong>, répartis à travers le monde, invoquent l'<strong>Esprit-Saint</strong> chaque jour pour hâter l'avènement de cette Pentecôte nouvelle. Demandez la prière et le chapelet à l'<strong>Esprit-Saint</strong> et rejoignez-nous.</figcaption>
								</figure>
						</article>
				</div>-->
				<article>
						La <strong>librairie puissance divine</strong>, 2plateaux rue des jardins <strong>cocody</strong> <strong>d'abidjan  côte d'ivoire</strong>, est une <strong>librairie religieuse chrétienne catholique</strong> à but apostolique.
				<br/>
						En effet, l'objectif premier de la <strong>puissance divine d'abidjan</strong> et d'affermir la foi des <strong>fidèles chrétiens</strong> et les amener à <strong>prier l'esprit-saint</strong>.
				<br/>
						La <strong>puissance divine</strong> oragnise des <strong>retraites spirituelles</strong>, des <strong>enseignements spirituels</strong> ainsi que la <strong>vente en ligne</strong> d'<strong>articles religieux et spirituels</strong>.
				</article>
		<?php } ?>
		</section>
		<div><?php if(isset($_GET['menu']))if($_GET['menu']=='priere')echo"Le centre d'accueil et d'hébergement est en aménagement. Les travaux seront terminés début Avril 2015.";?></div>
</div>