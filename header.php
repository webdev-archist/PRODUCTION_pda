<?php 
// var_dump($_SESSION);
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
		<h1><a id='logo' href='index.php'><img src='images/ecommerce-chretien-notre-dame-toute-graces.jpg' alt="Librairie Puisance Divine, Abidjan, cocody 2 plateaux" width='200px'/></a>
		<a href='index.php?menu=retraites-de-priere-spirituelles-abidjan'><img src='images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt="Librairie Puisance Divine, Abidjan, cocody 2 plateaux" /></a>Puissance Divine
		</h1>
		<h2><strong>&Eacute;vangélisation</strong>, <strong>Prière</strong> et <strong>Assistance spirituelle</strong></h2>
		<?php if(isset($_GET['menu'])){
								$image=explode(';',$page['img']);$video=explode(';',$page['video']);
								bal(array('img','images/'.utf8_encode($image[0].'.png')),array("alt"=>utf8_encode($image[1]),"title"=>utf8_encode($image[2])));
								bal(array('video',$video[0],array("controls"=>"controls","width"=>"200")),array("title"=>utf8_encode($video[1]),utf8_encode($video[2])));
								echo"<h3>".utf8_encode($page['textH'])."</h3>";
					}
		?>
		<?php //include(''); ?>
		<div id="blogB">
		<a href="http://bolobi.ci" target="_blank" title="Blog du Sanctuaire notre Dame du Rosaire">Blog <span>bolobi.ci</span>
		</a>
		</div>
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
{		//var_dump($v);
echo utf8_encode("<li class='menu ".$v['user_name']."'><a class='".$hover[$k]."' href='index.php?menu=".$v['url']."' title='".$v['title']."' id='".$v['user_name']."'>".$v[$_SESSION['langue']]."</a></li>");
		// print_r($v);
		// print_r($_SESSION['sql']['menu']);
}
				// var_dump($page);
				?>
		</menu>
		<div>
				<a href='#' onclick='getClass(inscription,"see")'>Inscription</a>
				<a href='#' onclick='getClass(connexion,"see")'>Connexion</a>
		</div>
		<form id="connexion" action='index.php?admin=ok' method='post'>
				<input type="text" name='user' placeholder="nom utilisateur">
				<input type="password" name='pwd' placeholder="**********">
				<input style='padding: 0;width: 95%;HEIGHT: 50PX;cursor:pointer;color:goldenrod;font-size: 1em;' type="submit" value="ok">
		</form>
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
						if($result=$mysqli->query("select id from newsletter where nom='".$_POST['situation']."';"))
								if(mysqli_num_rows($result)==0){//echo"Echec de votre demande de prière d'intercession.";
										if(!$result=$mysqli->query("insert into newsletter(`id`,`nom`, `email`) values('in','".$_POST['situation']."','".date("Y-m-d H:i:s")."');"))
										{		$m__html = "<html><head></head><body>$m__txt</body></html>";
												$boundary = "-----=".md5(rand());
												$sujet = "Confirmation de votre $comp chez librairie-puissance-divine.ci";
												$h_ = "MIME-Version: 1.0".$p_;$h_.= 'Content-Type: text/html; charset="UTF-8";'.$p_;$h_.= 'Content-Transfer-Encoding: 7bit'.$p_;$h_.= 'Date: ' . date('r', $_SERVER['REQUEST_TIME']).$p_;$h_.= "From: \"Anonyme \"<puissancedamour@gmail.com>".$p_;$h_.= "Reply-to: \"WeaponsB\" <puissancedamour@gmail.com>".$p_;$h_.= "Return-Path: <puissancedamour@gmail.com>".$p_;$h_.= 'X-Mailer: PHP v' . phpversion().$p_;$h_.= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'].$p_;
												$m_ = $p_."--".$boundary.$p_;$m_.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$p_;$m_.= "Content-Transfer-Encoding: 8bit".$p_;$m_.= $p_.$m__txt.$p_;$m_.= $p_."--".$boundary.$p_;$m_.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$p_;$m_.= "Content-Transfer-Encoding: 8bit".$p_;$m_.= $p_.$m__html.$p_;$m_.= $p_."--".$boundary."--".$p_;$m_.= $p_."--".$boundary."--".$p_;
												FOREACH(array('puissancedamour@yahoo.fr','puissancedamour@gmail.com','hi.cyril@gmail.com') as $v){
														if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $v)){$p_ = "\r\n";}
														else{$p_ = "\n";}
													mail($v,"Rapport: ".$sujet,$m_,$h_);
												}
												echo"Echec de votre demande de prière d'intercession.";
										}
										else echo "Demande envoyé !";
								}else echo "Déjà envoyé".mysqli_num_rows($result);
				}
?>
		<ul id='menu2'>
				<li id='demandes'><a href='#demandes' title="Nous intervenons pour vous sur plusieurs plans spirituelle, faite-y une demande chrétienne."  ONCLICK=''>Demande Chrétienne ?</a>
				</li>
				<li><a href='#partenaires' title="Découvrez ceux qui compte pour nous en Côte d'ivoire" onclick=''>Partenaires</a>
						<ul>
							<li><a href='#'  target="_blank">void</a>
							</li>
						</ul>
				</li>
				<li><a href='#blog' title="Suivez nos actualités sur notre blog, ou suivez nos actualités en flux rss" onclick=''>Blog et Flux RSS</a></li>				
				<li><a href='index.php?visite_guidee' title="découvrez tout sur la Puissance Divine en images et multimédias">Visite guidée</a></li>
				<li><a href='index.php?menu=livredor'>Livre d'or</a></li>				
				<li id='contacts'><a href='#contacts'>Nos Contacts</a>
						<ul>
							<li>email</li><li>puissancedamour@gmail.com</li>
							<li>téléphone</li><li>09-36-06-72</li>
							<li>etc</li><li>...</li>
						</ul></li>				
		</ul>
		<a href='index.php?panier=panier' id='paniers' <?php if(isset($_GET['menu']))if(strpos($_GET['menu'],'vente')===false)echo'class="absolut"'; ?> title='Accedez au panier ecommerce librairie puissance divine'>Panier</a>
		<aside>
<?php			//include('rs.php');	?>
		
		</aside>
</header>