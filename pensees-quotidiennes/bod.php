
<?php if(isset($_GET['pensee-quotidienne'])){
		// $mysqli=new mysqli('localhost','root','','lib');
		// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
		// $mysqli->set_Charset("utf8");
		// $rqt="select * from blog where user_name='".$_GET['enseignement']."'";
		// $rqt="select * from blog where phrase='".$_GET['enseignement-spirituel']."' ;";
		// if($result=$mysqli->query($rqt))
		// {$i=0;
				// if($v=$result->fetch_array())
				// {		$h2=$v['titre'];
						// $h3=$v['code'];
						// $contenu=strtolower($v['phrase']).".htm";
				// }else echo$rqt;
		// }else echo$rqt;
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
		
		$h3="meditation, inspiration chrétienne, maria valtorta, évangile révélé";
?>
		<div id='containall' class='<?php if(isset($_GET['menu']))if($_GET['menu']=="vente"||$_GET['menu']=="lieux-activites"||$_GET['menu']=="priere"||$_GET['menu']=="objectifs") echo$_GET['menu'];else echo"main" ?>'>
				<header class='enseignement'>
						<h1>Pensées quotidienne<span>--powered by Puissance Divine d'Amour d'Abidjan</span></h1>
						<h2 class='titre-shine'>Jour <?php echo date('j').' ('.date('Y').')';	?></h2>
						<h3><?php echo$h3;	?></h3>
						<a href="https://www.facebook.com/hashtag/penseesquotidiennes" target="_blank">cette #penseesquotidiennes sur facebook</a>
						<a href="https://twitter.com/hashtag/penseesquotidiennes?f=realtime" target="_blank">cette #penseesquotidiennes sur twitter</a>
				</header>
				<section id='container' class='container'>
				<iframe src="pensee-quotidienne/<?php echo date('j').".htm"; ?>">
				</iframe>
				<div class="fb-comments" data-href="http://librairie-puissance-divine.ci/pensees-quotidiennes/index.php?pensee-quotidienne=<?php echo$_GET['pensee-quotidienne']; ?>" data-width="500px" data-numposts="50" data-colorscheme="light"></div>
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