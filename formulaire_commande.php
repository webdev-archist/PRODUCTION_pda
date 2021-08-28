<form action='<?php echo$_SERVER['PHP_SELF']; ?>' method='post'>
		<input id='panier' name='panier' value="" type='hidden'/>
		<input id='panier' name='envoie3' value="" type='hidden'/><?php
		if(isset($_POST['promo'])){
?> 		<input id='panier' name='promo' value="<?php echo$_POST['promo']; ?>" type='hidden'/><?php } ?>
		<fieldset>
				<legend>Votre identité</legend>

				<ol>
						<li>
								<label for='nom'>Nom <span class='required'>*</span></label>
								<input id='nom' name='nom' type='text' placeholder="Prénom et nom" required autofocus>
						</li>
						<li>
								<label for='email'>Email <span class='required'>*</span></label>
								<input id='email' name='email' type='email' placeholder="exemple@domaine.com" required>
						</li>
						<li>
								<label for='telephone'>Téléphone <span class='required'>*</span></label>
								<input id='telephone' name='telephone' type='tel' placeholder="par ex&nbsp;: 0022522414217" required>
						</li>
						<li>
								<label for='telephone2'>Téléphone secondaire</label>
								<input id='telephone2' name='telephone2' type='tel' placeholder="par ex&nbsp;: 0022522414217">
						</li>
				</ol>
		</fieldset>

		<fieldset>
				<legend>Adresse de livraison</legend>
				<ol>
						<li>
								<label for='pays'>Pays <span class='required'>*</span></label>
								<select id='pays' name='pays'>
										<option value='empty' selected>___choisir___</option>
										<option value='cotedivoire'>Côte d'Ivoire</option>
										<!--<option value='guinee'>Guinée</option>
										<option value='guineeb'>Guinée Bissau</option>
										<option value='burkina'>Burkina Faso</option>
										<option value='ghana'>Ghana</option>
										<option value='mali'>Mali</option>
										<option value='nigeria'>Nigéria</option>-->
								</select></li>
						<li>
								
								  <label for='codepostal'>Boite postale</label>
								  <br/>
								  <input id='codepostal' name='codepostal' type='text' placeholder="ex: BP 111 Abidjan 08">
						</li>
						<li>
								
								  <label for='adresse'>Lieu de livraison (adresse géographique complète: ville, quartier, rue)<span class='required'>*</span></label>
								  <br/><span>L'adresse de votre lieu de travail est recommandé pour la livraison de votre commande</span><br/>
								  <span>La signature du bordereau de livraison est obligatoire à la reception</span>
								  <br/>
								  <textarea id='adresse' name='adresse' style='width:300px' rows='5' placeholder='ex: abidjan, Cocody 2plateaux, rue des jardins' required></textarea>
						</li>
						<li>
								  <label for='adresse_comp'>Complément d'adresse, indication/repère précis</label>
								  <input id='adresse_comp' name='adresse_comp' placeholder=" ex: portail jaune, face pharmacie st Gil," title="ex: sonnez à Mr AAA, téléphoner arrivé au lieu dit, livrer en semaine entre 17H et 18H..." type='text'  size='40'>
								<!--<input id='pays' name='pays' type='text' required>-->
						</li>
				</ol>
		</fieldset>
		<fieldset>
				<button type='submit'>Valider !</button>
		</fieldset>
</form>
		
<?php

		

?>