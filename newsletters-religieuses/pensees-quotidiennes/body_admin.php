<?php

if(strpos($_SERVER['REMOTE_ADDR'],'196.47.137.126')!==false){

		if(isset($_GET['admin']))if($_GET['admin']!='ok'){		$_SESSION['nom']=array();$rqt='';

				$mysqli=$_SESSION['mysqli'];
				// $mysqli=new mysqli('localhost','pda','mirai','admin_pda');
				// $mysqli=new mysqli('localhost','root','','lib');
				$mysqli->set_Charset("utf8");
						if(strpos($_GET['admin'],'pub')===false)$rqt='publication';
						elseif(strpos($_GET['admin'],'obj')===false)$rqt='objet';
						$rqt="select distinct nom from articles where user_name!='$rqt';";
						if(strpos($_GET['admin'],'ret')!==false)$rqt='select distinct user_name from ret;';
						// if(strpos($_GET['admin'],'mod')===false)$rqt="select distinct nom from articles where user_name!='$rqt';";
						// else {$rqt="select distinct nom from articles";}
						
						if($result=$mysqli->query($rqt))
								while($v=$result->fetch_array())
										if(isset($v['nom']))$_SESSION['nom'][]=$v['nom'];
										else $_SESSION['nom'][]=$v['user_name'];
						else echo$rqt;
		}
?>
<body onload='admin()'>
		<header>
			<h1>Administration Librairie Puissance Divine d'Amour</h1>
			<menu>
					<li>Ajouter un(e)<ul><li><a href='index.php?admin=addpub'>livre, bible..</a></li><li><a href='index.php?admin=addobj'>objet de piété</a></li><li class='pond'></li><li><a href='index.php?admin=addret'>retraite spirituelle</a></li><li><a href='index.php?admin=ens'>enseignement</a></li></ul></li>
					<li>Modifiation<ul><li><a href='index.php?admin=modval_ret'>Valider une réservation</a></li><li><a href='index.php?admin=modval_cmd'>Valider une vente en ligne</a><li class='pond'></li></li><li><a href='index.php?admin=modarr'>Modifier le stock d'un produit</a></li><li><a href='index.php?admin=modactiv'>Activer/désactiver un produit<a/></li><li class='pond'></li><li><a href='index.php?admin=modsupp'>Supprimer un produit<a/></li></ul></li>
					<li><a href='index.php?admin=compta'>Inventaire des ventes<ul><li><a href='index.php?admin=quot'>Quotidien</a></li><li><a href='index.php?admin=hebdo'>Hebdomadaire</a></li><li><a href='index.php?admin=mens'>Mensuel</a></li></ul>
					
			</menu>
		</header>
		<main>
<?php 
		if(isset($_GET['admin']))
				if(strpos($_GET['admin'],'add')!==false){ ?>
				<select id='ssmenu' onchange='if(tag("option",this)[this.selectedIndex].value!="")admin_ssmenu(this)'><option selected value=''></option>
				<?php 
						// if($_GET['admin']!='ok')foreach($_SESSION['nom'] as $k=>$v){echo"<input type='submit' value='$v' name='".$_SESSION['admin']."$k'/>";}
						if($_GET['admin']!='ok')foreach($_SESSION['nom'] as $k=>$v){echo"<option value='$v'>$v</option>";}
				?>
				</select>
				<hr/>
				<h3 id='admin_titre'></h3>
				<form action='index.php' method='post' class='ajouter' id='ajouter_article' enctype="multipart/form-data">
				</form>
				<!--  onsubmit="for(var i=0;i<tag('fieldset',this).length;i++)if(tag('fieldset',this)[i].className!='unsee')if(tag('fieldset',this)[i].className!='ok')return false;" -->
				<form action='index.php' method='post' class='ajouter' id='ajouter_retraite'>
				</form>
				<div id="article">
						<input id="id_produits" type="hidden" name="id_produits" value="">
						<input id="user_name" type="hidden" name="user_name" value="objet">
						<input id="couverture" type="hidden" name="couverture" value="">
						<input id="img" type="hidden" name="img" value="">
						<input id="vendus" type="hidden" name="vendus" value="0">
						<fieldset id="nom" class="ok"><legend>Type</legend><input name="nom" value="" readonly=""></fieldset>
						<fieldset id="auteur"><legend>Auteur</legend><select name="auteur"><option value="" selected="">Mr. Achi Koman</option></select></fieldset>
						<fieldset id="imgs"><legend>Image</legend>Charger un fichier image: (poids max 1Mo)<br> <input id="upl" type="file" name="upl[]" onchange="alert(complement);tmp=this.value;addClass(tag('h3',complement)[0],'see brille');getText(tag('h3',complement)[0],this.value.substring(12,this.value.length-4));img.value=this.value.substring(12,this.value.length-4);tag('img',complement)[0].src='images/'+this.value.substring(12);" multiple></fieldset>
						<!--<fieldset id="couvertures"><legend>Image avec couverture</legend>Charger un fichier image: (poids max 1Mo)<br> <input id="uplbis" type="file" name="upl[]" onchange="addText(tag('h3',complement)[1],this.value.substring(12,this.value.length-4));addClass(tag('h3',complement)[1],'see brille');tag('img',complement)[1].src='images/'+this.value.substring(12);" multiple=""></fieldset>-->
						<fieldset id="fr"><legend>Titre de la publication</legend><input name="fr" placeholder="Entrez un titre" onblur="if(this.value.length>3)addClass(this.parentNode,'ok');"></fieldset>
						<fieldset id="fr1"><legend>Description</legend><textarea cols="65" rows="10" name="fr1" onblur="if(this.value.length>3)addClass(this.parentNode,'ok');"></textarea></fieldset>
						<fieldset id="coloris"><legend>Choisissez un coloris: </legend><select name='coloris' onchange="nexSib(this,'span').style.background=getcolor(tag('option',this)[this.selectedIndex].value);" onblur="if(this.value!='')addClass(this.parentNode,'ok');"><option value=""></option><option value="bleu">Bleu</option><option value="rouge">Rouge</option><option value="beige">Beige</option><option value="doree">Dorée</option><option value="noire">Noire</option><option value="verte">Verte</option></select><span id="cl"></span></fieldset>
						<fieldset id="taille"><legend>Entrez les dimensions du produits (ex:15cm/10cm)</legend><input name="taille" value="_cm/_cm" onblur="if(this.value!='_cm/_cm')addClass(this.parentNode,'ok');"></fieldset>
						<fieldset id="autre"><legend>Taille</legend><input type="number" name="autre" placeholder="Entrez le nombre de page" onblur="if(this.value>8)addClass(this.parentNode,'ok');"> pages</fieldset>
						<fieldset id="materiaux"><legend>Choix matériau: </legend><select id="materiau" NAME="materiaux" onchange="if(tag('option',this)[this.selectedIndex].value!='')addClass(this.parentNode,'ok');"><option value="" name="materiaux" selected=""></option><option value="ciment">Ciment</option><option value="argile">Argile</option><option value="polyestirene">Polyestirène</option><option value="ciment">Ciment</option>input type='text' name='prix' placeholder='Entrez le prix' /&gt; Fcfa</select> Fcfa</fieldset>
						<fieldset id="prix"><legend>Prix</legend><input type="number" name="prix" placeholder="Entrez le prix" onblur="if(this.value>100)addClass(this.parentNode,'ok');"> Fcfa</fieldset>
						<fieldset id="stock"><legend>Stock</legend><input type="number" name="stock" placeholder="Entrez un stock initial"onblur="if(this.value>1)addClass(this.parentNode,'ok');"> article(s) de réserve</fieldset>
						<fieldset id="actif"><legend>Activer (le rendre directement actif ?)</legend><input type="radio" name="actif" value="1" onclick="addClass(this.parentNode,'ok');">Actif<br><input type="radio" name="actif" value="0" onclick="addClass(this.parentNode,'ok');">Inactif</fieldset>
						<input type="submit" value="Enregistrer l'article" name="envoie_vente">
				</div>
				<div id="retraite">						
						<fieldset class="ok"><legend>Type</legend><input type="text" value="" name="user_name" id="user_name" readonly=""></fieldset>
						<fieldset><legend>Nombre de places disponibles initialement</legend><input type="number" value="" name="place" id="place" required=""></fieldset>
						<fieldset><legend>La date de début de l'évenement</legend><input type="date" value="" name="date" id="date"></fieldset>
						<input type="submit" value="Enregistrer lactivité spirituelle" name="envoie_retraite">
				</div>
				
				
				
				<div id='complement'>
						<h3 class='img' contentEditable onmousedown="getClass(this,'see');" onblur="img[0].value=this.innerHTML;if(tag('input',nom[0])[0].value=='bibles')couverture[0].value=this.innerHTML+'-cov';getClass(imgs[0],'ok');"></h3>
						<img src='' title="L'image que vous avez choisi pour le produit en cours"/>
						<h3 class='imgcov' contentEditable></h3>
						<img src='' title="L'image que vous avez choisi pour la bible avec couverture"/>
				</div>
						<?php 
				}elseif(strpos($_GET['admin'],'mod')!==false){?>
				<form action='index.php' method='post' class='modifier' id='modifierr'>
				<?php
						switch($_GET['admin']){
								case'modval_ret':$x='reservation'?><input type='hidden' name='type' value='<?php echo$x; ?>'/><input type='hidden' id='id' name='id' value=''/><input type='hidden' id='id_retraite' name='id_retraite' value=''/><input type='hidden' id='nombre' name='nombre' value=''/>
										<fieldset><legend>Entrer le: numéro de téléphone, compte email, numéro de compte bancaire du paiement de la réservation</legend><input value='' name='mod' id='mod' onkeyup="valider('<?php echo$x; ?>',this)"/> </fieldset>
								<?php break;
								case'modval_cmd':$x='commande'?><input type='hidden' name='type' value='<?php echo$x; ?>'/><input type='hidden' id='id' name='id' value=''/>
										<fieldset><legend>Entrer le: numéro de téléphone, compte email, numéro de compte bancaire du paiement de la commande en-ligne</legend><input value='' name='mod' id='mod' onkeyup="valider('<?php echo$x; ?>',this)"/> </fieldset>
								<?php break;
								case'modarr':$x='stock';?><input type='hidden' id='article_mod' name='article_mod' value='<?php echo$x; ?>'/><input type='hidden' id='id' name='id' value=''/><input type='hidden' id='imgs' name='imgz' value=''/><input type='hidden' id='imgss' name='imgzz' value=''/><input type='hidden' id='venduss' name='vendus' value=''/><input type='hidden' name='id_options_article' value=''/>
										<fieldset><legend>Entrer le nom de l'article dont vous souhaitez modifier le stock</legend><input type='text' value='' name='mod' id='mod' onkeyup="modifier('<?php echo$x; ?>',this)"/> </fieldset>
										<fieldset><legend></legend></fieldset>
										<fieldset><legend>Type</legend><input name="nom" value="" readonly=""></fieldset>
										<fieldset><legend>Auteur</legend><select name="auteur"><option value="" selected="">Mr. Achi Koman</option></select></fieldset>
										<fieldset><legend>Image</legend>Charger un fichier image: (poids max 1Mo)<br> <input id="upl" type="file" name="upl[]" onchange="imgs.value=this.value.substring(12,this.value.length-4);alert(imgs.value);" multiple></fieldset>
										<!--<fieldset id="couvertures"><legend>Image avec couverture</legend>Charger un fichier image: (poids max 1Mo)<br> <input id="uplbis" type="file" name="upl[]" onchange="addText(tag('h3',complement)[1],this.value.substring(12,this.value.length-4));addClass(tag('h3',complement)[1],'see brille');tag('img',complement)[1].src='images/'+this.value.substring(12);" multiple=""></fieldset>-->
										<fieldset><legend>Titre de la publication</legend><input name="fr" placeholder="Entrez un titre" onblur="if(this.value.length>3)addClass(this.parentNode,'ok');"></fieldset>
										<fieldset><legend>Description</legend><textarea cols="65" rows="10" name="fr1" onblur="if(this.value.length>3)addClass(this.parentNode,'ok');"></textarea></fieldset>
										<fieldset><legend>Choisissez un coloris: </legend><select name='coloris' onchange="nexSib(this,'span').style.background=getcolor(tag('option',this)[this.selectedIndex].value);" onblur="if(this.value!='')addClass(this.parentNode,'ok');"><option value=""></option><option value="bleu">Bleu</option><option value="rouge">Rouge</option><option value="beige">Beige</option><option value="doree">Dorée</option><option value="noire">Noire</option><option value="verte">Verte</option></select><span id="cl"></span></fieldset>
										<fieldset><legend>Entrez les dimensions du produits (ex:15cm/10cm)</legend><input name="taille" value="_cm/_cm" onblur="if(this.value!='_cm/_cm')addClass(this.parentNode,'ok');"></fieldset>
										<fieldset><legend>Taille</legend><input type="number" name="autre" placeholder="Entrez le nombre de page" onblur="if(this.value>8)addClass(this.parentNode,'ok');"> pages</fieldset>
										<fieldset><legend>Choix matériau: </legend><select id="materiau" NAME="materiaux" onchange="if(tag('option',this)[this.selectedIndex].value!='')addClass(this.parentNode,'ok');"><option value="" name="materiaux" selected=""></option><option value="ciment">Ciment</option><option value="argile">Argile</option><option value="polyestirene">Polyestirène</option><option value="ciment">Ciment</option>input type='text' name='prix' placeholder='Entrez le prix' /&gt; Fcfa</select> Fcfa</fieldset>
										<fieldset><legend>Prix</legend><input type="number" name="prix" placeholder="Entrez le prix" onblur="if(this.value>100)addClass(this.parentNode,'ok');"> Fcfa</fieldset>
										<fieldset><legend>Entrez le stock souhaité</legend><input type="number" name="stock" placeholder="Entrez le stock souhaité" min='0'/> article(s) de réserve</fieldset>
										<fieldset id='choix'><legend>Choisissez un thème à modifier</legend></fieldset>
								<?php break;
								case'modactiv':$x='actif';?><input type='hidden' id='article_mod' name='article_mod' value='<?php echo$x; ?>'/><input type='hidden' id='id' name='id' value=''/>
										<fieldset><legend>Entrer le nom de l'article dont vous souhaitez rendre actif ou inactif</legend><input type='text' value='' name='mod' id='mod' onkeyup="modifier('<?php echo$x; ?>',this)"/> </fieldset>
										<fieldset><legend></legend></fieldset>
										
								<?php break;
								default:break;
						}?>
						<input type='submit' value='Envoyer' name='envoie'/>
				</form>
				<div id='choix_admin'></div>
				<div id='info_mod'></div>
				
				<?php }elseif($_GET['admin']=='ens'){ $rqt='select * from blog where user_name>0 order by user_name;';
						$cpt=array();if($result=$mysqli->query($rqt))while($v=$result->fetch_array())$cpt[]=$v['user_name'];?>
										<div>La semaine courante est le n°<?php echo date('W'); ?> || liste des semaines enregistrés <select onchange='admin_semaine_ens()'><?php foreach($cpt as $k=>$vv) echo"<option value='$vv'>$vv</option> "; ?></select></div><hr/>
										<select onchange='admin_semaine_ens(this.value)'><?php for($i=1;$i<55;$i++) if(!in_array($i,$cpt)) echo"<option value='$i'>$i</option> "; ?></select>
				<?php }elseif($_GET['admin']=='compta'||$_GET['admin']=='quot'||$_GET['admin']=='hebdo'||$_GET['admin']=='mens'){ ?>
				<h2>
				<?php
						$reference=array('livret P.D'=>1,'bibles'=>1,'NEI'=>1,'texte&priere'=>1,'statue'=>2,'grotte'=>3,'tableau/icone'=>4,'chapelet'=>5,'divers'=>6);
						if($_GET['admin']=='compta'){
								$rqt="select * from liste ";echo"Liste des ventes depuis le debut de l'activité";
						}elseif($_GET['admin']=='quot'){ 
								$rqt="select * from liste where heures like '".date('Y-m-d')."%'";echo"Liste des ventes d'aujourd'hui";
						}elseif($_GET['admin']=='hebdo'){ 
								$rqt="select * from liste where heures > '".date("Y-m-d", strtotime(date('Y-m-d'). " -7 day"))."%'";echo"Liste des ventes de la semaine";
						}elseif($_GET['admin']=='mens'){ 
								$rqt="select * from liste where heures > '".date("Y-m-d", strtotime(date('Y-m-d'). " -30 day"))."%'";echo"Liste des ventes du mois";
						}
						$tmp=array();
						if($result=$mysqli->query($rqt))
								while($v=$result->fetch_array())
										$tmp[]=$v;
						else echo$rqt;
				?>
				</h2>
				<table>
				<thead>
				<tr>
				<th>Référence</th>
				<th>Type</th>
				<th>Libellé</th>
				<th>Quantité</th>
				<th>Date</th>
				</tr>
				</thead>
				<tbody>
				<?php foreach($tmp as $k=>$vv){ 
						if(strpos($vv['id_article'],"|")===false)$aa=$vv['id_article'];
						else $aa=substr($vv['id_article'],1);
								if($result=$mysqli->query("select * from articles where id_produits='$aa';"))
										while($v=$result->fetch_array()){?>
				<tr>						
				<td><?php echo$reference[$v['nom']]; ?></td>
				<td><?php echo$v['nom']; ?></td>
				<td><?php echo$v['fr']; ?></td>
				<td><?php echo$vv["quantity"]; ?></td>
				<td title="<?php echo giveDateFr($vv['heures'],'abrevEn','abrevEn')." (function à faire pour l'écriture en complète de la date en français)"; ?>"><?php echo giveDateFr($vv['heures'],'abrevEn','abrevEn'); ?></td>
				</tr>
				<?php }}  ?>
				</tbody>
				</table>
				<?php } 
				
				
				
				
				
				
				
				
				
				
				
				if(isset($_POST['envoie_vente'])||isset($_POST['envoie_retraite'])){ //include('process.php'); 
						$articles=array('croix'=>'croix-jesus','chapelet'=>"chapelet-priere",'divers'=>'divers','encens'=>'encens-priere','tableau/icone'=>'icone-religieuse','livret P.D'=>'publication-puissance-divine','bibles'=>'sainte-bible','NEI'=>'sainte-bible','statue'=>'statue-religieuse');


						$mysqli=$_SESSION['mysqli'];
						// $mysqli=new mysqli('localhost','pda','mirai','admin_pda');
						// $mysqli=new mysqli('localhost','root','','lib');
						$mysqli->set_Charset("utf8");
						if(isset($_POST['id_produits'])){
								print_r($_POST);
								require_once('images/vente-religieuse/index.php');
								$image=new Image();
								if(!$imageupl=$image->uploadz($_FILES,$articles[$_POST['nom']].'/'))	{echo$image->msg_err;}
								// $msg_upl_succ=$image->msg_err;
								// else	$msg_upl_err=$image->msg_err;
								// echo$image->msg_err;
								$lang='"'.$_POST['fr'].'","",""';
								$lang1='"'.$_POST['fr1'].'","",""';
								$img=substr($_POST['img'],12);
								echo$_POST['img'];
								if($_POST['taille']=="_cm/_cm")$taille='';else $taille=$_POST['taille'];
								$rqt="INSERT INTO `articles` (`id_produits`, `nom`, `user_name`, `auteur`, `img`, `fr`, `en`, `es`, `fr1`, `en1`, `es1`, `taille`, `materiaux`, `autre`, `prix`, `stock`, `vendus`, `actif`, `code`) VALUES";
								$rqt.="('','".$_POST['nom']."','".$_POST['user_name']."','".$_POST['auteur']."','".$_POST['img']."',$lang,$lang1,'$taille','".$_POST['materiaux']."','".$_POST['autre']."','".$_POST['prix']."','".$_POST['stock']."','".$_POST['vendus']."','".$_POST['actif']."','');";
								if($_POST['coloris']!='')$rqtbis="INSERT INTO `options_article` (`id`, `img_article`, `stock`, `vendus`, `coloris`)values('','".$_POST['img']."','10','0','".$_POST['coloris']."');";
								if($_POST['couverture']!='')$rqtbis="INSERT INTO `options_article` (`id`, `img_article`, `stock`, `vendus`, `couverture`)values('','".$_POST['img']."','10','0','".$_POST['couverture']."');";else echo"comprend_pas".$_POST['couverture'];
								if(isset($rqtbis))if(!$result=$mysqli->query($rqtbis))echo'noon';
						}elseif(isset($_POST['user_name'])){
								$rqt="INSERT INTO `ret` (`user_name`,`date`,`places`) VALUES('".$_POST['user_name']."','".$_POST['date']."','".$_POST['place']."');";
								
						}
						if(!$result=$mysqli->query($rqt)){
								echo$rqt.'<br/>'; 
								print_r(var_dump($result));print_r(get_class_methods('mysqli'));
						}else{ ?> <div id='confirmation'>Enregistrement effectué avec succès</div> <?php }
						// }elseif(isset($_POST['envoie_vente'])){ include('confirmation_entree_produit.php');}
						// else include('confirmation_entree_retraite.php');
				}elseif(isset($_POST['envoie'])){

						$mysqli=$_SESSION['mysqli'];
						// $mysqli=new mysqli('localhost','pda','mirai','admin_pda');
						// $mysqli=new mysqli('localhost','root','','lib');
						$mysqli->set_Charset("utf8");
						if(isset($_POST['type'])){echo"identifiant de l'opération: ".$_POST['id']."<br/>";
								$rqt="update ".$_POST['type']." set validation='1'  where id='".$_POST['id']."';";
								if($result=$mysqli->query($rqt)){
										if($_POST['type']=='commande'){
												$tab=array();
												if($result=$mysqli->query("select * from liste where id_commande='".$_POST['id']."';")){
														while($v=$result->fetch_array())
																$tab[]=$v;
														foreach($tab as $k=>$v)
																if(strpos($v['id_article'],'|')===false){
																		if(!$result=$mysqli->query("update articles set vendus=vendus+".$v['quantity']." where id_produits='".$v['id_article']."';"))
																				echo"update articles set vendus=vendus+".$v['quantity']." where id_commande='".$v['id_article']."';";
																		// else echo'OUIII';
																}else
																		if(!$result=$mysqli->query("update options_article set vendus=vendus+".$v['quantity']." where id='".(substr($v['id_article'],1))."';"))
																				echo"update options_article set vendus=vendus+".$v['quantity']." where id='".(substr($v['id_article'],1))."';";
																		// else echo'OUI';
																		// else echo"update options_article set vendus=vendus+".$v['quantity']." where id='".(substr($v['id_article'],1))."';<br/>";
												}else echo"select * from liste where id_commande='".$_POST['id']."';";
										}else{
												if(!$result=$mysqli->query("update ret set places=places-".$_POST['nombre']." where id='".$_POST['id_retraite']."';"))echo"update ret set places=places-".$_POST['nombre']." where id='".$_POST['id_retraite']."';";
										}
										echo"Validation de la ".$_POST['type']." confirmée";
										
								}else echo$rqt;
						}else{
								if($_POST['article_mod']=='stock')	
										if($_POST['id_options_article']!='')
												if($_POST['imgz']!=''){
														$rqt="update options_article set img_article='".$_POST['imgz']."'  where img_article='".$_POST['imgzz']."';";
														if($result=$mysqli->query($rqt)){}
														$rqt="update options_article set ".$_POST['article_mod']."='".$_POST['stock']."'+vendus  where id='".$_POST['id_options_article']."';";
												}else	$rqt="update options_article set ".$_POST['article_mod']."='".$_POST['stock']."'+vendus  where id='".$_POST['id_options_article']."';";
												// else 	$rqt=$_POST['stock'].$_POST['vendus']."update options_article set vendus='".$_POST['vendus']."'  where img_article='".$_POST['imgz']."';";
										else	$rqt="update articles set ".$_POST['article_mod']."='".$_POST['stock']."'+vendus  where id_produits='".$_POST['id']."';";
								else	$rqt="update articles set ".$_POST['article_mod']."='".$_POST['actif']."'  where id_produits='".$_POST['id']."';";
								if($result=$mysqli->query($rqt))echo"Modification de: '".$_POST['article_mod']."' confirmée<br/>$rqt<br/><hr/>";
								else echo$rqt;
								if($_POST['fr']!=''||$_POST['fr1']!=''||$_POST['imgz']!=''||$_POST['prix']!=''){
										// print_r($_FILES);
										$k=array();$kk='';
										if($_POST['fr']!=''){$k[]='fr="'.$_POST['fr'].'"';}
										if($_POST['fr1']!=''){$k[]='fr1="'.$_POST['fr1'].'"';}
										if($_POST['prix']!=''){$k[]='prix="'.$_POST['prix'].'"';}
										if($_POST['imgz']!=''){$k[]='img="'.$_POST['imgz'].'"';}
										$k=implode(',',$k);
										$rqt="update articles set $k  where id_produits='".$_POST['id']."';";
										if($result=$mysqli->query($rqt))echo$rqt;
								}
						}
				
				}?>
		</main>
<a id='admin' href='index.php?admin=out'>Retour</a>
</body>
<style>
td:hover{background:black;color:white;cursor:crosshair;}
th:hover{-webkit-transition:all .3s;color:red;cursor:pointer;}
td{padding:1px 2px;text-align:center;}
table,td{border:1px solid;}
h2{text-align:center;}
<script language='javascript'>
// alert('ok');
		// for(var i=0;i<tag('th').length;i++){alert('ok');
				// tag('th').onclick=function(){toast('fonction non encore active');};
				// tag('th').title='fonction non encore active';}
</script>
</style>
<?php }else header('location:index.php');