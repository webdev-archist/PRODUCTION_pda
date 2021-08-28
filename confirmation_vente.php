
<script language='javascript'>
		// alert(document.cookie);
		
		
		var tempt='';
		var a=document.cookie;
		var o=document.cookie;o=o.split('panier[');
		var date=new Date();
		date.setTime(date.getTime()-(1*24*3600*1000));
		var expire=";expires="+date.toGMTString();
		
		for(var i=0;i<o.length;i++){
		
				document.cookie="panier["+o[i].substring(0,o[i].indexOf(']'))+"]=ok"+expire+"; path=/";
				tempt+="panier["+o[i].substring(0,o[i].indexOf(']'))+"]=ok"+expire+"; path=/\n";
		}
		// alert("\n\n\n\n"+tempt);
</script>
<?php //if(isset($_POST['phone_compte_user_checkbox']))echo$_POST['phone_compte_user_checkbox'].$_POST['pays']; 
echo"aaaaaaaaaaaaa";
?>
<div>
		<?php if(isset($_POST['phone_compte_user_checkbox']))if($_POST['phone_compte_user_checkbox']=='on'){ ?><div class='nb required'> Vous devez nous contacter au <span style='font-weight:900;font-size:1.1em;'><?php echo $_POST['phone_compte']; ?></span> avant d'effectué le transfert d'argent mobile money</div><?php } ?>
		<div class='nb'>Votre commande à bien été pris en compte, vous avez reçu un email de confirmation à: <b><?php echo$_POST['email']; ?></b></div>
		<div class='nb'>Vous y trouverez la liste détaillée de votre commande d'un montant de: <b><span class='prix redd'><?php echo money($_SESSION['PDmontant']); ?></span></b></div>
		<div class='nb'>Votre commande sera traitée dans les <b>72H</b> dès reception de votre paiement</div>
		<div class='nb'>Votre commande, faute de reception sur nos compte du montant dû, <b>sera annulée le <?php echo$expiration; ?></b></div>
</div>
<div class='content-wrapper clearfix'>
			
			<div class='booking-main-wrapper'>
				
				<div class='booking-main' style='border-left:solid #40A5C3;background:wheat;padding: 20px 50px 20px;'>
					
					<h4 class='title-style4'><u>Pour terminer votre commande<span class='title-block'></span></u></h4>

					<p>
							Nous avons le plaisir de vous annoncer que votre commande est enregistrée.<br>
							Toutes les informations concernant votre commande viennent de vous être envoyées à l'adresse email :<br><b><?php echo$_POST['email']; ?></b><br/>
							Vous pouvez, soit payer maintenant, soit plus tard (renseignements dans l'email envoyé à votre adresse)<br/>
							Enfin, pour valider votre commande <b><u>maintenant</u></b>, voici l'opération à effectuer:<br>
							<br/>
							
							<?php if($_POST['type_de_tel']!=''){ if($_POST['type_de_tel']=='orangemoney')$tel='Orange Money'; if($_POST['type_de_tel']=='mtnmoney')$tel='MTN Money'; if($_POST['type_de_tel']=='floozmoney')$tel='Flooz'; ?>
							<div id='to_val'>Transfert MobileMoney <u><?php echo$tel; ?></u> sur le compte Puissance Divine : <span class='redd'><?php echo$_POST['phone_compte']; ?> </span></div>
							
							<?php }elseif($_POST['type_de_carte']!=''){ ?>
							<div id='to_val'>Virement bancaire vers n°compte : <span class='redd'>XXX_xx_XXX</span></div>
							
							<?php }elseif($_POST['type_de_lig']!=''){ ?>
							<div id='to_val'>Paiement en ligne <span class='redd'><?php echo$_POST['email_compte']; ?></span></div> <?php } ?>
							
							<br/>
					</p>
					<ul class='contact_details_list contact_details_list_dark'>
					<?php
							if($_POST['type_de_carte']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telephone2']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telephone2']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><strong>Votre paiement sera effectué par carte:</strong> <span class='redd'><?php echo$_POST['type_de_carte']; ?></span></li>
										<li class='phone_listt phone_list'><strong>Le nom du titulaire de la carte:</strong> <span class='redd'><?php echo$_POST['nom_porteur']; ?></span></li>
										<li style='list-style-type:none:'><hr></li>
										<li class='phone_listt phone_list'><strong><span class='redd'>Notre RIB</span>:</strong> <?php   ?></li>
					<?php 	}elseif($_POST['type_de_lig']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telephone2']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telephone2']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><strong>Votre compte email de transfère:</strong> <span class='redd'><?php echo$_POST['email_compte_user']; ?></span></li>
										<li style='list-style-type:none:'><hr></li>
										<li class='phone_listt phone_list'><strong><span class='redd'>Notre compte email de transfère</span>:</strong> <?php echo$_POST['email_compte']; ?></li>
					<?php 	}elseif($_POST['type_de_tel']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telephone2']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telephone2']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><strong>Votre numéro de transfert:</strong> <span class='redd'><?php if(isset($_POST['phone_compte_user_checkbox'])){if($_POST['phone_compte_user_checkbox']=='on')echo'nous appeler pour le paiement';}else echo$_POST['phone_compte_user']; ?></span></li>
										<li style='list-style-type:none:'><hr></li>
										<li class='phone_listt phone_list'><strong>Compte <?php echo$tel; ?> de Puissance Divine :</strong> <span class='redd'><?php echo$_POST['phone_compte']; ?></span></li>
					<?php 	} ?>
								<li style='list-style-type:none:'><hr></li>
								<li class='phone_list greeen'><strong>Notre numéro de contact:</strong> 00225 09 36 06 72</li>
								<li class='email_listt email_list greeen'><strong>Notre adresse email:</strong> puissancedamour@yahoo.fr</li>
								<!--<li class='fax_list greeen'><strong>Notre Fax:</strong> +44 98765 43210</li>-->
						</ul>	
					
					
				</div>
				
			</div>
			
		</div>
		<?php //session_destroy(); ?>
		<?php 
				if(isset($_SESSION['pdapromo']))
						if($result=$mysqli->query("select * from promotions where id='".$_SESSION['pdapromo']['id']."';"))if(mysql_num_rows($result)==0)$mysqli->query("update promotions set activ='0'  where id='".$_SESSION['promo']['id']."';");
				unset($_SESSION['pdapromo']);
		?>