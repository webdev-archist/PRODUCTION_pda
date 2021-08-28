<?php
	if(!isset($_SESSION))
	session_start();
if(ini_get('register_globals')) {
		$_SESSION = array();
	}
	require_once('fonction.php');
	require_once('function.php');
	include('config.php');
	
	if(isset($_GET['admin'])){$_SESSION['admin']=$_GET['admin'];if($_GET['admin']=='out')unset($_SESSION['admin']);}
	if(isset($_GET['supp']))unset($_SESSION['commande']);
	if(isset($_GET['langue']))$_SESSION['langue']=$_GET['langue'];
	if(!isset($_SESSION['navigateur'])){
		$_SESSION['navigateur']=getBrowser();
		$_SESSION['langue']='fr';
		sql('admin_pda',array('articles','options_article','blog','commande','ret','reservation'));
		// sql('lib',array('articles','options_article','blog','commande','ret','reservation'));
		
		// initVar();
	}
	
	
	
		if(isset($_POST['NLenseignement']))$tmp_post_inscriptions="toast('inscription réussi',0);";
		else $tmp_post_inscriptions='';
		

//newsletter
// include('newsletter.php');










		
		
	
	if(isset($_GET['menu']))switch($_GET['menu']){
			case'objectifs':$keywords=$_SESSION['sql']['menu'][0]['keywords'];$description=$_SESSION['sql']['menu'][0]['description'];$title=$_SESSION['sql']['menu'][0]['title'];break;
			case'vente':$keywords=$_SESSION['sql']['menu'][2]['keywords'];$description=$_SESSION['sql']['menu'][1]['description'];$title="ecommerce objets de piété, enseignements & retraites spirituelles";break;
			case'vente-en-ligne-publications':$keywords=$_SESSION['sql']['menu'][1]['keywords-1'];$description="ecommerce religieux, boutique en ligne de livres de lecture apostolique (pour la foi chrétienne catholique et protestante) et carnets de prière : bibles, livres et carnets de prières, témoignages.";$title="Vente en ligne de publication chrétienne : bibles, évangile maria valtorta, livrets de prière, livres chrétiens catholique";break;
			case'vente-en-ligne-objets-pieux':$keywords=$_SESSION['sql']['menu'][1]['keywords-2'];$description="Ecommerce religieux, boutique en ligne d'objets de piétés : grottes, statues, icônes  religieuse, encens et chapelet de prière, croix crucifix jésus,divers";$title="Vente en ligne d'objets de piété : icône, croix et statue religieuse, encens et chapelets de prière";break;
			case'enseignements':$keywords=$_SESSION['sql']['menu'][2]['keywords'];$description=$_SESSION['sql']['menu'][2]['description'];$title=$_SESSION['sql']['menu'][2]['title'];break;
			case'priere':case'retraite-spirituelle':case'weekend-du-rosaire':case'location-espace':$keywords=$_SESSION['sql']['menu'][3]['keywords'];$description=$_SESSION['sql']['menu'][3]['description'];$title=$_SESSION['sql']['menu'][3]['title'];break;
			case'lieux-activites':$keywords=$_SESSION['sql']['menu'][4]['keywords'];$description=$_SESSION['sql']['menu'][4]['description'];$title=$_SESSION['sql']['menu'][4]['title'];break;
			case'lieu-librairie':$keywords=$_SESSION['sql']['menu'][4]['keywords-1'];$title="Librairie chrétienne catholique : Librairie Puissance Divine. Affermir la foi des chrétiens";break;
			case'lieu-bolobi':$keywords=$_SESSION['sql']['menu'][4]['keywords-2'];$title="Centre Saint Martin de Porrès de Bolobi, centre de retraites spirituelle à Abidjan";break;
			case'lieu-fraternite':$keywords=$_SESSION['sql']['menu'][4]['keywords-1'];$title="Fraternité Puissance Divine d'Amour : prière communautaire à l'esprit-saint Dieu le père, Jésus-christ, la Sainte vierge Marie";break;
			default:$keywords="ecommerce religieux, vente en ligne catholique, librairie religieuse abidjan, librairie religieuse cocody 2plateaux, librairie catholique, librairie chrétienne, jésus christ, retraite spirituelle, église abidjan, église côte d'ivoire, Dieu, Jésus, Marie, ange, archange, saint, prière, foi, bible, églises, chrétien, chrétienne,  communauté prière";$title="Librairie Puissance Divine : aides aux chrétiens catholiques";break;}
	else{$description="Librairie chrétienne catholique vous invite à faire achats religieux et inscription à retraite sprituelle et enseignements spirituelle au nom de Jésus Christ";$keywords="ecommerce religieux, vente en ligne catholique, librairie religieuse abidjan, librairie religieuse cocody 2plateaux, librairie catholique, librairie chrétienne, jésus christ, retraite spirituelle, église abidjan, église côte d'ivoire, Dieu, Jésus, Marie, ange, archange, saint, prière, foi, bible, églises, chrétien, chrétienne,  communauté prière";$title="Librairie Puissance Divine : aides aux chrétiens catholiques";}

	
	// print_r($sql);
?>
<!doctype html>
<html lang="fr" dir="ltr">
		<head>
				<title><?php echo $title; ?></title>
				<meta name="description" content="<?php echo $description; ?>"/>
				<meta name="keywords" content="<?php echo $keywords; ?>" />
				<meta name="robots" content="index,follow,all" />

				<!--<meta content="charset=iso-8859-2" />-->
				<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
				<meta name="viewport" content="width=device-width" />        
		<?php //include("head_plus.html"); ?>		
				
				<meta name="google" content="unavailable_after:[date]">
				
				
				<link href="//fonts.googleapis.com/css?family=Lobster:400" rel="stylesheet" type="text/css" />
				<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
				<link rel="shortcut icon" href="images/pda.jpg" />
				<link rel="image_src" href="images/pda.ico" />
				<link rel="author" href="https://www.facebook.com/profile.php?id=251750848293498&fref=ts" />
				<link rel="publisher" href="https://plus.google.com/u/0/100331814366681173072/posts" />
				
				
				<?php 	if(isset($_SESSION['admin'])){ ?>
				<link rel="stylesheet" href="admin.css" type="text/css" media="all" />
				<?php 
						}else{	switch($_SESSION['navigateur']['name']){
										case"Chrome":$_SESSION['css']='';break;
										case"Safari":$_SESSION['css']='';break;
										case"Firefox":$_SESSION['css']='-moz';break;
										case"Opera":$_SESSION['css']='-o';break;
										case"MSIE":$_SESSION['css']='-ie';break;
										default:break;
								}
				?>
				<link rel="stylesheet" href="style<?php echo$_SESSION['css']; ?>.css" type="text/css" media="all" />
				<?php 	} ?>
				<link rel="stylesheet" href="styleall.css" type="text/css" media="all" />
				<style>
				<?php
					if(strpos($_SERVER['REMOTE_ADDR'],'196.47.137.126')!==false)echo"#admin{display:block;}";
				?>
				</style>
				
				<?php
					scriptjs($tmp_post_inscriptions); 
				?>
				<script type="text/javascript" src="index.js"></script>
				<script type="text/javascript" src="admin.js"></script>
		</head>
		<body onload='init();'>
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
<?php
	if(isset($_SESSION['admin'])){echo"lkjkjl"; include('body_admin.php');}
	else {include('body.php');}
	if($_SESSION['navigateur']['name']=='MSIE')echo"<div id='noie'>Ce site web ne supporte pas internet explorer pour l'instant, veuillez vous-y connecter avec un autre navigateur svp</div>";
?>
		</body>
</html>
<?php	
	
	
		// if(isset($_SESSION['cle'])){echo'YYYYYYYYYYYYYYYYYYYYY';}
?>