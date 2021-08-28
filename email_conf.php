<?php
	// if(isset($_POST['retraite_validation'])||isset($_POST['paiement_articles'])){
		// ini_set('SMTP','smtp.free.fr');
		// ini_set('sendmail_from', 'exemple@adeducation.com');
		ini_set('sendmail_from', 'puissancedamour@gmail.com');
		// echo$_POST['email'];
		
		if(!isset($_POST['email'])){$mail = $_POST['puissancedamour@yahoo.fr'];
				$message_html='';
				$message_txt='';}
		else {
						// echo"lkjlkjioihyvbbhuvbiuhbuhybiub";
		
				$mail = $_POST['email']; // Déclaration de l'adresse de destination.
				
				if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
				{
					$passage_ligne = "\r\n";
				}
				else
				{
					$passage_ligne = "\n";
				}
				//=====Déclaration des messages au format texte et au format HTML.
						// $message_txt = "confirmation_retraite.php";
									if($_POST['type_de_tel']!=''){ if($_POST['type_de_tel']=='orangemoney')$tel='Orange Money'; if($_POST['type_de_tel']=='mtnmoney')$tel='MTN Money'; if($_POST['type_de_tel']=='floozmoney')$tel='Flooz'; 
									$zz="<div id='to_val'>Transfert MobileMoney <u> $tel; </u> sur le compte Puissance Divine : <span class='redd'> ".$_POST['phone_compte']."  </span></div>";
									
									}elseif($_POST['type_de_carte']!=''){ 
									$zz="<div id='to_val'>Virement bancaire vers n°compte : <span class='redd'>XXX_xx_XXX</span></div>";
									
									}elseif($_POST['type_de_lig']!=''){
									$zz="<div id='to_val'>Paiement en ligne <span class='redd'> ".$_POST['email_compte']." </span></div> ";
									}
						// echo"lkjlkjioihyvbbhuvbiuhbuhybiub";
						$message_txt="
							<p>
									Nous avons le plaisir de vous annoncer que votre $comp est enregistrée.<br>
									Payer maintenant afin de valider votre $comp. Voici l'opération à effectuer:<br>
									<br/>
									
									$zz
									
									<br/>
							</p>
							<div class='nb'>Vous trouverez ci-après la liste détaillée de votre $comp d'un montant de: <b><span class='prix redd'>".money($_SESSION['PDmontant'])."</span></b></div>
							<div class='nb'>Votre $comp sera traitée dans les <b>72H</b> dès reception de votre paiement</div>
							<div class='nb'>Votre $comp, faute de reception sur nos compte du montant dû, <b>sera annulée le $expiration </b> (soit une semaine ouverte après la présente commande)</div>
							<ul>";
						// echo"lkjlkjioihyvbbhuvbiuhbuhybiub";
							
							
							
								if($_POST['type_de_carte']!=''){
												$message_txt.="<li class='phone_list'><strong>Votre numéro de contact:</strong>  ".$_POST['telephone']." </li>";
												 if($_POST['telephone2']!=''){ $message_txt.="<li class='phone_list'><strong>Votre numéro de contact secondaire:</strong>  ".$_POST['telephone2']." </li>"; } 
												$message_txt.="<li class='phone_listt phone_list'><strong>Votre paiement sera effectué par carte:</strong> <span class='redd'> ".$_POST['type_de_carte']." </span></li>";
												$message_txt.="<li class='phone_listt phone_list'><strong>Le nom du titulaire de la carte:</strong> <span class='redd'> ".$_POST['nom_porteur']." </span></li>
												<li style='list-style-type:none:'><hr/></li>
												<li class='phone_listt phone_list'><strong><span class='redd'>Notre RIB</span>:</strong>    </li>";
								}elseif($_POST['type_de_lig']!=''){
												$message_txt.="<li class='phone_list'><strong>Votre numéro de contact:</strong>  ".$_POST['telephone']." </li>";
												 if($_POST['telephone2']!=''){ $message_txt.="<li class='phone_list'><strong>Votre numéro de contact secondaire:</strong>  ".$_POST['telephone2']." </li>"; } 
												$message_txt.="<li class='phone_listt phone_list'><strong>Votre compte email de transfère:</strong> <span class='redd'> ".$_POST['email_compte_user']." </span></li>
												<li style='list-style-type:none:'><hr/></li>
												<li class='phone_listt phone_list'><strong><span class='redd'>Notre compte email de transfère</span>:</strong>  ".$_POST['email_compte']." </li>";
								}elseif($_POST['type_de_tel']!=''){
												if(isset($_POST['phone_compte_user_checkbox'])){if($_POST['phone_compte_user_checkbox']=='on')$zz='nous appeler pour le paiement';}else $zz=$_POST['phone_compte_user'];
												$message_txt.="<li class='phone_list'><strong>Votre numéro de contact:</strong>  ".$_POST['telephone']." </li>";
												if($_POST['telephone2']!=''){ $message_txt.="<li class='phone_list'><strong>Votre numéro de contact secondaire:</strong>  ".$_POST['telephone2']." </li>"; } 
												$message_txt.="<li class='phone_listt phone_list'><strong>Votre numéro de transfert:</strong> <span class='redd'> $zz </span></li>
												<li style='list-style-type:none:'><hr/></li>
												<li class='phone_listt phone_list'><strong>Compte  echo$tel;  de Puissance Divine :</strong> <span class='redd'> ".$_POST['phone_compte']." </span></li>";
								} 
										$message_txt.="<li style='list-style-type:none:'><hr/></li>
										<li class='phone_list greeen'><strong>Notre numéro de contact:</strong> 00225 09 36 06 72</li>
										<li class='email_listt email_list greeen'><strong>Notre adresse email:</strong> puissancedamour@yahoo.fr</li>
										<!--<li class='fax_list greeen'><strong>Notre Fax:</strong> +44 98765 43210</li>-->
								</ul>
								<hr/>";
						// echo"lkjlkjioihyvbbhuvbiuhbuhybiub";
								// foreach($_COOKIE['panier'] as $k=>$v)
										// if(strpos($k,'|')===false)
												// $ttmp.=$k.',';
										// else	$tmpbis[]="select * from options_article inner join articles on img = img_article where id=".substr($k,1).";";
								// if(strlen($ttmp)!=0)$ttmp=substr($ttmp,0,-1);
								// $rqt="select * from articles where id_produits in ($ttmp);";
								// if($ttmp!='')$tmpbis[]=$rqt;
								// foreach($tmpbis as $vv)
										// if($result=$mysqli->query($vv)) {
												// while($v=$result->fetch_array()){
														// $message_txt.=$v[$_SESSION['langue']]."<br/>KJH";
												// }
										// }else echo$vv."hgvb";
								// echo$code." ";
				if(isset($_POST['paiement_articles'])){
								$lk=array();
								if($result=$mysqli->query("select * from liste where id_commande='$code';")){
										while($v=$result->fetch_array())
												$lk[]=$v;
										// echo"select * from liste where id_commande='$code';";
								}
								else	echo"select * from liste where id_commande='$code';";
								echo count($lk);
								// print_r($lk);
								foreach($lk as $k=>$vv){
										if(strpos($vv['id_article'],'|')!==false)	$rqt="select * from options_article inner join articles on img = img_article where id='".substr($vv['id_article'],1)."';";
										else 										$rqt="select * from articles where id_produits='".$vv['id_article']."';";
										// echo$rqt."<br/>";
										if($result=$mysqli->query($rqt)){
														if($v=$result->fetch_array())
																// $message_txt.="<u>".$vv['id_article']." $code</u> ".$vv['quantity']." ".$v['nom']." : ".$v[$_SESSION['langue']];
																if(strpos($vv['id_article'],'|')!==false)
																		$message_txt.="<div style='border:1px dotted red;text-align:center;padding:5px 0;'><u><b>".$vv['quantity']."</b></u> ".$v['nom']." : ".$v[$_SESSION['langue']]." à ".money($v['opt_prix'])."</div>";
																else 
																		$message_txt.="<div style='border:1px dotted red;text-align:center;padding:5px 0;'><u><b>".$vv['quantity']."</b></u> ".$v['nom']." : ".$v[$_SESSION['langue']]." à ".money($v['prix'])."</div>";
												}else echo"select * from articles where id_produits='".$vv['id_article']."';";
										// echo"<br/>fini<br/>";
								}
				}
				if(isset($_POST['retraite_validation'])){
						// $message_txt = include("confirmation_vente.php");
				}
		}
		// $bond = uniqid('np');
		// $message_html = "MIME-Version: 1.0\nFrom:".$_POST['nom']."<".$_POST['email'].">\nContent-Type: multipart/alternative;boundary=$bond\n";
		$message_html = "<html>
								<head>
								</head>
								<body>
										$message_txt
								</body>
						 </html>";
		
		//==========
		 
		//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========
		 
		//=====Définition du sujet.
		$sujet = "Confirmation de votre $comp chez librairie-puissance-divine.ci";
		//=========
		 
		//=====Création du header de l'e-mail.
		$header = "MIME-Version: 1.0".$passage_ligne;
		$header.= 'Content-Type: text/html; charset="UTF-8";'.$passage_ligne;
		// $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
        $header.= 'Content-Transfer-Encoding: 7bit'.$passage_ligne;
        $header.= 'Date: ' . date('r', $_SERVER['REQUEST_TIME']).$passage_ligne;
        // $header.= 'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>'.$passage_ligne;
		$header.= "From: \"".$_POST['nom']." ".$_POST['prenom']."\"<".$_POST['email'].">".$passage_ligne;
		$header.= "Reply-to: \"WeaponsB\" <".$_POST['email'].">".$passage_ligne;
        $header.= "Return-Path: <".$_POST['email'].">".$passage_ligne;
        $header.= 'X-Mailer: PHP v' . phpversion().$passage_ligne;
        $header.= 'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'].$passage_ligne;
		//==========
		 
		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
		 
		//=====Envoi de l'e-mail.
		mail($mail,$sujet,$message,$header);
		mail("hi.cyril@gmail.com","Rapport: ".$sujet,$message,$header);
		mail("puissancedamour@yahoo.fr","Rapport: ".$sujet,$message,$header);
		mail("puissancedamour@gmail.com","Rapport: ".$sujet,$message,$header);
		// echo$message;
		// if(mail("puissancedamour@gmail.com","Rapport: ".$sujet,$message,$header))echo$sujet."<br/><br/><br/>".$header;
		// else echo$sujet."<br/><br/><br/>".$header;

// }else echo "Vous n'avez pas le droit d'envoyer cette email";
?>
<!--

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-2" />
	<script type="text/javascript">
	var formulaire=new Array('Votre nom','Votre prénom','Le nom de votre entreprise','exemple@adeducation.fr','06 79 11 19 48');
	function verif(x){		
		var cpt='';
		if(x.formation.value=='---'){cpt+='Veuillez choisir avant tout une formation\n\n\n';x.formation.previousSibling.src='non.png';}else x.formation.previousSibling.src='ok.png';
		if(x.nom.value==''||x.nom.value=='Votre nom'){cpt+='Vous devez entrer votre nom\n';x.nom.previousSibling.src='non.png';}else x.nom.previousSibling.src='ok.png';
		if(x.prenom.value==''||x.prenom.value=='Votre prénom'){cpt+='Vous devez entrer votre prénom\n';x.prenom.previousSibling.src='non.png';}else x.prenom.previousSibling.src='ok.png';
		if(x.entreprise.value==''||x.entreprise.value=='ADeducation'){cpt+='Vous devez entrer un nom d\'entreprise\n';x.entreprise.previousSibling.src='non.png';}else x.entreprise.previousSibling.src='ok.png';
		if(x.email.value!=x.email.value){cpt+='Veuillez confirmer une adresse email identique';x.email.previousSibling.src='non.png';}else if(x.email.value==''||x.email.value=='adavid@educationenergie.com'){cpt+='Vous devez entrer votre email\n';x.email.previousSibling.src='non.png';}
		else if(x.email.value.indexOf('@')==-1||x.email.value.indexOf('.')==-1){cpt+='Vous devez entrer un email valide\n';x.email.previousSibling.src='non.png';}else x.email.previousSibling.src='ok.png';
		if(x.tel.value==''||x.tel.value=='06 79 11 19 48'){cpt+='Vous devez entrer votre numéro de téléphone\n';x.tel.previousSibling.src='non.png';}else if(isNaN(x.tel.value)){cpt+='Un noméro de téléphone est composé uniquement de chiffre\n';x.tel.previousSibling.src='non.png';}else if(x.tel.value.substring(0,1)!='+' && x.tel.value.replace(/ /g,'').length!=10){cpt+='Vous devez entrer un numéro de téléphone de ce type: \n06 99 01 01 01\n';x.tel.previousSibling.src='non.png';} else if(x.tel.value.substring(0,1)=='+' && (x.tel.value.replace(/ /g,'').length<12 || x.tel.value.replace(/ /g,'').length>13)){cpt+='Vous devez entrer un numéro de téléphone de ce type: \n+33 6 99 01 01 01\n';x.tel.previousSibling.src='non.png';}else x.tel.previousSibling.src='ok.png';
		if(cpt!=''){
			for(var i=0;i<x.getElementsByTagName('img').length;i++)
				x.getElementsByTagName('img')[i].style.display='block';
			alert(cpt);
			return false;
		}else return true;
	}
	
	
	function init(){temp=new Array();contain.param=''
			
		for(var i=0;i<contain.getElementsByTagName('input').length-1;i++){
			contain.getElementsByTagName('input')[i].param=i;
			contain.getElementsByTagName('input')[i].onmousedown=function(){
				if(!contain.param==''){
					// alert(contain.getElementsByTagName('input')[this.parentNode.parentNode.param.substring(this.parentNode.parentNode.param.length-1)].value);
					if(contain.getElementsByTagName('input')[contain.param.substring(contain.param.length-1)].value==''){
						contain.getElementsByTagName('input')[contain.param.substring(contain.param.length-1)].value=contain.param.substring(0,contain.param.length-2);
						contain.getElementsByTagName('input')[contain.param.substring(contain.param.length-1)].style.opacity=.7;}
					else
						contain.getElementsByTagName('input')[contain.param.substring(contain.param.length-1)].style.fontWeight=900;
				}
				contain.param=this.value+' '+this.param;
			};
			contain.getElementsByTagName('input')[i].onmouseup=function(){
				if(this.style.fontWeight!=900)
					this.value='';this.style.opacity=1;
			};
			contain.getElementsByTagName('input')[i].ondblclick=function(){
					this.value='';this.style.opacity=1;
			};
			}
	}
	</script>
	<script src="./prototype.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
	<title>Formations: formulaire d'inscription</title>
	<style>
	body{background:url(nuages1.jpg);}
h2{background:silver;color:gray;padding:50px 200px;font-family:'book antiqua';font-weight:900;
text-shadow:0 0 1px black;}
	h1{color:black;margin-top:100px;}
	h1,body>p:last-child{text-align:center;}
		nav{position:relative;width:600px;margin:auto;background:#FFF;padding:50px 100px;
		box-shadow:0 0 10px 5px black inset; }
		nav>p:hover{background:#FFC;}
		nav>p{font-family:'book antica';font-size:1.4em;color:#00F;padding:3px 7px;height:40px;}
		nav>p>input,nav>p>select,nav>p>textarea{opacity:.7;font-family:'book antica';font-size:.8em;position:absolute;right:50px;width:300px;height:30px;padding:5px;border-radius:4px;}
		nav>p>input:hover,nav>p>select:hover,nav>p>textarea:hover{border:1px solid blue;background:#4FE;}
		input[type='submit']{float:right;font-size:1.6em;padding:10px;position:relative;bottom:50px;width:200px;cursor:pointer;}
		p>img{width:50px;height:50px;float:right;position:relative;left:100px;bottom:10px;display:none;}
		.obligatoire{color:orange;}
		hr{position:relative;height:5px;background:silver;box-shadow:0 0 5px 2px gold;margin:100px 0;}
	</style>
</head>
<body onload='init()'>
<img src='logo5.gif' height="100px"alt='' style='top:0;left:0;position:absolute;'/>
	<h1>Formulaire de préinscription à remplir.</h1>
	<p>
	<h2>A la suite de votre préinscription, un conseiller en formation vous contactera et vous enverra une convention de formation.<br/>
Vous pouvez dès lors nous contacter par <i>téléphone au 0679111948 ou par email : adavid@educationenergie.com</i> pour avoir plus d’information.
	</h2>
	</p>
	<form method='post' action='' onsubmit='return verif(this)'><nav id='contain'>
		<p>Nom<span class='obligatoire'>*</span>: <img src='ok.png' alt=''/><input name='nom' type='text' value='Votre nom'/></p>
		<p>Prénom<span class='obligatoire'>*</span>: <img src='ok.png' alt=''/><input name='prenom' type='text' value='Votre prénom'/></p>
		<p>Entrepise<span class='obligatoire'>*</span>: <img src='ok.png' alt=''/><input name='entreprise' type='text' value='ADeducation'/></p>
		<p>Formation recherchée<span class='obligatoire'>*</span>: <img src='ok.png' alt=''/><select name='formation'>
		<option type='text' value='---' selected>----Choisissez une formation----</option>
		<option type='text' value='photovoltaique'>photovoltaique en site isolé</option>
		<option type='text' value='cogeneration'>micro-cogeneration</option>
		<option type='text' value='maison'>maison autonome</option>
		<option type='text' value='eolien'>éolien</option>
		<option type='text' value='LED'>éclairage LED</option>
		<option type='text' value='economies'>réduire sa précarité énergétique en consommant moins</option>
		</select>
		<p>Email<span class='obligatoire'>*</span><img src='ok.png' alt=''/><input name='email' type='text' value='adavid@educationenergie.com'/></p>
		<p>Confirmer votre Email<input type='text' value='adavid@educationenergie.com'/></p>
		<p>Téléphone<span class='obligatoire'>*</span><img src='ok.png' alt=''/><input name='tel' type='text' value='06 79 11 19 48'/></p>
		<p>Personnes qui suivront la formation<input name='autre' type='text' value='noms de personnes...'/></p>
		<p>Commentaires<textarea name='comments' type='text'style='height:100px;'></textarea></p>
	<hr/>
		<input name='envoie' type='submit' value='Envoyer'/>
	</nav></form>

<body>
</html>-->