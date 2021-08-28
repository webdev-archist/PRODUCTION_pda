
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