<?php 	
		// print_r($_POST);
		if(!isset($_POST['phone_compte_user'])){
				echo"Votre réservation $comp est bien effective, vous pouvez régler cette réservation à n'importe quel moment au 09 - 36 - 06 - 72.<br/>Un email vous a été envoyé à : ".$_POST['email']."";
		}else{
?>
<div>
		<?php if(isset($_POST['phone_compte_user_checkbox']))if($_POST['phone_compte_user_checkbox']=='on'){ ?><div class='nb required'> Vous devez nous contacter au <span style='font-weight:900;font-size:1.1em;'><?php echo$_POST['phone_compte']; ?></span> avant d'effectuer le transfère d'argent mobile money</div><?php } ?>
		<div class='nb'>Votre réservation à bien été prise en compte, vous avez reçu un email de confirmation à: <b><?php echo$_POST['email']; ?></b></div>
		<div class='nb'>Vous y trouverez la liste détaillée de votre réservation d'un montant de: <b><span class='prix redd'><?php echo money($_POST['montant']); ?></span></b></div>
		<!--<div class='nb'>Votre commande, faute de reception sur notre compte du montant dû, sera annulée le <?php //echo date(time()+3*3600); ?></div>-->
		<div class='nb'>Votre réservation sera traitée dans les <b>72H</b> à partir de maintenant</div>
		<div class='nb'>Votre réservation, faute de reception sur notre compte du montant dû, <b>sera annulée le <?php echo$expiration; ?></b></div>
</div>
<div class='content-wrapper clearfix'>
			
			<div class='booking-main-wrapper'>
				
				<div class='booking-main' style='border-left:solid #40A5C3;background:wheat;padding: 20px 50px 20px;'>
					
					<h4 class='title-style4'><u>Pour terminer votre réservation<span class='title-block'></span></u></h4>

					<p>
							Nous avons le plaisir de vous annoncer que votre réservation est enregistrée.<br>
							Toutes les informations concernant votre réservation viennent de vous être envoyées à:<br><?php echo$_POST['email']; ?><br/>
							Enfin, pour valider votre réservation, voici l'opération à effectuer:<br>
							<?php if($_POST['type_de_tel']!=''){ if($_POST['type_de_tel']=='orangemoney')$tel='Orange Money'; if($_POST['type_de_tel']=='mtnmoney')$tel='MTN Money'; if($_POST['type_de_tel']=='floozmoney')$tel='Flooz'; ?>
									<div id='to_val'>Transfert MobileMoney <?php echo$tel; ?> sur le compte Puissance Divine : <span class='redd'><?php echo$_POST['phone_compte']; ?> </span></div>
							<?php }elseif($_POST['type_de_carte']!=''){ ?><div id='to_val'>Virement bancaire vers n°compte : <span class='redd'>XXX_xx_XXX</span></div>
							<?php }elseif($_POST['type_de_lig']!=''){ ?><div id='to_val'>Paiement en ligne <span class='redd'><?php echo$_POST['email_compte']; ?></span></div> <?php } ?>
							<br/>
					</p>
					<ul class='contact_details_list contact_details_list_dark'>
					<?php
							if($_POST['type_de_carte']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telci']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telci']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><strong>Votre paiement sera effectué par carte:</strong> <span class='redd'><?php echo$_POST['type_de_carte']; ?></span></li>
										<li class='phone_listt phone_list'><strong>Le nom du titulaire de la carte:</strong> <span class='redd'><?php echo$_POST['nomp']; ?></span></li>
										<li class=''><hr></li>
										<li class='phone_listt phone_list'><strong><span class='redd'>Notre RIB</span>:</strong> <?php   ?></li>
					<?php 	}elseif($_POST['type_de_lig']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telci']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telci']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><strong>Votre compte email de transfert:</strong> <span class='redd'><?php echo$_POST['email_compte_user']; ?></span></li>
										<li style='list-style-type:none:'><hr></li>
										<li class='phone_listt phone_list redd'><strong>Notre compte email de transfert:</strong> <span  class='redd'><?php echo$_POST['email_compte']; ?></span></li>
					<?php 	}elseif($_POST['type_de_tel']!=''){ ?>
										<li class='phone_list'><strong>Votre numéro de contact:</strong> <?php echo$_POST['telephone']; ?></li>
										<?php if($_POST['telci']!=''){ ?><li class='phone_list'><strong>Votre numéro de contact secondaire:</strong> <?php echo$_POST['telci']; ?></li><?php } ?>
										<li class='phone_listt phone_list'><?php if($_POST['phone_compte_user']!=00){ ?><strong class='redd'>Votre numéro de transfert:</strong> <span class='redd'><?php echo$_POST['phone_compte_user']; ?></span><?php }else{ ?><strong class='redd'>Vous n'avez pas de compte personnel mobile money:</strong> Veuillez nous appeler juste avant de faire le paiement ! ! !<?php } ?></li>
										<li style='list-style-type:none:'><hr></li>
										<li class='phone_listt phone_list'><strong class='redd'>Numéro de transfert Puissance Divine :</strong><span class='redd'> <?php echo$_POST['phone_compte']; ?></span></li>
					<?php 	} ?>
								<li style='list-style-type:none:'><hr></li>
								<li class='phone_list greeen'><strong>Numéro de contact Puissance Divine:</strong> 00225 09 36 06 72</li>
								<li class='email_listt email_list greeen'><strong>Notre adresse email:</strong> puissancedamour@yahoo.fr</li>
								<!--<li class='fax_list greeen'><strong>Notre Fax:</strong> +44 98765 43210</li>-->
						</ul>	
					
				</div>
				
			</div>
		</div>
<?php } ?>

		<?php 
				if(isset($_SESSION['pdapromo'])){
						if($result=$mysqli->query("select * from promo where id='".$_SESSION['pdapromo']['id']."';"))if(mysql_num_rows($result)==0)$mysqli->query("update promotions set activ='0'  where id='".$_SESSION['pdapromo']['id']."';");
						unset($_SESSION['pdapromo']);
				}
		?>