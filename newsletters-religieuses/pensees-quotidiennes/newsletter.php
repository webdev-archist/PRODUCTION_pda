<?php
//quotidienne
if($result=$mysqli->query("select quoti from newsletter where id='".date('z')."';"))
		if(!$v=$result->fetch_array()){
				
		$message_html = "<html>								<head>								</head>								<body>										$message_txt								</body>						 </html>";		
		//==========//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========
		 
		//=====Définition du sujet.
		$sujet = "Confirmation de votre $comp chez librairie-puissance-divine.ci";
		//=========
		 
		//=====Création du header de l'e-mail.
		$header = "From: \"".$_POST['nom']." ".$_POST['prenom']."\"<".$_POST['email'].">".$passage_ligne;
		$header.= "Reply-to: \"WeaponsB\" <".$_POST['email'].">".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
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
		}

//hebdomadaire
if(date('N')==1){
echo"ouiiiiiiiii";

}
//mensuelle
if(date('d')==01){
echo"oui";
}
?>