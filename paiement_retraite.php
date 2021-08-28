				<?php $indicatif='00';
// switch($_POST['pays']){case'cotedivoire':$indicatif.='225';$phoneLen=13;break;case'guinee':$indicatif.='224';$phoneLen=13;break;case'guineeb':$indicatif.='245';$phoneLen=13;break;case'burkina':$indicatif.='226';$phoneLen=13;break;case'ghana':$indicatif.='233';$phoneLen=13;break;case'mali':$indicatif.='223';$phoneLen=13;break;case'nigeria':$indicatif.='234';$phoneLen=13;break;}
	

		?>
<div id='paiement'>	<!--	<span onclick="paiement.removeAttribute('class');" class='close'> X </span>-->
		<h3><u>Montant à payer</u>: <span id='montant' class='required'></span></h3>
		<div>
				<div>Choisissez maintenant votre mode de paiement parmis les choix ci-dessous</div>
				<a href='#tel'>Payez par les services téléphonique</a>
				<!--<a href='#lig'>Payez par un moyen de paiement internet (paypal, moneygram...)</a>
				<a href='#vir'>Payez par virement bancaire</a>-->
				<div id='phones' class='paiement_plus'>
						<img width='130px' src='images/orangemoney.jpg' alt='La solution de paiement M-pesa Orange' title="ORANGEMoney, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/mtnmoney.jpg' alt='La solution de paiement M-pesa MTN' title="MTNMoney, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img style="visibility:hidden" width='130px' src='images/flooz.jpg' alt='La solution de paiement M-pesa Flooz' title="Flooz, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
				<div id='lignes' class='paiement_plus' style="visibility:hidden">
						<img width='130px' src='images/celpaid.jpg' width='150px' alt='La solution de paiement M-pesa Orange' title="celpaid, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/paypal.jpg' alt='La solution de paiement M-pesa Orange' title="Paypal, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/moneygram.jpg' alt='La solution de paiement M-pesa MTN' title="Moneygram, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
				<div id='cartes' class='paiement_plus' style="visibility:hidden">
						<img width='130px' src='images/visa.jpg' alt='La solution de paiement M-pesa Orange' title="visa, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/mastercard.jpg' alt='La solution de paiement M-pesa MTN' title="mastercard, un moyen de paiement sûr et sécurisé" height='75px'/>
						<img width='130px' src='images/amex.jpg' alt='La solution de paiement M-pesa Flooz' title="amex, un moyen de paiement sûr et sécurisé" height='75px'/>
				</div>
		</div>
		<form action='<?php echo$_SERVER['PHP_SELF']; ?>' method='post'>
						<input type='hidden' name='type_de_lig' value='' />
						<input type='hidden' name='email_compte' value='' />
						<input type='hidden' name='email_compte_user' value='' />
						<input type='hidden' name='autre' value='' />
						<input type='hidden' name='type_de_carte' value='' />
						<input type='hidden' name='numero' value='' />
						<input type='hidden' name='secu' value='' />
						<input type='hidden' name='nomp' value='' />
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
										<label for='phone_compte'>Notre numéro de compte<span style='font-size:.7em;'> </span>:</label>
										<input id='phone_compte' name='phone_compte' type='text' value='' readonly>
								</li>
								<li>
										<label for='phone_compte_user'>Votre numéro de compte: <span class='required'>*</span>
												<span style='font-size:.8em'>(avec identifiant international: le "00" puis l'indicatif pays)</span>
										</label>
										<br/>
										<input id='phone_compte_user' name='phone_compte_user' type='number' title="Entrez votre numéro de téléphone mobil money svp" value='<?php echo$indicatif; ?>' required><br/>
										<label for='phone_compte_user_checkbox'><span class='required'>Attention :</span> Si vous n'avez pas de compte mobil money,
										</label><br/>
										<input id='phone_compte_user_checkbox' name='phone_compte_user_checkbox' title="Cochez cette case si vous effectuerez le paiement via un point relais mobil money" type='checkbox'> cochez cette case
								</li>
						</ol>
						<fieldset>
								<button type='button' onclick='retraite_paiement(this.form);'>Valider !</button>
						</fieldset>
						<fieldset><legend>Entrez un code promotionnel</legend><input type='text' placeholder='Code promotionnel' name='promo'/><input type='button' value='Ok'/></fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<form action='<?php echo$_SERVER['PHP_SELF']; ?>' method='post'>
				<input type='hidden' name='type_de_carte' value=''/>
				<input type='hidden' name='numero' value=''/>
				<input type='hidden' name='secu' value=''/>
				<input type='hidden' name='nomp' value=''/>
				<input type='hidden' name='type_de_tel' value=''/>
				<input type='hidden' name='phone_compte_user' value=''/>
				<input type='hidden' name='phone_compte' value=''/>
				<fieldset id='lig'>
						<legend>Informations de compte</legend>
						<ol>
								<li>
										<fieldset>
												<legend>Type de paiement</legend>
												<ol style="visibility:hidden">
														<li>
																<input id='celpaid' name='type_de_lig' type='radio' value='celpaid' class='emailpuissancedivine@hotmail.fr'>
																<label for='celpaid'>CELPAID</label>
														</li>
														<li>
																<input id='paypal' name='type_de_lig' type='radio' value='paypal' class='emailpuissancedivine@gmail.com'>
																<label for='paypal'>PAYPAL</label>
														</li>
														<li>
																<input id='moneygram' name='type_de_lig' type='radio' value='moneygram' class='emailpuissancedivine@yahoo.fr'>
																<label for='moneygram'>MONEYGRAM</label>
														</li>
												</ol>
										</fieldset>
								</li>
								<li>
										<label for='email_compte'>Notre compte email <span style='font-size:.7em;'></span> : </label>
										<input id='email_compte' name='email_compte' type='text' readonly>
								</li>
								<li>
										<label for='email_compte_user'>L'email de votre compte de paiement <span class='required'>*</span> : </label>
										<input id='email_compte_user' name='email_compte_user' type='email' required>
								</li>
						</ol>
						<fieldset style="visibility:hidden">
								<button type='button' onclick='retraite_paiement(this.form);'>Valider !</button>
						</fieldset>
						<fieldset><legend>Entrez un code promotionnel</legend><input type='text' placeholder='Code promotionnel' name='promo'/><input type='button' value='Ok'/></fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<form action='<?php echo$_SERVER['PHP_SELF']; ?>' method='post'>
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
														</li>
														<li>
																<input id='amex' name='type_de_carte' VALUE='amex' type='radio'>
																<label for='amex'>AmEx</label>
														</li>
														<li>
																<input id='mastercard' name='type_de_carte' VALUE='mastercard' type='radio'>
																<label for='mastercard'>Mastercard</label>
														</li>
												</ol>
										</fieldset>
								</li>
								<li>
										<label for='numero'>N° de carte <span class='required'></span> : </label>
										<input id='numero' name='numero' type='number' value='000000000' required>
								</li>
								<li>
										<label for='secu'>Code sécurité <span class='required'>*</span> : </label>
										<input id='secu' name='secu' type='number' required>
								</li>
								<li>
										<label for='nomp'>Nom du porteur <span class='required'>*</span> : </label>
										<input id='nomp' name='nomp' type='text' placeholder="Proprietaire de la carte" required>
								</li>
						</ol>
						<fieldset style="visibility:hidden">
								<button type='button' onclick='retraite_paiement(this.form);'>Valider !</button>
						</fieldset>
						<fieldset><legend>Entrez un code promotionnel</legend><input type='text' placeholder='Code promotionnel' name='promo'/><input type='BUTTON' value='Ok'/></fieldset>
				</fieldset>
				<span onclick="preSib(this).removeAttribute('class');">x</span>
		</form>
		<style>
			#paiement{overflow:hidden;}
			#paiement form{position:relative;}
			#paiement form>.see+span{display:block;z-index:1000000000;}
			#paiement form>span{position: absolute;top: -30px;right: 0px;padding: 0px 10px;background: black;color:red;font-size: 1.3em;cursor:pointer;display:none;}
			#paiement form>span:hover{color:white;}
			#paiement form>span:active{background:red;color:black;}
			#paiement form>fieldset{width:100%;position:absolute;padding-bottom:100px;top:-100px;height:500px;}
			#paiement form>fieldset>ol{padding-left:20px;}
			#paiement fieldset{display:none;float:left;clear:both;background:white;}
			#paiement fieldset fieldset{display:block;float:none;position:relative;}
			#paiement div>div~a{float:left;clear:both}
			#phones{right:10px;}
			#lignes{right:150px;}
			#cartes{right:310px;}
			.paiement_plus{float:left;border:1px solid;padding:1px;overflow:hidden;padding:0 10px;box-shadow:0 0 5px 0 inset;}
			.paiement_plus:hover{background:rgba(0,255,0,.5);}
			.paiement_plus>img{border:1px dotted;float:right;clear:both;cursor:pointer;position:relative;-webkit-transition:margin .5s;}
			.paiement_plus>img:hover{box-shadow: 0 0 10px 1px;border:1px solid;z-index:10;margin:5px 0;}
			legend{color:red;font-weight:900;}
		</style>
		<script language='javascript' src='paiement.js'></script>
		<input type='hidden' name='ind' id='indicatifp' value='<?php if(isset($_POST['pays']))echo$_POST['pays']; ?>'/>
</div>