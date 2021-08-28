<style>#containall h3{text-align:center;border-bottom:solid;}@media screen and (max-width: 650px) {
#containall h3{margin-top:2em;}
#containall h2{font-size: 1em !important;top: 1em !important;position:relative;}
#containall>section>form>table tr{display:block;width:75%;}
#containall>section>form>table tbody tr{border:solid;}
#panier_table~input:nth-of-type(2){margin:0;}
}</style>
<h2 style='text-align:center;font-size:2em;top:-1em;width:87%;'>Panier ecommerce librairie puissance divine</h2>
<?php 
// if(isset($_COOKIE['panier'])){
// eval('$aa='.$_COOKIE['panier'].';');
// print_r($aa);
// print_r($_COOKIE['panier']);
// $_COOKIE['panier']=array();

// }
$tmp='';
		if(isset($_POST['envoie2'])){
				echo"	<h3>Etape2: Saisissez vos informations personnelles</h3>
						<form action='".$_SERVER['PHP_SELF']."' method='post'>
								<input type='submit' name='envoie' value='Retour étape 1'/>
						<hr/>
						</form>";
				include('formulaire_commande.php');
		}elseif(isset($_POST['envoie3'])){echo"	<h3>Etape3: Effectuer le paiement de votre commande</h>
												<input id='panier' name='panier' value=\"".$_POST['panier']."\" type='hidden'/>";
				include('paiement_commande.php');
		
		}else{ 
				$tmpbis=array();
				if(isset($_GET['panier']))
						if(strpos($_GET['panier'],'supp')!==false){
								$tmp=substr($_GET['panier'],4);
								unset($_COOKIE['panier'][intval($tmp)]);
						}
				if(isset($_COOKIE['panier']))
				if(count($_COOKIE['panier'])){
						// print_r($_COOKIE['panier']);
						
						echo"<h3>Etape1: Confirmez votre commande</h3>";
						$tmp='';
						foreach($_COOKIE['panier'] as $k=>$v)
								if(strpos($k,'|')===false)
										$tmp.=$k.',';
								else	$tmpbis[]="select * from options_article inner join articles on img = img_article where id=".substr($k,1).";";
						// echo"<hr/>".$tmp."<hr/>";
						if(strlen($tmp)!=0)$tmp=substr($tmp,0,-1);
						// echo$_POST['panier'];
						// echo$tmp;
						$html='';
						
						// $mysqli=new mysqli('localhost','root','','lib');
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						// $mysqli->set_Charset("utf8");
						$rqt="select * from articles where id_produits in ($tmp);";
						if($tmp!='')$tmpbis[]=$rqt;
						if(isset($_GET['panier']))
								if(strpos($_GET['panier'],'supp')!==false){
										?>
										<script language='javascript'>
												var date=new Date();
												date.setTime(date.getTime()-(1*24*3600*1000));
												var expire=";expires="+date.toGMTString();
												document.cookie="panier['<?php echo substr($_GET['panier'],4) ?>']=ok"+expire+"; path=/";
										</script>
										<?php 
								} ?>
						<form action='index.php' method='POST' onsubmit='paniersub(this)'style="background:rgba(255,255,255,.5);">
						<table id='panier_table' class='articles'>
								<thead>
										<tr>
												<th>Image produit</th><th>Type</th><th>Nom</th><th style='width:100px'>Identifiant produit</th><th>Prix (Fcfa)</th><th>Action</th>
										</tr>
								</thead>
								<tbody>
						<?php
						$booll=false;
						foreach($tmpbis as $vv)
						if($result=$mysqli->query($vv)){ //echo$vv.'<br/>'.$rqt; 
								while($v=$result->fetch_array()){//print_r($v);
														//--------------- pour le montant de la livraison -----------------
												if(($v['nom']=='grotte'||strpos($v['img'],'statue-religieuse-sainte-vierge-marie-')!==false)&&!$booll)$booll=true;
												
												$icone=array('5cm/10cm'=>2000,'20cm/25cm'=>5000,'30cm/40cm'=>12000,'50cm/70cm'=>22000);
												if($vv==$rqt)$vvv=$v['id_produits'];else$vvv="|".$v['id'];
												if(isset($v['img_article']))if($v['taille_']=='')$tai=0;else{if($v['opt_prix']=='')$tai=$icone[$v['taille_']]-$v['prix'];else$tai=$v['opt_prix']-$v['prix'];}else$tai=0;
												if(isset($v['img_article']))if($v['couverture']=='')$cou=0;else$cou=$v['couverture'];else$cou=0;
												$montant+=(intval($v['prix']+$tai+$cou)*$_COOKIE['panier'][$vvv]);
												// print_r($v);
												// echo"(".$v['prix']."+".$tai."+".$cou.")*".$_COOKIE['panier'][$vvv].")  <br/>";
												// echo$montant;
												if(strpos($v['nom'],'livret')!==false)$img='publication-puissance-divine/';
												elseif(strpos($v['nom'],'bible')!==false||strpos($v['nom'],'NEI')!==false||strpos($v['nom'],'texte&priere')!==false)$img='sainte-bible/';
												elseif(strpos($v['nom'],'icone')!==false)$img='icone-religieuse/';
												elseif(strpos($v['nom'],'encens')!==false)$img='encens-priere/';
												elseif((strpos($v['nom'],'croixm')||strpos($v['nom'],'croixp'))!==false)$img='croix-jesus/';
												elseif(strpos($v['nom'],'statue')!==false)$img='statue-religieuse/';
												elseif(strpos($v['nom'],'grotte')!==false)$img='statue-religieuse/';
												elseif(strpos($v['nom'],'chapelet')!==false)$img='chapelet-priere/';
												elseif(strpos($v['nom'],'divers')!==false)$img='divers/';
						?>
												<tr>
														<td><img src='images/vente-religieuse/min/<?php if(isset($v['img_article']))if($v['couverture']!='')echo$img.$v['img'].'-cov';else echo$img.$v['img'];else echo$img.$v['img']; ?>.JPG' alt='' title=''/></td>
														<td><?php echo$v['nom']; ?></td>
														<td><?php echo$v['fr']; ?></td>
														<td><?php if(isset($v['opt_nom']))if($v['opt_nom']!=null)echo$v['opt_nom']; ?></td>
														<td class='hidd'><?php echo$v['stock']."/".$v['stock']; ?></td>
														<td><?php echo money(intval($v['prix']+$tai+$cou));?></td>
														<td class='idee' style='display:none;'><?php if(isset($v['id']))echo'|'.$v['id'];else echo $v['id_produits'];?></td>
														<td style='display:none;'><?php if('texte&priere')echo $img;?></td>
														<td>
																<input class='action' readonly name='<?php echo$v['user_name'].$v['id_produits']; ?>' value='<?php echo$_COOKIE['panier'][$vvv]; ?>' type='number' min='0'  max='<?php if(isset($options_article[$v['img']]))echo intval($options_article[$v['img']][0]['stock']);else echo intval($v['stock']);?>'/>
																<!--<input type='button' value='panier' class='panier_mod' onclick='addarticle(this)'/>-->
																<a href='index.php?panier=supp<?php echo$v['id_produits']; ?>' onmousedown='rmvarticle(this)'>Supprimer ?</a>
														</td>
												</tr><?php
								}$_SESSION['PDmontant']=$montant; ?><?php
						}else echo$rqt;?>
						
										</tbody>
								</table>
								<input id='hid' type='hidden' value='' name='envoie2'/>
								<hr/>
								<div style='text-align:center;font-size:2em;'><u>Somme</u> : <span class='red'><?php echo money($montant); ?></span></div>								
								<div style='text-align:center;font-size:2em;'><u>Frais de transport</u> : <span class='red'><?php if($montant>30000||$booll)echo" gratuit.";else{$montant+=3000;$_SESSION['PDmontant']+=3000;echo money(3000)."<br/><span style='font-size:.4em;color:red;'>Veuillez faire une commande supérieure à <u>30.000 Fcfa</u> pour bénéficier de <u>frais de transport gratuits</u> ! ! !</span>";} ?></span></div>
								<hr/>
								<div style='text-align:center;font-size:2em;'><u>Montant total</u> : <span class='redd'><?php echo money($montant); ?></span></div>
								<?php if($promo!=0)echo"<span CLASS='redd'>réduction de ".money($promo)." avec code réduction '".$_SESSION['pdapromo']['id']."' </span>"; ?>
								<hr/>
								<input type='button' value='Modifier ma commande!' onclick='panier_modif(this);'/>
								<input type='submit' value='Confirmer ma commande!' name='panier'/>
								<input id='panierzz' type='hidden' value='' name='panierzz'/><hr/></form>
								<form action='index.php?panier=promo' method='post'><fieldset><legend>Entrez un code promotionnel</legend><input type='text' placeholder='Code promotionnel' name='promo'/><input type='submit' value='Ok'/></fieldset></form>
								<?php
				}else{}else echo"Votre panier est vide !";
		}
?>