		<?php $indicatif='00';
switch($_POST['pays']){case'cotedivoire':$indicatif.='225';$phoneLen=13;break;case'guinee':$indicatif.='224';$phoneLen=13;break;case'guineeb':$indicatif.='245';$phoneLen=13;break;case'burkina':$indicatif.='226';$phoneLen=13;break;case'ghana':$indicatif.='233';$phoneLen=13;break;case'mali':$indicatif.='223';$phoneLen=13;break;case'nigeria':$indicatif.='234';$phoneLen=13;break;}
			
echo $_POST['pays'];
// echo numero_tel('0022559724963',$_POST['pays']);
		?>
<div id='paiement'>
		<h3><u>Montant à payer</u>: <span id='montant' class='required'><?php echo money($_SESSION['PDmontant']); ?></span></h3>
		<div>
				<div>Choisissez maintenant votre mode de paiement parmis les choix ci-dessous...</div>
				<a href='#tel'>Payez par les services téléphonique</a>
				<a style="visibility:hidden" href='#lig'>Payez par un moyen de paiement internet (paypal, moneygram...)</a>
				<a style="visibility:hidden" href='#vir'>Payez par virement bancaire</a>
				<div style='clear:left;float:left;margin-top:30px;'>...ou faites un choix rapide ci-après..</div>
				<div id='phones' class='paiement_plus'>
						<img width='130px' src='images/orangemoney.jpg' alt='La solution de paiement M-pesa Orange' title="ORANGEMoney, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/mtnmoney.jpg' alt='La solution de paiement M-pesa MTN' title="MTNMoney, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img style="visibility:hidden" width='130px' src='images/flooz.jpg' alt='La solution de paiement M-pesa Flooz' title="Flooz, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
				<div id='lignes' class='paiement_plus' style="visibility:hidden" >
						<img width='130px' src='images/celpaid.jpg' width='150px' alt='La solution de paiement M-pesa Orange' title="celpaid, un moyen de paiement  sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/paypal.jpg' alt='La solution de paiement M-pesa Orange' title="Paypal, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/moneygram.jpg' alt='La solution de paiement M-pesa MTN' title="Moneygram, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
				<div id='cartes' class='paiement_plus' style="visibility:hidden" >
						<img width='130px' src='images/visa.jpg' alt='La solution de paiement M-pesa Orange' title="visa, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/mastercard.jpg' alt='La solution de paiement M-pesa MTN' title="mastercard, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/amex.jpg' alt='La solution de paiement M-pesa Flooz' title="amex, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
		</div>
		<form action='index.php?cle=0' method='post' onsubmit=''>
				<input type='hidden' name='nom' value='<?php echo$_POST['nom']; ?>'/>
				<input type='hidden' name='email' value='<?php echo$_POST['email']; ?>'/>
				<input type='hidden' name='telephone' value='<?php echo$_POST['telephone']; ?>'/>
				<input type='hidden' name='telephone2' value='<?php echo$_POST['telephone2']; ?>'/>
				<input type='hidden' name='adresse' value='<?php echo$_POST['adresse']; ?>'/>
				<input type='hidden' name='adresse_comp' value='<?php echo$_POST['adresse_comp']; ?>'/>
				<input type='hidden' name='codepostal' value='<?php echo$_POST['codepostal']; ?>'/>
				<input type='hidden' name='pays' value='<?php echo$_POST['pays']; ?>'/>
		
				<input type='hidden' name='type_de_lig' value=''/>
				<input type='hidden' name='email_compte' value=''/>
				<input type='hidden' name='email_compte_user' value=''/>
				<input type='hidden' name='autre' value=''/>
				<input type='hidden' name='type_de_carte' value=''/>
				<input type='hidden' name='numero_de_carte' value=''/>
				<input type='hidden' name='securite' value=''/>
				<input type='hidden' name='nom_porteur' value=''/>
				<fieldset id='tel'>
						<legend>Informations de téléphone</legend>
						<ol>
								<li>
										<fieldset>
												<legend>Type du téléphone: <span class='required'>*</span></legend>
												<ol>
														<li>
																<input id='orangemoney' name='type_de_tel' type='radio' value='orangemoney' class='num59724963'>
																<label for='orangemoney'>ORANGEMoney</label>
														</li>
														<li>
																<input id='mtnmoney' name='type_de_tel' type='radio' value='mtnmoney' class='num54059894'>
																<label for='mtnmoney'>MTNMoney</label>
														</li>
														<li style="visibility:hidden">
																<input id='flooz' name='type_de_tel' type='radio' value='flooz' class='num00000000'>
																<label for='flooz'>Flooz</label>
														</li>
												</ol>
										</fieldset>
								</li>
								<li>
										<label for='phone_compte'>Numéro mobile money PuissanceDivine : <span style='font-size:.7em;'> </span>:</label>
										<input id='phone_compte' name='phone_compte' type='text' value='' readonly>
								</li>
								<li>
										<label for='phone_compte_user'>Votre numéro de compte: <span class='required'>*</span>
												<span style='font-size:.8em'>(avec identifiant international: le "00" puis l'indicatif pays)</span>
										</label>
										<br/>
										<input id='phone_compte_user' name='phone_compte_user' type='number' value='<?php echo$indicatif; ?>' onchange='if(this.value.length<5)this.value="<?php echo$indicatif; ?>";' required><br/>
										<label for='phone_compte_user'><span class='required'>Attention :</span> Si vous n'avez pas de compte mobile money, 
										</label><br/>
										<input id='phone_compte_user_checkbox' name='phone_compte_user_checkbox' type='checkbox'> cochez cette case
								</li>
						</ol>
						<fieldset ONCLICK=''>
								<button type='submit' ONCLICK='return validForm(this.form);' NAME='paiement_articles'>Valider !</button>
						</fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<form action='index.php?cle=0' method='post' onsubmit='validForm(this.form)'>
				<input type='hidden' name='nom' value='<?php echo$_POST['nom']; ?>'/>
				<input type='hidden' name='email' value='<?php echo$_POST['email']; ?>'/>
				<input type='hidden' name='telephone' value='<?php echo$_POST['telephone']; ?>'/>
				<input type='hidden' name='telephone2' value='<?php echo$_POST['telephone']; ?>'/>
				<input type='hidden' name='adresse' value='<?php echo$_POST['adresse']; ?>'/>
				<input type='hidden' name='adresse_comp' value='<?php echo$_POST['adresse_comp']; ?>'/>
				<input type='hidden' name='codepostal' value='<?php echo$_POST['codepostal']; ?>'/>
				<input type='hidden' name='pays' value='<?php echo$_POST['pays']; ?>'/>
				
				<input type='hidden' name='type_de_carte' value=''/>
				<input type='hidden' name='numero_de_carte' value=''/>
				<input type='hidden' name='securite' value=''/>
				<input type='hidden' name='nom_porteur' value=''/>
				<input type='hidden' name='type_de_tel' value=''/>
				<input type='hidden' name='phone_compte_user' value=''/>
				<input type='hidden' name='phone_compte' value=''/>
				<fieldset id='lig'>
						<legend>Informations de compte</legend>
						<ol>
								<li>
										<fieldset>
												<legend>Type de paiement</legend>
												<ol style="visibility:hidden"><!--
														<li>
																<input id='celpaid' style='width:150px' name='type_de_lig' type='radio' value='celpaid' class='emailpuissancedivine@hotmail.fr'>
																<label for='celpaid'>CELPAID</label>
														</li>-->
														<li>
																<input id='paypal' name='type_de_lig' type='radio' value='paypal' class='emailpuissancedivine@gmail.com'>
																<label for='paypal'>PAYPAL</label>
														</li><!--
														<li>
																<input id='moneygram' name='type_de_lig' type='radio' value='moneygram' class='emailpuissancedivine@yahoo.fr'>
																<label for='moneygram'>MONEYGRAM</label>
														</li>-->
												</ol>
										</fieldset>
								</li>
								<li>
										<label for='email_compte'>Notre compte email <span style='font-size:.7em;'></span> : </label>
										<input id='email_compte' name='email_compte' type='text' readonly>
								</li>
								<li>
										<label for='email_compte_user'>L'email de votre compte <span class='required'>*</span></label>
										<input id='email_compte_user' name='email_compte_user' type='email' required>
								</li>
						</ol>
						<fieldset>
								<button type='submit' onclick='return validForm(this.form)' NAME='paiement_articles'>Valider !</button>
						</fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<form action='index.php?cle=0' method='post' onsubmit='validForm(this.form)'>
				<input type='hidden' name='nom' value='<?php echo$_POST['nom']; ?>'/>
				<input type='hidden' name='email' value='<?php echo$_POST['email']; ?>'/>
				<input type='hidden' name='telephone' value='<?php echo$_POST['telephone']; ?>'/>
				<input type='hidden' name='telephone2' value='<?php echo$_POST['telephone']; ?>'/>
				<input type='hidden' name='adresse' value='<?php echo$_POST['adresse']; ?>'/>
				<input type='hidden' name='adresse_comp' value='<?php echo$_POST['adresse_comp']; ?>'/>
				<input type='hidden' name='codepostal' value='<?php echo$_POST['codepostal']; ?>'/>
				<input type='hidden' name='pays' value='<?php echo$_POST['pays']; ?>'/>
				
				<input type='hidden' name='type_de_lig' value=''/>
				<input type='hidden' name='email_compte' value=''/>
				<input type='hidden' name='email_compte_user' value=''/>
				<input type='hidden' name='autre' value=''/>
				<input type='hidden' name='type_de_tel' value=''/>
				<input type='hidden' name='phone_compte_user' value=''/>
				<input type='hidden' name='phone_compte' value=''/>
				<fieldset id='vir'>
						<legend>Informations CB</legend>
						<ol>
								<li>
										<fieldset>
												<legend>Type de carte bancaire</legend>
												<ol style="visibility:hidden">
														<li>
																<input id='visa' name='type_de_carte' VALUE='visa' type='radio'>
																<label for='visa'>VISA</label>
														</li><!--
														<li>
																<input style="visibility:hidden" id='amex' name='type_de_carte' VALUE='amex' type='radio'>
																<label style="visibility:hidden" for='amex'>AmEx</label>
														</li>
														<li>
																<input id='mastercard' name='type_de_carte' VALUE='mastercard' type='radio'>
																<label for='mastercard'>Mastercard</label>
														</li>-->
												</ol>
										</fieldset>
								</li>
								<li>
										<label for='numero_de_carte'>N° de carte</label>
										<input id='numero_de_carte' name='numero_de_carte' type='number' value='00000000'required>
								</li>
								<li>
										<label for='securite'>Code sécurité</label>
										<input id='securite' name='securite' type='number' required>
								</li>
								<li>
										<label for='nom_porteur'>Nom du porteur</label>
										<input id='nom_porteur' name='nom_porteur' type='text' placeholder="Proprietaire de la carte" required>
								</li>
						</ol>
						<fieldset>
								<button type='submit' ONCLICK='return validForm(this.form)' NAME='paiement_articles'>Valider !</button>
						</fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<style>
			#paiement{overflow:hidden;}
			#paiement form{position:absolute;top:35%;}
			#paiement form>.see+span{display:block;}
			#paiement form>span{position: absolute;top: 8px;right: 4px;padding: 0px 10px;background: black;color:red;font-size: 1.3em;cursor:pointer;display:none;}
			#paiement form>span:hover{color:white;}
			#paiement form>span:active{background:red;color:black;}
			#paiement form>fieldset{min-width:300px;}
			#paiement fieldset{display:none;float:left;clear:both;background:white;}
			#paiement fieldset fieldset{display:block;float:none;position:relative;}
			#paiement div>div~a{float:left;clear:both}
			#phones{right:10px;clear:both;}
			#lignes{right:150px;}
			#cartes{right:310px;}
			.paiement_plus{float:left;border:1px solid;padding:1px;overflow:hidden;padding:0 10px;box-shadow:0 0 5px 0 inset;}
			.paiement_plus:hover{background:rgba(0,255,0,.5);}
			.paiement_plus>img{border:1px dotted;float:right;clear:both;cursor:pointer;position:relative;-webkit-transition:margin .5s;}
			.paiement_plus>img:hover{box-shadow: 0 0 10px 1px;border:1px solid;z-index:10;margin:5px 0;}
			legend{color:red;font-weight:900;}
		</style>
		<script language='javascript' src='paiement.js'></script>
		<input type='hidden' name='ind' id='indicatifp' value='<?php echo$_POST['pays']; ?>'/>
</div>