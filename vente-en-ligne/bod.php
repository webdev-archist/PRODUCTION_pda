
<?php if(isset($_GET['produit-religieux'])){$v=$n;
		if($bool)
		{		
				$libelle=array('bibles'=>'Bible','livret P.D'=>'Livret Puissance Divine','NEI'=>'Edition NEI','texte&priere'=>'Textes et prière','grotte'=>'<strong>Grotte religieuse</strong>','statue'=>'Statue religieuse','croixm'=>'Croix mur','croixp'=>'Croix posée','chapelet'=>'Chapelet','encens'=>'Encens','divers'=>'Divers','tableau/icone'=>'Icône religieuse');
				foreach($libelle as $libk=>$lib)
						$libelle[0][$libk]=str_replace(' ','-',strtolower(wd_remove_accents($lib)));
				if(strpos($v['nom'],'livret')!==false)$img='publication-puissance-divine/';
				elseif(strpos($v['nom'],'bible')!==false||strpos($v['nom'],'NEI')!==false||strpos($v['nom'],'texte&priere')!==false)$img='sainte-bible/';
				elseif(strpos($v['nom'],'icone')!==false)$img='icone-religieuse/';
				elseif(strpos($v['nom'],'encens')!==false)$img='encens-priere/';
				elseif(strpos($v['nom'],'croix')!==false)$img='croix-jesus/';
				elseif(strpos($v['nom'],'chapelet')!==false)$img='chapelet-priere/';
				elseif(strpos($v['nom'],'divers')!==false)$img='divers/';
				elseif(strpos($v['nom'],'grotte')!==false)$img='statue-religieuse/';
				elseif(strpos($v['nom'],'statue')!==false)$img='statue-religieuse/';
				$h2=str_replace('<br/>',"",$v[$_SESSION['langue']]);
				$h2=str_replace('<br>',"",$h2);
				$imgz=$v['img'].'.JPG';
				$type=$v['user_name'];
				$prix=$v['prix'];
		}
		else echo$rqt;
		// $rqt="select * from blog where user_name='49';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>49".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='50';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='51';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='52';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='53';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='54';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>54".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		// $rqt="select * from blog where user_name='55';";
		// if($result=$mysqli->query($rqt))$v=$result->fetch_array();echo "<br/>".str_replace(" ","-", strtolower(wd_remove_accents($v[1])));
		if($v['nom']=="tableau/icone"){$prix_icone=array('5cm/10cm'=>2000,'20cm/25cm'=>5000,'30cm/40cm'=>12000,'50cm/70cm'=>22000);$v['opt_prix']=$prix_icone[$v['taille_']];}
?>
		<div id='containall' class='<?php if(isset($_GET['menu']))if($_GET['menu']=="vente"||$_GET['menu']=="lieux-activites"||$_GET['menu']=="priere"||$_GET['menu']=="objectifs") echo$_GET['menu'];else echo"main" ?>'>
				<header class='produit-religieux'>
						<h1>Fiche produit religieux chrétien</h1>
						<h2 class='titre-shine'>Articles religieux "<span id='namme'><?php echo$libelle[$v['nom']].'" : '.$h2;	?></span></h2>
						<a href='http://www.librairie-puissance-divine.ci/index.php?menu=vente-en-ligne-objets-pieux' title='site ecommerce religieux publications chrétiennes'> rejoindre le site </a>
						<a href='http://www.librairie-puissance-divine.ci/vente-en-ligne/index.php?produit-religieux=<?php echo$_GET['produit-religieux'];?>' title='permalien vente objet de piété ou publication chrétienne, ecommerce religieux'>permalien</a>
						<a href='javascript:addClass(rs_produit,"rs");' title='Partagez, likez, ou postez les produits religieux de la puissance divine'>share, like or post</a>
						<h3><?php echo utf8_encode($page['keyword']);	?></h3>
				</header>
				<section id='container' class='container'>
						<?php
						// print_r($v);
						// echo"\$v provient de l'instruction dans  vente-en-ligne/index.php:~l40, où je crois (pas encore vérifié) la requete insère en \$v les valeur du produit courant";
						?>
						<img class='img_produit' src='./../images/vente-religieuse/<?php echo$img.$imgz; ?>' alt='ecommerce religieux chrétien catholique objet piété <?php echo$v['nom'].$imgz; ?>' title='<?php echo str_replace("'","&acute;",$v['fr1']); ?>' height='300px'>
						<div id='info_produit'>
								<span style='color:#50F;font-family: Lobster;font-size:1.3em;'><?php echo$libelle[$v['nom']];	?></span>
								<span style='color:#F05;font-family: Lobster;font-size:1.3em;'><?php echo$h2;	?></span>
								<span style='color:red;font-size:1.2em;'><?php if(isset($v['id']))if($v['opt_prix']!=null)echo money($v['opt_prix']);else echo money($v['prix']);	?></span>
								<input id='qqtyy' type='number' title='Ajouter quantité' value='0'/>
								<form action='panier.php' method='POST'>
										<span style="opacity:0"><?php echo $v['stock'];	?></span><input id='ppanier' type='button' title='Ajouter au panier' value='' class='panier'/><span style='display:none;'><?php if(isset($v['id'])) echo"|".$v['id'];else echo$v['id_produits']; ?></span>
								</form>
								<hr style="float: left;clear: both;width: 100%;box-shadow:0 0 10PX 1PX,0 0 50PX 5PX;"/>
								<a target="_blank" href="http://www.librairie-puissance-divine.ci/index.php?menu=vente-en-ligne-objets-pieux#!<?php echo$libelle[0][$v['nom']]; ?>" style='color:#50F;font-size:1em;'><?php echo$libelle[$v['nom']];	?> Puissance Divine</a>
								<?php 	if($v['auteur']!='')echo"<span style='color:red;font-size:1em;'>Auteur: ".$v['auteur']."</span>"; 
										if(isset($v['id']))echo"<span style='color:red;font-size:1em;'>".$v['taille_']."</span>"; 
										if($v['autre']!=null&&$v['autre']!='')if(isset($v['id']))echo"<span style='color:red;font-size:1em;'>".$v['autre']." pages</span>";if(isset($v['autre_'])) echo"<span style='color:red;font-size:1em;'>Cahier numéro: ".$v['autre_']."</span>"; 
									// print_r($v); 
								?>	
						</div>
						<div id='descr_produit' ><?php echo$v['fr1']; ?></div>
						
						<div id='rs_produit'><span onclick="this.parentNode.removeAttribute('class');" class='close'>X</span>					
								<div class="fb-comments" data-href="http://librairie-puissance-divine.ci/vente-en-ligne/index.php?produit-religieux=<?php echo$_GET['produit-religieux']; ?>" data-width="500px" data-numposts="50" data-colorscheme="light"></div>
								<div class="fb-like" data-href="https://www.facebook.com/pages/Librairie-Puissance-Divine/251750848293498" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
							
								<div style='float:left;clear:both;'>
								<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
								<div class="g-plus" data-href="https://plus.google.com/117216852454909314352"></div>
								<a href="https://plus.google.com/106390437585171209107" rel="publisher">Google+</a>
								<!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
								<script src="https://apis.google.com/js/platform.js" async defer>
								  {lang: 'fr'}
								</script>

								<!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
										<div class="g-plusone" data-size="small"></div>
								</div>
								<div style='float:left;clear:both;'>
										<a href="http://twitter.com/share" class="twitter-share-button"   data-count="vertical" data-via="@puissancedamour">Tweet</a>
										<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
								</div>
						</div>
				</section>
		</div>
<?php
}
?>