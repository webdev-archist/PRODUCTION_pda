<?php
	if(!isset($_SESSION))
	session_start();
if(ini_get('register_globals')) {
		$_SESSION = array();
	}
	if(!isset($_SESSION['cle']))$_SESSION['cle']=0;
	if(isset($_GET['cle'])){
			if($_SESSION['cle']==1){  header('Location: index.php'); }
			if($_SESSION['cle']==0){$_SESSION['cle']=1;}
	}else{
			if($_SESSION['cle']==1){$_SESSION['cle']=0;}
	}
	require_once('fonction.php');
	require_once('function.php');
	include('config.php');
	
	if(isset($_GET['admin'])){if($_POST['pwd']=='loreto')$_SESSION['admin']=$_GET['admin'];if($_GET['admin']=='out')unset($_SESSION['admin']);}
	if(isset($_GET['supp']))unset($_SESSION['commande']);
	if(isset($_GET['langue']))$_SESSION['langue']=$_GET['langue'];
	if(!isset($_SESSION['navigateur'])){
		$_SESSION['navigateur']=getBrowser();
		$_SESSION['langue']='fr';
		sql(	'admin_pda',
					array('articles','options_article','commande','liste', 'ret','reservation'),
					array(	"select menu,menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg"
							// "select menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg where user_name like '|%'"
					)
			);
		foreach($_SESSION['sql']['sql0'] as $k=>$v)
				if($v['menu']=='')
						$ar[$v['user_name']][]=$v;
				else	$arr[$v['url']][]=$v;
		$_SESSION['sql']['menus']=array();
		$_SESSION['sql']['sousmenus']=array();
		foreach($ar as $k=>$v)
				$_SESSION['sql']['menus'][]=$v[rand(0,count($v)-1)];
		foreach($arr as $k=>$v)
					$_SESSION['sql']['sousmenus'][]=$v[rand(0,count($v)-1)];
		// echo"select menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg";
		
		// sql('lib',array('articles','options_article','blog','commande','ret','reservation'));
		
		// initVar();
	}
	foreach($_SESSION['sql']['menus'] as $k=>$v)
			if(in_array($_GET['menu'],$v)){if(strpos($v['url'],$_GET['menu'])!==false)$page=$v;}
	foreach($_SESSION['sql']['sousmenus'] as $k=>$v)
			if(in_array($_GET['menu'],$v)){if(strpos($v['url'],$_GET['menu'])!==false)$page=$v;}
	// var_dump($page);
	// var_dump($_SESSION['sql']['menus']);
	// var_dump($_SESSION['sql']['sousmenus']);
	// echo$_GET['menu'];
	// print_r($_SESSION);
	// print_r($_SESSION['sql']['sql0']);
	
	
		// $w=$_SERVER['REQUEST_URI'];
		// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
		// if($result=$mysqli->query("select url from liens where url='".$_SERVER['REQUEST_URI']."';"))if(mysql_num_rows($result)==0)$mysqli->query("insert into liens values('',".$_SERVER['REQUEST_URI'].");");
		if($_SERVER['REQUEST_URI']=="http://www.librairie-puissance-divine.ci/index.php?saint-esprit=esprit-saint"||$_SERVER['REQUEST_URI']=="http://www.librairie-puissance-divine.ci/index.php?esprit-saint=saint-esprit")
		{		if($result=$mysqli->query("select url from liens"))while($v=$result->fetch_array())$cpt[]=$v;
				header('Location: '.$cpt[rand(0,(count($cpt)-1))]);
				
		}
		// else echo$_SERVER['REQUEST_URI'];
	
		if(isset($_POST['NLenseignement']))$tmp_post_inscriptions="toast('inscription réussi',0);";
		else $tmp_post_inscriptions='';
		

//newsletter
// include('newsletter.php');










		
		
	
	if(isset($_GET['menu']))switch($_GET['menu']){
			case'objectifs':$keywords=$_SESSION['sql']['menu'][0]['keywords'];$description=$_SESSION['sql']['menu'][0]['description'];$title=$_SESSION['sql']['menu'][0]['title'];break;
			case'vente':$keywords=$_SESSION['sql']['menu'][2]['keywords'];$description=$_SESSION['sql']['menu'][1]['description'];$title=$_SESSION['sql']['menu'][1]['title'];break;
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

	// echo array('kj kj'='lkjjkjjljkljjkkmklk')['kj kj'];
	
?>
<!doctype html>
<html lang="fr" dir="ltr">
		<head>
				<title><?php if(isset($page)) echo utf8_encode($page['title']); else echo"Ecommerce Librairie Puissance Divine Abidjan, assistance retraite enseignement spirituel";?></title>
				<meta name="description" content="<?php if(isset($page)) echo utf8_encode($page['descr']); else echo"La puissance divine d'abidjan est une librairie religieuse chrétienne catholque, à but apostolique, son ecommerce, ses assistances, retraites et enseignements spirituels élèvent la foi chrétienne";?>"/>
				<meta name="keywords" content="<?php if(isset($page)) echo utf8_encode($page['keyword']); else echo"assistance spirituelle, retraite spirituelle, enseignements spirituel, assistance spirituelle abidjan, retraite spirituelle abidjan, enseignements spirituel abidjan, week-end du rosaire, esprit-saint, jésus-christ, location espace prière abidjan, ecommerce chrétien, ecommerce religieux, ecommerce catholique, sanctuaire coeur d'accueil de Jésus de bolobi";?>" />
				<meta name="robots" content="index,follow,all" />

				<!--<meta content="charset=iso-8859-2" />-->
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
				<meta name="viewport" content="width=device-width" />    
				<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
				<link rel="icon" type="image/ico" href="favicon.ico" />
				<meta name="Language" content="fr" />
				
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
					if(isset($_GET['panier']))echo"body #containall{background:url(images/fond_panier.png) center center no-repeat;}";
				?>
				</style>
				
				<?php
					scriptjs($tmp_post_inscriptions); 
				?>
				<?php
				if(isset($_GET['admin'])){
				?>
				<script type="text/javascript" src="prototype.js"></script>
				<?php } ?>
				<script type="text/javascript" src="index.js"></script>
				<script type="text/javascript" src="admin.js"></script>
		</head>
		<body onload='init();'>
<?php
	if(isset($_SESSION['admin'])) include('body_admin.php');
	else include('body.php');
	if($_SESSION['navigateur']['name']=='MSIE')echo"<div id='noie'>Ce site web ne supporte pas internet explorer pour l'instant, veuillez vous-y connecter avec un autre navigateur svp</div>";
?>
		</body>
</html>
<?php	
	
	
		// if(isset($_SESSION['cle'])){echo'YYYYYYYYYYYYYYYYYYYYY';}
?>