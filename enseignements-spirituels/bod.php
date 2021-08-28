
<?php if(isset($_GET['enseignement-spirituel'])){
		// $mysqli=new mysqli('localhost','root','','lib');
		$mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
		$mysqli->set_Charset("utf8");
		// $rqt="select * from blog where user_name='".$_GET['enseignement']."'";
		$rqt="select * from blog where phrase='".$_GET['enseignement-spirituel']."' ;";
		if($result=$mysqli->query($rqt))
		{$i=0;
				if($v=$result->fetch_array())
				{		$h2=$v['titre'];
						$h3=$v['code'];
						$contenu=strtolower($v['phrase']).".htm";
				}else echo$rqt;
		}else echo$rqt;
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
		
?>
		<div id='containall' class='<?php if(isset($_GET['menu']))if($_GET['menu']=="vente"||$_GET['menu']=="lieux-activites"||$_GET['menu']=="priere"||$_GET['menu']=="objectifs") echo$_GET['menu'];else echo"main" ?>'>
				<header class='enseignement'>
						<h1>Enseignement spirituel<span>--powered by Puissance Divine d'Amour d'Abidjan</span></h1>
						<h2 class='titre-shine'><?php echo$h2;	?></h2>
						<h3><?php echo$h3;	?></h3>
						<a href="https://www.facebook.com/hashtag/enseignement_spirituel" target="_blank">cette #enseignement_spirituel sur facebook</a>
						<a href="https://twitter.com/hashtag/enseignement_spirituel?f=realtime&src=hash" target="_blank">cette #enseignement_spirituel sur twitter</a>
				</header>
				<section id='container' class='container'>
				<iframe src="jesus-enseigne/<?php echo"$contenu"; ?>">
				</iframe>
				<div class="fb-comments" data-href="http://librairie-puissance-divine.ci/enseignements-spirituels/index.php?enseignement-spirituel=<?php echo$_GET['enseignement-spirituel']; ?>" data-width="500px" data-numposts="50" data-colorscheme="light"></div>
				<div class="fb-like" data-href="https://www.facebook.com/pages/Librairie-Puissance-Divine/251750848293498" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
				
					<div style='float:right'>
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
					<div>
						<a href="http://twitter.com/share" class="twitter-share-button"   data-count="vertical" data-via="@puissancedamour">Tweet</a>
						<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				</div>
		</div>
</div>
<?php
}else errURL();
//faire fonction  errURL('404');
?>