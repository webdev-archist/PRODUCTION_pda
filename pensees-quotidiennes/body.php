		<?php echo"jkkjj";include_once("analyticstracking.php") ?>
		<aside id='fix'>
				<img id='zoom_img' src='' alt=''/>
				<figcaption></figcaption>

		</aside>
		<aside id='affiche_article'>
			<span onclick="this.parentNode.removeAttribute('style');" title='cliquez ici pour sortir'>x</span>
			<img src='' alt='' title=''/>
			<div onclick="Event.stop(e);alert('ok');" title=''>
					<h2></h2>
					<span style='visibility:hidden'>Commentaires des internautes sur: <span></span> <a href='#articleCommentaires' onclick='get_article_commentaire()'>(<span></span>)</a></span>
					<span>Description</span>
					<hr/>
					<p></p>
					<span>Informations générale</span>
					<hr/>
					<div>
							<span style='visibility:hidden'></span>
							<span></span>
							<span></span>
							<span></span>
					</div>
					<section></section>
			</div>
			
		</aside>
<!--<button onclick='resett()'>initialiser les cookie<button/>-->
<?php
include('header.php');
include('bod.php');
include('footer.php');
?>
							<form id='le_panier' action='<?php echo$_SERVER['PHP_SELF']; ?>' method='post' onclick="le_panier.removeAttribute('style')">
									<input id='panier' name='panier' value='' type='hidden'/>
									<input id='panierz' name='panierz' value='' type='hidden'/>
									<div>
											<div>Vous venez d'ajouter un produit au panier</div>
											<input type='button' value='Continuez vos achats' onclick='le_panier.removeAttribute("style")'/>
											<input type='submit' name='envoie' value='Aller au panier'/>
									</div>
							</form>
							<form id='message_comments' name='ecrire' action='index.php?menu=livredor' method='post' onsubmit=''>
									<span class='close' onclick='tag("footer")[0].removeAttribute("style");this.parentNode.removeAttribute("class");'>X</span>
									<img title='Choisissez une image' src='' alt=''/>
									<input type='text' name='pseudo' placeholder='Entrez votre pseudonyme' size='20'/>
									<input type='text' name='titre' placeholder='Entrez un titre à votre commentaire' size='30'/>
									<input type='hidden' name='info0'/>
									<textarea cols='129' rows='8' name='texte'></textarea>
									<input type='submit' value='Envoyer'/>
							</form>
<a href="http://www.calcul-pagerank.fr/" target="_blank" style='display:none'><img src="http://www.calcul-pagerank.fr/client/www.librairie-puissance-divine.ci.gif" border="0" alt="PageRank" /></a>
<a id='admin' href="index.php?admin=ok">Connexion</a>



						<!-- Webdezign.tutoriaux.free.fr® Compteur de visiteurs -->
								<!--<script src="http://webdezign.tutoriaux.free.fr/services/compteur_page.php?client=75756&Af=6"></script>-->
						<!-- Fin Compteur de visiteurs® -->

<!--<script type="text/javascript" src="http://counter1.statcounterfree.com/private/countertab.js?c=18783c7a9b71ee4053faab3fbfd6dc3e"></script> -->
<!--<script type="text/javascript" src="http://compteur.websiteout.net/js/7/0/1/0"></script> -->
<!--<a href="http://www.supportduweb.com/compteur-global-gratuit-sans-inscription-live-pages-vues-visites.html"><img src="http://services.supportduweb.com/cpt_global/89340-22.png" alt="Compteur Global gratuit sans inscription" /></a>-->
<div style='display:block'>
<?php 
		echo$visitesP.$visitesNow.$visitesD.$visitesU;
?> 
</div>