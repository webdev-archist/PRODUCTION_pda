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
		// sql(	'lib',
		sql(	'admin_pda',
					array('articles','options_article',),
					array(	"select menu,menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg"
							// "select menu.id as menu_id,user_name,".$_SESSION['langue'].",seo.id as seo_id,url,seo.title as title,seo.description as descr,keyword,seo.img,video,h,hgroup.img as imgH,hgroup.title as titleH, hgroup.text as textH from menu inner join seo on user_name=getM inner join hgroup on user_name=getHg where user_name like '|%'"
					)
			);
		foreach($_SESSION['sql']['sql0'] as $k=>$v)
				if($v['menu']=='')
						$ar[$v['user_name']][]=$v;
				else	$arr[$v['url']][]=$v;
		$_SESSION['sql']['menus']=array();
		foreach($ar as $k=>$v)
				$_SESSION['sql']['menus'][]=$v[rand(0,count($v)-1)];
	}
	
	foreach($_SESSION['sql']['menus'] as $k=>$v)
			if(in_array("vente-en-ligne",$v)){if(strpos($v['url'],"vente-en-ligne")!==false)$page=$v;}
		

	$mysqli=$_SESSION['mysqli'];
	// $mysqli=new mysqli('localhost','root','','admin_pda');
	// $mysqli=new mysqli('localhost','pda','mirai','admin_pda');
	// $mysqli=new mysqli('localhost','SuperUser','ueLy68_3',"pda");
	// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
	$mysqli->set_Charset("utf8");
	if(strpos($_GET['produit-religieux'],'|')===false)$rqt="select * from articles where id_produits='".$_GET['produit-religieux']."' ;";
	else $rqt="select *,options_article.autre as autre_ from options_article inner join articles on (img_article=img) where id='".substr($_GET['produit-religieux'],1)."' ;";
	// echo$rqt."...";
	if($result=$mysqli->query($rqt)){
			if($v=$result->fetch_array())$bool=true;else$bool=false;
	}else echo$rqt;
	// print_r($v);

//newsletter
// include('newsletter.php');










		
		
	
	if($v['nom']=='objet')
	{		$title="vente en ligne objet de piété chrétien abidjan : ".$v['fr'];
			$kw="ecommerce religieux chrétien, ecommerce catholique, ecommerce objet piété chrétien,vente en ligne objet de piété chrétien";
	}else{	$kw="ecommerce religieux chrétien, ecommerce catholique,ecommerce publication chrétienne,vente en ligne publication chrétienne";
			$title="vente en ligne publication chrétienne abidjan : ".$v['fr'];
	}
	$dscr="vente en ligne de publications chrétiennes catholique et protestante. ventes objets de piété. Ecommerce religieux chrétien abidjan cote d'ivoire";
	
	
	// print_r($sql);
?>
<!doctype html>
<html lang="fr" dir="ltr">
		<head>
				<title><?php echo utf8_encode($page['title']); ?></title>
				<meta name="description" content="<?php utf8_encode($page['descr']); ?>"/>
				<meta name="keywords" content="<?php echo utf8_encode($page['keyword']); ?>" />
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
					$tmp_post_inscriptions="";
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
// echo$bool;
	if(isset($_SESSION['admin'])) include('body_admin.php');
	else include('body.php');
	if($_SESSION['navigateur']['name']=='MSIE')echo"<div id='noie'>Ce site web ne supporte pas internet explorer pour l'instant, veuillez vous-y connecter avec un autre navigateur svp</div>";
?>
		</body>
</html>
<?php	
	
	
		// if(isset($_SESSION['cle'])){echo'YYYYYYYYYYYYYYYYYYYYY';}
?>