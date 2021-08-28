<?php


		function retraite(){
$Bh1=array(	"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan organise des retaites spirituelles au coeur d'accueil de Jésus de Bolobi",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan organise des retaites spirituelles Grégorienne et à l'Esprit-Saint",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan organise des retaites spirituelles Grégorienne et au Saint Esprit",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan organise des weekends du Rosaire",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan loue le centre du Coeur d'Accueil de Jésus de Bolobi",
			"<span class='fhid'>Saint Esprit</span> La Puissance Divine d'Amour d'Abidjan organise des prières d'intercession"
);
$Bh2=array(	"<span class='fhid'>Esprit-Saint</span> Spiritualité, prière, Esprit-Saint",
			"<span class='fhid'>Esprit-Saint</span> Retraite spirituelle Grégorienne et retraite spirituelle au Saint Esprit",
			"<span class='fhid'>Esprit-Saint</span> weekend de prière au coeur d'accueil de Jésus de Bolobi",
			"<span class='fhid'>Esprit-Saint</span> Location du coeur d'accueil de Jésus aux fidèles chrétiens: recollection..etc",
			"<span class='fhid'>Esprit-Saint</span> Un groupe de prière se réuni pour invoquer la grâce divine sur les fidèle croyants le demandant."
);
if(isset($_GET['menu']))switch($_GET['menu']){
				case'retraite-de-priere-spirituelle-esprit-saint-gregorienne':$un=array('ssmenu_hover','','','');
						bal('h2',array($Bh1[1],$Bh1[2]));bal('h3',$Bh2[1]);;break;
				case'retraite-spirituelle-abidjan-week-ends-rosaire':$un=array('','ssmenu_hover','','');
						bal('h2',$Bh1[3]);bal('h3',$Bh2[2]);break;
				case'location-espace-de-priere-abidjan':$un=array('','','ssmenu_hover','');
						bal('h2',$Bh1[4]);bal('h3',$Bh2[3]);break;
				case'assistance-spirituelle-abidjan':$un=array('','','','ssmenu_hover');
						bal('h2',$Bh1[5]);bal('h3',$Bh2[4]);break;
				default:bal('h2',$Bh1[0]);bal('h3',$Bh2[0]);$un=array('','','','');}
bal(array('img','images/retraites-spirituelle-priere.png'),array("alt"=>"Retrouvez nos retraites spirituelles à Abidjan au coeur d'accueil de Jésus de Bolobi","title"=>"retraite de prière grégorienne, à l'esprit-saint, recollection etc.."));
bal(array('video','http://youtu.be/h2JAZijmLf0',array("controls"=>"controls","width"=>"200")),array("title"=>"Retrouvez nos retraites spirituelles à Abidjan au coeur d'accueil de Jésus de Bolobi","retraite de prière grégorienne, à l'esprit-saint, recollection etc.."));

?>
		<menu><?php 
						// var_dump($_SESSION['sql']['sousmenus']);
						foreach($_SESSION['sql']['sousmenus'] as $k=>$v)
								if($v['user_name']=='priere')
								{		echo utf8_encode("<li><a class='".$un[$k-2]."' href='index.php?menu=".$v['url']."' title='".$v['description']."'>".$v['menu']."</a></li>");
										// PRINT_r($_SESSION['sql']['menu']);
								}
		?></menu>
<?php 			if($_GET['menu']!='retraites-de-priere-spirituelles-abidjan'){echo"<div><div id='retraite_descr'>";

						if(($_GET['menu']=='retraite-de-priere-spirituelle-esprit-saint-gregorienne')){$ret='à la retraite spirituelle';?>
								<h3>Nous organisons deux types de retraite:</h3>
								<input type='radio' value='ouverte' class='type' name='type' onclick='see(this.value);ret(this.value);'/><legend>Retraite Grégorienne</legend>
								<input type='radio' value='fermee' class='type' name='type' onclick='see(this.value);ret(this.value);'/><legend>Retraite à l'Esprit-Saint</legend>
								<div id='dates'><form name='spir'></form></div>
								<hr/>
								<div class='ret_info'>
										<h2>Retraite spirituelle grégorienne</h2>
										<p>
												Le Sanctuaire du Rosaire de Bolobi, sous l'égide de la fraternité Puissance Divine d'Amour organise, chaque année des retraites spirituelles grégoriennes pour les âmes du purgatoire. La tradition assure que la pratique des messes grégoriennes pour les âmes du purgatoire a été révélée au Pape Saint Grégoire. Elle est d'une étonnante efficacité et vertu pour délivrer de leurs peines les âmes du purgatoire, sans doute parcequ'elle s'appuie principalement sur les mérites du Christ, grâce auxquels toute leur dette se trouve acquittée.<br/>
												"Si vous faites cela pour le prochain à l'heure de sa mort, votre prière retournera vers vous, avec une efficacité plus grande encore. Si vous le faites pour vous-même pendant votre vie, ces suffrages vous seront plus profitables que si vous comptiez sur les autres pour vous les appliquer après votre mort. Quant au Seigneur, toujours fidèle et qui ne cherche que l'occasion de nous faire du bien, Il en conservera le souvenir et vous le réservera pour le temps qu'Il a choisi." (Ste Gertrude)<br/>
												<!--<br/><u>Programme :</u><br/>
												<ul>
														<li>Récitation du chapelet du Pape St Grégoire (7 jours)</li>
														<li>7 messes grégoriennes pour les âmes du purgatoire (7 jours)</li>
														<li>7 aumônes par jour, pendant 7 jours</li>
														<li>Enseignement tirés de l'&Eacute;vangile Révélé</li>
														<li>La retraite grégorienne dure 7 jours</li>
												</ul>-->
										</p>
										<hr/>
										<ul>
												<li>Récitation du chapelet du Pape St Grégoire (7 jours)</li>
												<li>7 messes grégoriennes pour les âmes du purgatoire (7 jours)</li>
												<li>7 aumônes par jour, pendant 7 jours</li>
												<li>Enseignements</li>
												<li>La retraite grégorienne dure 7 jours</li>
										</ul>
								</div>
								<div class='ret_info'>
										<h2>Retraite spirituelle à l'Esprit-Saint</h2>
										<p>
												Chaque année, dans le courant du mois de février, la fraternité Puissance divine organise une retraite à l'Esprit-Saint.<br/>
												Y sont invités:<br/>
												- tous ceux qui prient l'Esprit-Saint
												- tous ceux qui veulent réveiller en eux l'Esprit-Saint reçu au baptême et à la confirmation<br/>
												- tous ceux qui ont besoin de la protection Divines contre les attaques du Démon.<br/>
												<!--<br/><u>Programme :</u><br/>
												<ul>
														<li>Récitation du chapelet du Pape St Grégoire (7 jours)</li>
														<li>7 messes grégoriennes pour les âmes du purgatoire (7 jours)</li>
														<li>7 aumônes par jour, pendant 7 jours</li>
														<li>Enseignement tirés de l'&Eacute;vangile Révélé</li>
														<li>La retraite grégorienne dure 7 jours</li>
												</ul>
										</p>
										<hr/>
										<ul>
												<li>Programme</li>
										</ul>-->
								</div>
						<?php
						}elseif($_GET['menu']=='retraite-spirituelle-abidjan-week-ends-rosaire'){$ret='au week-end du Rosaire';?>
								<h3>Selectionnez une date : </h3>
								<div id='dates'><form name='week'><?php

						$mysqli=$_SESSION['mysqli'];
						// $mysqli=new mysqli('localhost','root','','lib');
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						$mysqli->set_Charset("utf8");
						require('lpd.php');
						$rqt="select * from ret where user_name='week' and ret.date>date(now());";
						if($result=$mysqli->query($rqt)){$i=0;
								while($v=$result->fetch_array()){
										// echo checkdate(intval(substr($v['date'],5,2)),intval(substr($v['date'],8,2)+7),intval(substr($v['date'],0,4)));
										$date = date("Y-m-d");
										$vv = date("Y-m-d", strtotime($v['date']. " +7 day"));
										echo"<fieldset><span class='unsee'>".$v['places']."</span><legend onclick='nexSib(this).click();'>".trans3(date('D',mktime(0,0,0,intval(substr($v['date'],5,2)),intval(substr($v['date'],8,2)),intval(substr($v['date'],0,4)))))." ".substr($v['date'],8,2)." ".trans1(substr($v['date'],5,2))." ".substr($v['date'],0,4)." - ".trans3(date('D',mktime(0,0,0,substr(date("Y-m-d", strtotime($v['date']. " +2 day")),5,2),substr(date("Y-m-d", strtotime($v['date']. " +2 day")),8,2),substr(date("Y-m-d", strtotime($v['date']. " +2 day")),0,4)))) ." ".substr(date("Y-m-d", strtotime($v['date']. " +2 day")),8,2)." ".trans1(substr(date("Y-m-d", strtotime($v['date']. " +2 day")),5,2))." ".substr(date("Y-m-d", strtotime($v['date']. " +2 day")),0,4)."</legend><input onclick='sel(this.parentNode);retraite.id.value=this.value' type='radio' name='date'/><span onclick='preSib(this).click();'>selectionner cette date ?</span></fieldset>"
										;
								$i++;}
										if($i==0)echo"Aucune date disponible";
						}
								?></form></div>
								<hr/>
								<h2>Week-end du Rosaire</h2>
								<p>
										Le deuxième week-end de chaque mois, la fraternité Puissance Divine d'Amour organise à Bolobi, une retraite spirituelle centrée sur le Rosaire du Coeur d'Accueil de Jésus pour la délivrance, la guérison et la protection.
										<br/>
								</p>
								<hr/>
								<?php
						}elseif($_GET['menu']=='location-espace-de-priere-abidjan'){$ret="pour location d'espace de prière";?>
								<hr/>
								<h2>Location d'espace spirituel</h2>
								<p>
										Le sanctuaire notre Dame du Rosaire de Bolobi, site de repos et de silence par excellence, accueille et héberge :<br/>
										<ul>
												<li>
														des couples, des familles ou des personnes seules en quête de repos, de silence et de communion avec la nature.
												</li>
												<li>
														des groupes organisés pour des retraites spirituelles, des récollections et des activités de détente.
												</li>
												<li>
														Des malades convalescents en quête de repos et de quiétude.<br/>etc...
												</li>
										</ul>
										Le santuaire comprend :
										<ul>
												<li>
														des studios bien aménagés et ventilés de 18,50m² avec salle d'eau individuelle carrelée,
												</li>			
												<li>
														des dortoirs avec salle d'eau séparée pour homme et pour femme.
												</li>										
										</ul>
								</p>
								<hr/>
								Tarifs:<br/>
								<ul>
									<li>Studio: 4500 Fcfa le lit</li>
									<li>Dortoir: 2500 Fcfa le lit</li>
									<li>Recollection: 500 Fcfa la journée et par personne</li>
								</ul>
						
						<?php }
						elseif($_GET['menu']=='assistance-spirituelle-abidjan'){$ret="demande de prière ";?>
								<hr/>
								<h2>Demande de prières d'intercession</h2>
								<!--<p>
										<legend>&Eacute;vangile selon Saint Marc, 16, 15-18</legend><br/>
										Et il leur dit:<br/>
										- "Allez dans le monde entier annoncez la Bonne Nouvelle à tous les hommes. Celui qui croira et sera baptisé sera sauvé, mais celui qui ne croira pas sera condamné. Voici les signes miraculeux qui accompagneront ceux qui auront cru : en mon nom, ils chasseront les démons, ils parleront des langues nouvelles, ils saisiront des serpents venimeux, ou s'il leur arrive de boire un poison mortel, cela ne leur causera aucun mal. Ils imposeront les mains à des malades et ceux-ci seront guéris".
								</p>-->
								<p>
										<legend>L'action du démon</legend><br/>
										"Satan est sorti de l'Enfer avec des milliards et des milliards de démons. Son objectif principal est de conduire l'humanité à son auto-destruction...
										Contre les attaques de Satan , des démons, de l'église de Satan, des hommes, instruments de Satan et de leurs maléfices, organisez la défense...
										Satan et les puissances du mal se combattent par la Pirère et la Pénitence" (<i style='font-size:.8em'>confidences de Jésus à ses prêtes et fidèles</i>).
								</p>
								<p>
										Qu'est-ce qu'un maléfice ? : "C'est la présence de forces obscures, occultes, dans les personnes, des lieux et des choses, qui occasionnent en général des situations de souffrances spirituelles et physiques" (<i style='font-size:.8em'>confidences de Jésus à ses prêtes et fidèles</i>).
								</p>
								<p>
										<legend>Cellule d'intercession</legend><br/>
										Nous sommes une fraternité de prière: la fraternité Puissane Divine d'Amour, établie à Abidjan 2Plateaux, rue des Jardins Côte d'Ivoire. Elle dispose en son sein d'une cellule d'intercession que nous mettons à disposition de chacun.<br/>
										<!--La mission de la cellule d'intercession est d'apporter aide et assistance spirituelle à tous ceux et toutes celles qui sont persécutés par le démon à travers toutes formes de souffrances spiriuelles et physiques.<br/>
										- Si vous croyez en Dieu,<br/>
										- Si vous croyez en la bonté et en la puissance infinie de Dieu,<br/>
										- Si vous croyez que Dieu peut vous sauver, vous délivrer et vous guérir,<br/>
										dans la foi, prenez contact avec nous, confiez-nous votre problème et nous intercederons pour vous.<br/>
										Dieu a donné aux chrétiens baptisés le pouvoir de vaincre le démon et toutes les oeuvres sataniques.<br/>
										Pour bénéficier de ses grâces, le Seigneur attend simplement qu'on lui fasse appel. Il vient et il sauve.<br/>-->
										Notre intercession est gratuite.
								</p>
								<hr/>
						<?php
						}
				
?>
	</div>
	<div id='retraite_forms'>
	<?php
			if($_GET['menu']=='assistance-spirituelle-abidjan'){
	?>
								<p>
										Pour toutes les personnes en butte à la maladie, aux maléfices sous toutes ses formes, à la sorcellerie mais aussi aux personnes qui ont besoin d'assistance et de bénédictions spirituelles:<br/>
										L'intercession peut se faire à distance. Mais en cas de nécessité, la présence physique pourrait être nécessaire.<br/>
										<ul>
										<li>Vous pouvez soit nous joindre par téléphone au : 47-81-10-92</li>
										<li>Soit par email : puissancedamour@yahoo.fr</li>
										<li>Soit par courrier physique à : 08 BP111 Abidjan 08 Côte d'Ivoire </li>
										</ul>
										Soit nous présenter votre situation ci-après : 
										<form action='index.php' method='post'>
												<textarea style='width:95%' cols='100' rows='10' name='situation'></textarea><br/>
												<input type='submit' value="Envoyer demande d'intercession"/>
										</form>
								</p>
	<?php
			}else{
	?>
		<form action='index.php?cle=0' method='post' id='retraite'>
				<fieldset>
						<legend><u>Informations personelles</u>:<br/>Inscrivez-vous <?php echo $ret.str_replace('-',' ',$_GET['menu']); ?></legend>
						<input type='hidden' value='' name='id' id='id'/>
						<input type='hidden' value='' name='montant'/>
						<?php 	if(($_GET['menu']=='retraite-de-priere-spirituelle-esprit-saint-gregorienne')){ $typehid='retraite'; ?>
						<input style="width:50px;" type='number' value='' name='nombre' id='nombre' title='Nombre de personne à inscrire' onchange='if(this.value<=1||this.value==""){this.form.nom.title="";this.form.nom.placeholder="Nom, prénom";}else if(this.value>1){this.form.nom.placeholder="Noms,prénoms; ou Dénomination de groupe";this.form.nom.title="Entrez \"nom,prénom\" de chaque membre, séparés par un \";\" ";getText(document.getElementById("montant"),10000*this.value);if(retraite.param=="fermee")getText(document.getElementById("montant"),49000*this.value);}' min='0' readonly /><span style="padding:10px;float:right">Nombre de personne à inscrire :</span>
						<?php }elseif(($_GET['menu']=='retraite-spirituelle-abidjan-week-ends-rosaire')){ $typehid='week'; ?>
						<input style="width:50px;" type='number' value='' name='nombre' id='nombre' title='Nombre de personne à inscrire' onchange='if(this.value<=1||this.value==""){this.form.nom.title="";this.form.nom.placeholder="Nom, prénom";}else if(this.value>1){this.form.nom.placeholder="Noms,prénoms; ou Dénomination de groupe";this.form.nom.title="Entrez \"nom,prénom\" de chaque membre, séparés par un \";\" ";}' min='0' readonly /><span style="padding:10px;float:right">Nombre de personne à inscrire :</span>
						<?php }elseif(($_GET['menu']=='location-espace-de-priere-abidjan')){ $typehid='location'; ?>
						<input style="width:50px;" type='number' value='' name='nombre' id='nombre' title='Nombre de personne à inscrire' onchange='if(this.value<=1||this.value==""){this.form.nom.title="";this.form.nom.placeholder="Nom, prénom";}else if(this.value>1){this.form.nom.placeholder="Noms,prénoms; ou Dénomination de groupe";this.form.nom.title="Entrez \"nom,prénom\" de chaque membre, séparés par un \";\" ";}' max='30' min='1' /><span style="padding:10px;float:right">Nombre de personnes (estimé) :</span>
						<input style="width:140px;" type='date' name='date1' id='date1' title="Date d'arrivée souhaité" /><span style="float:right">Date d'arrivée :</span>
						<input style="width:140px;" type='date' name='date2' id='date2' title="Date de départ souhaité" onchange='alert(new Date(this.value)-1+"\\\"+new Date(preSib(this,"input").value)-1);if(retraite.date1.value=="")alert("Entrez une date d arrivée");if((new Date(this.value)-1)<(new Date(preSib(this,"input").value)-1))alert(Entrez une date d arrivée valide);'/><span style="float:right">Date de départ :</span>
						<?php } ?>
						<input type='hidden' value='<?php echo$typehid; ?>' name='type'/>
						<select id='pays' name='pays' style='margin:10px 0' onchange='indicatifp.value=this.value;giveIndicatifPays(this,retraite.telephone);this.style.color="black";'required >
						<?php if(($_GET['menu']=='location-espace-de-priere-abidjan')){ ?><option value='empty' selected>Pays d'origine</option><?php }else{ ?>
								<option value='empty' selected>Pays d'habitation</option><?php } ?>
								<option value='cotedivoire'>Côte d'Ivoire</option>
								<option value='guinee'>Guinée</option>
								<option value='guineeb'>Guinée Bissau</option>
								<option value='burkina'>Burkina Faso</option>
								<option value='ghana'>Ghana</option>
								<option value='mali'>Mali</option>
								<option value='nigeria'>Nigéria</option>
						</select>
						<input type='text' title="Entrez vos noms et prénoms svp" placeholder='Nom, prénom' name='nom' required />
						<input type='text' placeholder='Adresse' title="Entrez votre adresse géographique (pays, ville, quartier, rue)" name='adresse' required />
						<input type='email' placeholder='exemple@email.com' title="Entrez votre adresse email svp" name='email' required />
						<input type='number' placeholder='0022512233445' title="Entrez votre numéro de contacte avec le code indicatif pays svp" name='telephone' required />
						<input type='number' style='width:210px' placeholder='numéro de contact ivoirien' title="Entrez votre numéro de contacte en Côte d'ivoire (facultatif)" name='telci' id='telci' />
						<!--<input type='submit' value='Valider' name='retraite_validation'/>-->
				</fieldset>
				<?php if($_GET['menu']!="location-espace-de-priere-abidjan"){ ?>
				<a onclick="retraite_a(this)" id='reserve' title='réserver votre place'>Réserver votre place</a>
				<a onclick="retraite_a(this)" id='payer' title='Passer au paiement de votre inscription'>Passer au paiement</a><?php }else{
				?>
				<a onclick="retraite_a(new Date(date1.value)-1,new Date(date2.value)-1)" id='reserve' title='réserver votre place'>Réserver votre place</a>
				<?php	}				?>
		</form>
		<?php }
		include('retraite_infos.php');
		// include('calendrier.php');
		include('paiement_retraite.php');?>
</div>
<?php
				}
		}
		function vente($x=''){$cpt=array();
				// echo $x;

				$mysqli=$_SESSION['mysqli'];
				// $mysqli=new mysqli('localhost','root','','lib');
				// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
				$mysqli->set_Charset("utf8");
				$rqt='select id_produits,auteur,user_name,nom,img,fr,fr1,autre,taille,prix,stock,vendus,actif from articles where user_name="'.$x.'" and actif="1" order by id_produits ASC;';
				$rqtbis="select * from options_article where img_article!='';";
$Bh1=array(	"<span class='fhid'>Saint Esprit</span> Vente en ligne d'objets religieux et de publications catholiques",
			"<span class='fhid'>Saint Esprit</span> Ecommerce d'articles religieux",
			"<span class='fhid'>Saint Esprit</span> Vente en ligne d'articles religieux",
			"<span class='fhid'>Saint Esprit</span> Eboutique d'articles religieux",
			"<span class='fhid'>Saint Esprit</span> Ecommerce d'articles religieux chétiens",
			"<span class='fhid'>Saint Esprit</span> Vente en ligne d'articles religieux chétiens",
			"<span class='fhid'>Saint Esprit</span> Eboutique d'articles religieux chétiens"
);
$Bh2=array();
foreach($_SESSION['sql']['sql0'] as $k=>$v)
		if($_GET['menu']==$v['url'])
		{		$Bh2[]=utf8_encode("<span class='fhid'>Esprit-Saint</span>".$v['keyword']);// $video=array('ecommerce-religieux-chretien');$video=$video[rand(0,(count($Bh1)-1))];
		$video=explode(';',$v['video']);$img=explode(';',$v['img']);}
// $Bh2=array(	"<span class='fhid'>Esprit-Saint</span> objet religieux, objets de piété, livre de prière, Sainte Bible, enseignement spirituel, &Eacute;vangle révélé, Maria Valtorta, livres chrétien, livres chrétien catholique",
			// "<span class='fhid'>Esprit-Saint</span> objet religieux, objets de piété, livre de prière, Sainte Bible, crucifix, icône religieuse, cierge religieuse, statue religieuse, grotte religieuse"
// );
if(isset($_GET['menu']))switch($_GET['menu']){
				case'vente-en-ligne-publications-chretiennes':$un=array('ssmenu_hover','');
						bal('h2',$Bh1[rand(1,(count($Bh1)-1))]);bal('h3',$Bh2[rand(0,(count($Bh2)-1))]);break;
				case'vente-en-ligne-objets-religieux-catholique':$un=array('','ssmenu_hover');
						bal('h2',$Bh1[rand(1,(count($Bh1)-1))]);bal('h3',$Bh2[rand(0,(count($Bh2)-1))]);break;
				default:bal('h2',$Bh1[0]);break;bal('h3',$Bh2[rand(0,(count($Bh2)-1))]);}
bal(array('img','images/'.$img[0].'.png'),array('alt'=>$img[1],'title'=>$img[2]));
bal(array('video',"videos/".$video[0].".mp4",array('controls'=>'controls')),array($video[1],$video[2]),0);
// bal(array('iframe','http://youtu.be/h2JAZijmLf0'));

?>
				<menu><?php 
						// var_dump($_SESSION['sql']['sousmenus']);
						foreach($_SESSION['sql']['sousmenus'] as $k=>$v)
								if($v['user_name']=='vente')
								{		echo utf8_encode("<li><a class='".$un[$k]."' href='index.php?menu=".$v['url']."' title='".$v['description']."'>".$v['menu']."</a></li>");
										// PRINT_r($_SESSION['sql']['menu']);
								}
				?></menu>
<?php 			if($x!=''){ ?>
						<form action='panier.php' method='POST'>
								<h3><select onchange='articles_select(this)' id='articles_choix'></select></h3>
								<table id='articles'>
										<thead>
												<tr>
														<th>Image produit</th><th>Dimensions</th><?php if($x=='publication'){ ?> <th>Couverture</th><th>Numéro</th> <?php }else{ ?><th>Type</th><?php } ?><th>Libellé</th><?php if($x=='publication'){ ?><th>Auteur</th><!--<th>Edition</th>--><?php } ?><th>Prix (Fcfa)</th><th>Action</th>
												</tr>
										</thead>
										<tbody>
<?php							$options_article=array();
								if($result=$mysqli->query($rqtbis))
										while($v=$result->fetch_array()){
												if(!array_key_exists($v['img_article'],$options_article))$options_article[$v['img_article']]=array();
												$options_article[$v['img_article']][]=array('id'=>$v['id'],'stock'=>$v['stock'],'vendus'=>$v['vendus'],'coloris'=>$v['coloris'],'couverture'=>$v['couverture'],'taille'=>$v['taille_'],'opt_nom'=>$v['opt_nom'],'opt_prix'=>$v['opt_prix'],'autre'=>$v['autre'],'opt_img'=>$v['opt_img']);
										}
												
												
								$type="<option style='border-bottom:1px dotted black;margin-bottom:5px;' selected>Choisir un type d'article</option>";
								if($result=$mysqli->query($rqt))
										while($v=$result->fetch_array()){$dispo='';
												$prix_icone=array('5cm/10cm'=>2000,'20cm/25cm'=>5000,'30cm/40cm'=>12000,'50cm/70cm'=>22000);
												if(strpos($v['nom'],'tableau')!==false&&$options_article[$v['img']][0]['opt_prix']!=''){
														$prix_icone=array();
														foreach($options_article[$v['img']] as $k=>$vv)
																$prix_icone[$vv['taille']]=$options_article[$v['img']][$k]['opt_prix'];
												}
																
												$libelle=array('bibles'=>'Sainte Bible','livret P.D'=>'Livret Puissance Divine','NEI'=>'Edition NEI','texte&priere'=>'Textes et prière','grotte'=>'<strong>Grotte religieuse</strong>','statue'=>'Statue religieuse','croixm'=>'Croix murale','croixp'=>'Croix posée','chapelet'=>'Chapelet de prière','encens'=>'Encens','divers'=>'Divers','tableau/icone'=>'Icône religieuse');
										
												if($v['fr1']!='')$desc=$v['fr1'];else $desc='';if(strpos($type,$v['nom'])===false)$type.='<option value="'.$v['nom'].'">'.$libelle[$v['nom']].'</option>'; 
												if(isset($options_article[$v['img']])){$dispo='';
														if($options_article[$v['img']][0]['taille']!='')$dispo.="choisir_taille ";
														if($options_article[$v['img']][0]['stock']-$options_article[$v['img']][0]['vendus']<=0)
																{$dispo.='epuise epuise0';$stockdispo=0;}
														else	{$dispo.='dispo';$stockdispo=$options_article[$v['img']][0]['stock']-$options_article[$v['img']][0]['vendus'];}
												}
												else if(($v['stock']-$v['vendus'])==0){$dispo.="epuise";$stockdispo=0;}
												else {$dispo.='dispo';$stockdispo=$v['stock']-$v['vendus'];}
												
												if(strpos($v['nom'],'livret')!==false)$img='publication-puissance-divine/';
												elseif(strpos($v['nom'],'bible')!==false||strpos($v['nom'],'NEI')!==false||strpos($v['nom'],'texte&priere')!==false)$img='sainte-bible/';
												elseif(strpos($v['nom'],'icone')!==false)$img='icone-religieuse/';
												elseif(strpos($v['nom'],'encens')!==false)$img='encens-priere/';
												elseif(strpos($v['nom'],'croix')!==false)$img='croix-jesus/';
												elseif(strpos($v['nom'],'chapelet')!==false)$img='chapelet-priere/';
												elseif(strpos($v['nom'],'divers')!==false)$img='divers/';
												elseif(strpos($v['nom'],'grotte')!==false)$img='statue-religieuse/';
												elseif(strpos($v['nom'],'statue')!==false)$img='statue-religieuse/';
												?>
														<tr <?php if($v['nom']=='grotte')echo'class="'.$v['nom'].'"'; ?>>
																<td class='image'><img class='zoomable' src='images/vente-religieuse/min/<?php if($img.$v['img']!='')echo$img.$v['img'].".JPG";else echo"NOJPEGFILE"; ?>' alt='article religieux: <?php echo$v['nom']; ?>' title='' width='50px'/></td>
																<td class='taille hid'><?php 
																								if($x=='publication'){if(strpos($v['nom'],'bible')===false)echo$v['autre'].' pages<br/>'.$v['taille'];}else  echo$v['taille'];
																						?>
																</td>					
																						<?php 	
																		if($x=='objet'){
																				if(isset($options_article[$v['img']]))
																						if($options_article[$v['img']][0]['taille']!=''){
																								$m=array(0);
																								foreach($options_article[$v['img']] as $k=>$vv)
																										if($vv['stock']-$vv['vendus']<=0)
																												$m[]='epuise epuise0';
																										else $m[]='dispo'.intval($vv['stock']-$vv['vendus']);
																								// echo"new Array(".implode(',',$m).")";
																								if($options_article[$v['img']][0]['opt_img']!=null)$ch='select_img(this);';else$ch="";
																								if($v['nom']=='grotte'||strpos($v['img'],'statue-religieuse-sainte-vierge-marie-')!==false)$selectted="Choisir un matériaux";else$selectted="Choisir une dimension";
																								echo"<td class='taille'><select onchange='$ch this.param=new Array(\"".implode("\",\"",$m)."\");taille_(this);'><option value='0' selected>$selectted</option>"; 
																								foreach($options_article[$v['img']] as $k=>$vv)
																										if(strpos($v['nom'],'tableau')!==false){	echo"<option value='".$prix_icone[$vv['taille']]."'>".$vv['taille']."</option>"; 
																										}
																										else{if($vv['opt_prix']==0)$vv['opt_prix']='a';	echo"<option value='".$vv['opt_prix']."'>".$vv['taille']."</option>"; 
																										}
																								echo"</select></td>";
																						}else echo"<td class='article_empty taille'></td>";
																				elseif($v['taille']!='')echo"<td class='taille'>".$v['taille']."</td>";
																				else{ 	echo"<td class='article_empty taille'>".$v['taille']."</td>";}
																		}
																		if($x=='publication'){
																				if(strpos($v['nom'],'bible')===false)
																						echo"<td class='taille pages'>".$v['autre'].'<br/>'.$v['taille']."</td>";
																				else echo"<td class='article_empty taille'></td>";
																				if(isset($options_article[$v['img']])){	//if(empty($options_article[$v['img']][0]['autre']))echo"llkkjjk";else echo"mmmmmmmmm";
																						if(!empty($options_article[$v['img']][0]['autre'])){ ?>
																												<td class='article_empty'></td><td class='numero'>Cahier numéro:
																														<select onchange='getText(clas("prix",this.parentNode.parentNode)[0],money(this.value));clas("id",this.parentNode.parentNode)[0].innerHTML="|"+tag("span",clas("idee",this.parentNode.parentNode)[0])[tag("option",this)[this.selectedIndex].innerHTML.substring(0,tag("option",this)[this.selectedIndex].innerHTML.indexOf("-"))].innerHTML;'>
																																<?php foreach($options_article[$v['img']]as $kk=>$vv)
																																			echo"<option value='".$vv['opt_prix']."'>".$vv['autre']."- ".$vv['opt_nom']."</option>"; 
																																?>
																														</select>
																												</td> 
																												<?php 																	
																								}else{	 ?><td class='couverture'>
																										<span style='font-size:.8em;'><?php echo money($options_article[$v['img']][0]['couverture']); ?></span>
																										<span>
																										<input type='radio' name='<?php echo$v['id_produits']; ?>cov' id='<?php echo$v['id_produits']; ?>cov' value='avec' onclick="clas('id',this.parentNode.parentNode.parentNode)[0].innerHTML='|'+tag('span',clas('idee',this.parentNode.parentNode.parentNode)[0])[0].innerHTML;if(typeof(this.cov)=='undefined')this.cov=tag('img',this.parentNode.parentNode.parentNode)[0].src;tag('img',this.parentNode.parentNode.parentNode)[0].src=this.cov.substring(0,this.cov.length-4)+'-cov.JPG';getText(clas('prix',this.parentNode.parentNode.parentNode)[0],money(parseInt(clas('prix',this.parentNode.parentNode.parentNode)[0].innerHTML.replace('.',''))+<?php echo$options_article[$v['img']][0]['couverture']; ?>));"/> avec</span>
																										<span><input type='radio' name='<?php echo$v['id_produits']; ?>cov' value='ans' onclick="clas('id',this.parentNode.parentNode.parentNode)[0].innerHTML=clas('id',this.parentNode.parentNode.parentNode)[0].param;if(typeof(document.getElementById(this.name).cov)!='undefined')tag('img',this.parentNode.parentNode.parentNode)[0].src=document.getElementById(this.name).cov;getText(clas('prix',this.parentNode.parentNode.parentNode)[0],clas('prix',this.parentNode.parentNode.parentNode)[0].param);" checked/> sans
																										</span>
																								  </td>
																								  <td class='article_empty'></td><?php 
																								}
																				}else echo"<td class='article_empty'></td><td class='article_empty'></td>";
																		}
																		if(isset($options_article[$v['img']]))
																				if($options_article[$v['img']][0]['opt_img']!=null){
																						echo"<td class='opt_img hid'>";
																						foreach($options_article[$v['img']] as $k=>$vv)
																								echo$vv['opt_img'].';';
																						echo"</td>";
																				}
																?>
																<td class='type <?php if($x=='publication')echo"hid";?> '><strong><?php echo$libelle[$v['nom']];?></strong><br/></td>
																<td class='typy hid'><?php echo$v['nom'];?></td>
																<td class='l'><?php echo$v['fr'];?><a href='http://librairie-puissance-divine.ci/vente-en-ligne/index.php?produit-religieux=<?php echo$v['id_produits']; ?>' title='ecommerce religieux article chrétien: <?php echo rmv_balise_(substr($v['fr'],0,30)); ?>' target='_blank'><?php echo$libelle[$v['nom']]; ?></a></td>
																<td class='auteur<?php if($x!='publication')echo" hid";?>'><?php echo$v['auteur'];?></td>
																<td class='prix'><?php if($v['nom']=='grotte'||strpos($v['img'],'statue-religieuse-sainte-vierge-marie-')!==false)echo"x Fcfa<br/>Prix selon commande.";else echo money($v['prix']);?></td>
																<td class='descr hid'><?php echo$desc;?></td>
																<td class='idee hid'><?php if(isset($options_article[$v['img']]))foreach($options_article[$v['img']] as $kk=>$vv)echo"<span>".$vv['id']."</span>";?></td>
																<td class='id hid'><?php if(isset($options_article[$v['img']]))if($options_article[$v['img']][0]['couverture']==null)echo"|".$options_article[$v['img']][0]['id'];else echo$v['id_produits'];else echo$v['id_produits'];?></td>
																<td class='<?php echo$dispo;?>'>
																		<input class='qtty' title='Choisir une quantité' name='<?php echo($v['user_name'].$v['id_produits']);?>' value='0' min='0' max='<?php if(isset($options_article[$v['img']]))echo intval($options_article[$v['img']][0]['stock']-$options_article[$v['img']][0]['vendus']);else echo intval($v['stock']-$v['vendus']);?>'type='number' max='<?php echo$stockdispo; ?>'/>
																		<input type='button' title='Ajouter au panier' value='' class='panier'/>
																		<input type='button' value="afficher l'article" class='afficher'/>
																</td>
														</tr>
										<?php 	}else echo$rqt."<br/>lkjkljklkjjklj"; ?>
										</tbody>
								</table>
										<div id='tfoot'><?php echo$type; ?></div>
						</form>
<?php
				}
		}

		function diocese(){ ?>
				<menu><img src='images/none.gif' width='400px' alt=''/><?php include('region.html'); ?><input type='text' placeholder="Entre le nom d'une paroisse" title="..ou recherchez les paroisses parmis une région dans la liste déroulante ci-contre"/></menu>
		<?php }
		function lieux($x=''){
if(isset($_GET))switch($_GET['menu']){case'puissance-divine-fraternite':$un=array('ssmenu_hover','','');break;case'puissance-divine-librairie':$un=array('','','ssmenu_hover');break;default:$un=array('','','');break;}
		?>
				<menu><?php 
						// var_dump($_SESSION['sql']['sousmenus']);
						echo$_SESSION['sql']['sousmenus'][6];
						foreach($_SESSION['sql']['sousmenus'] as $k=>$v)
								if($v['user_name']=='lieux-activites')
								{		echo utf8_encode("<li><a class='".$un[$k-6]."' href='index.php?menu=".$v['url']."' title='".$v['description']."'>".$v['menu']."</a></li>");
										// PRINT_r($_SESSION['sql']['menu']);
								}
				?></menu>
		<?php  
				if($x!=''){
						
				}
		}
		function connexion($x){

			$mysqli=$_SESSION['mysqli'];
			// $mysqli=new mysqli('localhost','root','',$x);
			$mysqli->set_Charset("utf8");
		}
?>