<?php 
// var_dump($_SESSION['sql']['sql0']);
foreach($_SESSION['sql']['sql0'] as $k=>$v){
		if(isset($_GET['menu'])){
				if(strpos($v['url'],$_GET['menu'])!==false){
						switch($v['user_name']){case'objectifs':$hover=array('menu_hover','','','','');break;case'vente':case'vente-en-ligne-publications':case'vente-en-ligne-objets-pieux':$hover=array('','menu_hover','','','');break;case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$hover=array('','','','menu_hover','');break;case'lieux-activites':case'lieu-librairie':case'lieu-bolobi':case'lieu-fraternite':$hover=array('','','','','menu_hover');break;case'enseignements':$hover=array('','','menu_hover','','');break;default:$hover=array('','','','','');break;}
						// $page=$v;
				}
		}else$hover=array('','','','','');
}
				
				?>
<header>
		<h1><a id='logo' href='index.php'><img src='images/ecommerce-chretien-notre-dame-toute-graces.jpg' alt="Librairie Puisance Divine, Abidjan, cocody 2 plateaux" width='200px'/></a><a href='index.php?menu=lieux-activites'><img src='images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt="Librairie Puisance Divine, Abidjan, cocody 2 plateaux" /></a>Puissance Divine</h1>
		<h2><strong>&Eacute;vangélisation</strong>, <strong>Prière</strong> et <strong>Assistance spirituelle</strong></h2>
		<?php if(isset($_GET['menu']))echo"<h3>".utf8_encode($page['textH'])."</h3>";?>
		<?php //include(''); ?>
		<menu>
		
				<?php 
// if(isset($_GET['menurqt']))if($v['url']==$_GET['menurqt'])switch($v['url']){case'objectifs':$hover=array('menu_hover','','','','');break;case'vente':case'vente-en-ligne-publications':case'vente-en-ligne-objets-pieux':$hover=array('','menu_hover','','','');break;case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$hover=array('','','','menu_hover','');break;case'lieux-activites':case'lieu-librairie':case'lieu-bolobi':case'lieu-fraternite':$hover=array('','','','','menu_hover');break;case'enseignements':$hover=array('','','menu_hover','','');break;default:$hover=array('','','','','');break;}
// else$hover=array('','','','','');
// $page=array();
// echo count($_SESSION['sql']['sql0']).'lmklmlmk';
// print_r( array_keys ($_SESSION['sql'])).'lmklmlmk';
// $ar=array();


// foreach($ar as $k=>$v){
		// if(isset($_GET['menu'])){
				// switch($v['user_name']){case'objectifs':$hover=array('menu_hover','','','','');break;case'vente':case'vente-en-ligne-publications':case'vente-en-ligne-objets-pieux':$hover=array('','menu_hover','','','');break;case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$hover=array('','','','menu_hover','');break;case'lieux-activites':case'lieu-librairie':case'lieu-bolobi':case'lieu-fraternite':$hover=array('','','','','menu_hover');break;case'enseignements':$hover=array('','','menu_hover','','');break;default:$hover=array('','','','','');break;}
		// }else{$hover=array('','','','','');$page['textH']="Librairie ecommerce, vente een ligne, retraites spirituelles et enseignements spirituels";}
// }
// foreach($arr as $k=>$v){
		// if(isset($_GET['menu'])){
				// switch($v['user_name']){case'objectifs':$hover=array('menu_hover','','','','');break;case'vente':case'vente-en-ligne-publications':case'vente-en-ligne-objets-pieux':$hover=array('','menu_hover','','','');break;case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$hover=array('','','','menu_hover','');break;case'lieux-activites':case'lieu-librairie':case'lieu-bolobi':case'lieu-fraternite':$hover=array('','','','','menu_hover');break;case'enseignements':$hover=array('','','menu_hover','','');break;default:$hover=array('','','','','');break;}
		// }else{$hover=array('','','','','');$page['textH']="Librairie ecommerce, vente een ligne, retraites spirituelles et enseignements spirituels";}
// }


// print_r($v);
foreach($_SESSION['sql']['menus'] as $k=>$v)
{		echo utf8_encode("<li class='menu ".$v['user_name']."'><a class='".$hover[$k]."' href='index.php?menu=".$v['url']."' id='".$v['user_name']."'>".$v[$_SESSION['langue']]."</a></li>");
		// print_r($v);
		// print_r($_SESSION['sql']['menu']);
}
				// var_dump($page);
				?>
		</menu>
		<ul id='menu2'>
				<li id='inscriptionz'>
						<div>
								<a href='#' onclick='getClass(inscription,"see")'>Inscription</a><!--<a href='#' onclick=''>connexion</a>-->
				<?php			include('inscription.html');
								//include('connexion.html');
								
								// print_r($_POST);
								if(isset($_POST['inscription']))
										foreach($_POST as $k=>$v){
												if($k!='inscription'){//echo"h\hh";
														$d=array('en'=>date('W'),'pr'=>date('n'),'pe'=>date('j'),'ac'=>date('n'));
														if($result=$mysqli->query("select id from newsletter where email='".$_POST['inscription']."'&&id='$k'"))
																if(mysqli_num_rows($result)==0){
																		if(!$result=$mysqli->query("insert into newsletter(`id`,`email`,`statut`) values('$k','".$_POST['inscription']."','".$d[$k]."');")){echo"Echec de votre inscription aux newsletter.";}else echo"Inscription réussie";
																}else echo "Déjà inscript";
														else echo"select id from newsletter where email='".$_POST['inscription']."'&&id='$k';";
												}else{}
										}
								else
								if(isset($_POST['situation'])){
										if($result=$mysqli->query("select id from newslleter where nom='".$_POST['situation']."';"))
												if(mysqli_num_rows($result)==0){//echo"Echec de votre demande de prière d'intercession.";
														if(!$result=$mysqli->query("insert into newsletter(`id`,`nom`) values('in','".$_POST['situation']."');")){echo"Echec de votre demande de prière d'intercession.";}else echo "Demande envoyé !";
												}else echo "Déjà envoyé".mysqli_num_rows($result);
								}
				?>
						</div>
				</li>
				<li><a href='#mon_compte' onclick=''>Mon compte</a></li>
				<li><a href='#rss' onclick=''>Flux RSS</a></li>				
				<li><a href='index.php?menu=livredor'>Livre d'or</a></li>				
		</ul>
		<a href='index.php?panier=panier' id='paniers' <?php if(isset($_GET['menu']))if(strpos($_GET['menu'],'vente')===false)echo'class="absolut"'; ?> title='Accedez au panier ecommerce librairie puissance divine'>Panier</a>
		<aside>

		<ul id='rs' class='up transitionall' <?php if(isset($_GET['menu']))if(strpos($_GET['menu'],'enseignement')!==false)echo'class="fixee"'; ?>>
			<li>
					<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
					<div class="g-plus" data-href="https://plus.google.com/117216852454909314352"></div>
					<a href="https://plus.google.com/106390437585171209107" rel="publisher">Google+</a>
					<!-- Placez cette balise dans l'en-tête ou juste avant la balise de fermeture du corps de texte. -->
					<script src="https://apis.google.com/js/platform.js" async defer>
					  {lang: 'fr'}
					</script>

					<!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
					<div class="g-plusone" data-size="small"></div></li>
			<li>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="index.php" data-via="your_screen_name" data-lang="en" data-related="BlogDuWebdesign" data-count="vertical">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					<a href="https://twitter.com/intent/tweet?screen_name=achicyr" class="twitter-mention-button" data-lang="en">Tweet to @puissancedivine</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</li>
			<li>
					
<?php	
		switch($_GET['menu']){
				case'objectifs':$fb="?menu=objectifs";break;
				case'vente':case'vente-en-ligne-publications':case'vente-en-ligne-objets-pieux':$hover=array('','menu_hover','','','');break;
				case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$hover=array('','','','menu_hover','');break;
				case'lieux-activites':case'lieu-librairie':case'lieu-bolobi':case'lieu-fraternite':$hover=array('','','','','menu_hover');break;
				case'enseignements':$hover=array('','','menu_hover','','');break;default:$hover=array('','','','','');break;
		}
?>
					<div class="fb-like" data-href="https://www.facebook.com/pages/Librairie-Puissance-Divine/251750848293498<?php //if(isset($_GET['menu'])) echo"http://www.librairie-puissance-divine.ci/index.php?menu=".$_GET['menu'];else echo"http://www.librairie-puissance-divine.ci/"; ?>" data-width="100px" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
					<div id="fb-root"></div>
					<script>
							(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
					</script>
			
			</li>
			<div></div>
		</ul>
		</aside>
</header>