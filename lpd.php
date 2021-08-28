<?php

	function trans1($h)
	{if($h%13==0)$h=1;
		switch($h%13)
		{
		case 1:return 'Janvier';break;
		case 2:return 'F&eacute;vrier';break;
		case 3:return 'Mars';break;
		case 4:return 'Avril';break;
		case 5:return 'Mai';break;
		case 6:return 'Juin';break;
		case 7:return 'Juillet';break;
		case 8:return 'Ao&ucirc;t';break;
		case 9:return 'Septembre';break;
		case 10:return 'Octobre';break;
		case 11:return 'Novembre';break;
		case 12:return 'D&eacute;cembre';break;
		}
	}
	function sufixe($h)
	{
		switch($h)
		{
		case 1: return 'er';
		default: return '';
		}
	}
	//trans2&&trans3 s'utilisent avec date('D');
	//(qui donne l'abrévriation du jour en anglais)
	function trans2($h)
	{
		switch($h)
		{
		case 'Mon':return "Lun";
		case 'Tue':return "Mar";
		case 'Wed':return "Mer";
		case 'Thu':return "Jeu";
		case 'Fri':return "Ven";
		case 'Sat':return "Sam";
		case 'Sun':return "Dim";
		}
	}
	function trans3($h)
	{
		switch($h)
		{
		case 'Mon':return "Lundi";
		case 'Tue':return "Mardi";
		case 'Wed':return "Mercredi";
		case 'Thu':return "Jeudi";
		case 'Fri':return "Vendredi";
		case 'Sat':return "Samedi";
		case 'Sun':return "Dimanche";
		}
	}

		
				
	
						$mysqli=$_SESSION['mysqli'];
						// $mysqli=new mysqli('localhost','root','','lib');
						// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
						$mysqli->set_Charset("utf8");
if(isset($_POST['enseignementTexte'])||isset($_POST['enseignementComs'])||isset($_POST['enseignementVote'])||isset($_POST['enseignementRetirer'])||isset($_POST['enseignementCommentaire'])){$continuu='';
		if(isset($_POST['enseignementVote'])||isset($_POST['enseignementRetirer'])){
				// if(isset($_POST['enseignementVote'])){$enseignement='vote';$t=$_POST['enseignementVote'];$ip=$_POST['ip'];if($result=$mysqli->query("select user_name from blog where user_name='comments' and vote not like '%$ip%';"))if(mysql_num_rows($result)==0){echo"0";exit;}}
				if(isset($_POST['enseignementVote'])){$enseignement='vote';$t=$_POST['enseignementVote'];if($result=$mysqli->query("select vote from blog where user_name='comment' and heure='$t';")){if($v=$result->fetch_array())$continuu=$v['vote'];}else echo"select vote from blog where user_name='comment' and heure='$t';";}
				if(isset($_POST['enseignementRetirer'])){$enseignement='retirer';$t=$_POST['enseignementRetirer'];if($result=$mysqli->query("select retirer from blog where user_name='comment' and heure='$t';")){if($v=$result->fetch_array())$continuu=$v['retirer'];}else echo"select retirer from blog where user_name='comment' and heure='$t';";}
				$ip=$_POST['ip'];
				if(strpos($continuu,$ip)===false){
						$rqt="update blog set $enseignement='".($continuu.$ip).";' where heure='$t';";
						if(!$result=$mysqli->query($rqt))echo$rqt;
						else echo"1";
				}else echo "0";
		}elseif(isset($_POST['enseignementCommentaire'])){
				$rqt="insert into blog(`user_name`,`titre`,`texte`,`phrase`,`heure`,`pseudo`,`img`) values('comment','".$_POST['texte']."','".$_POST['enseignementCommentaire']."','".$_POST['texte']."','".date("Y-m-d H:i:s")."','".$_POST['pseudo']."','');";
				if(!$result=$mysqli->query($rqt))echo$rqt;
				else echo"1";
		}else{
				if(isset($_POST['enseignementComs']))
						$rqt="select user_name,texte,phrase,heure,pseudo from blog where phrase='".$_POST['enseignementComs']."';";
				else 	$rqt="insert into blog(`user_name`,`texte`,`phrase`,`heure`,`pseudo`) values('comments','".$_POST['texte']."','".$_POST['enseignementTexte']."','".date("Y-m-d H:i:s")."','".$_POST['pseudo']."');";
				if(!$result=$mysqli->query($rqt))echo$rqt;
				else echo"1";
		}
}
if(isset($_POST['type'])){
						$rqt="select * from ret where user_name='".$_POST['type']."' and ret.date>date(now());";
						if($result=$mysqli->query($rqt)){
								while($v=$result->fetch_array())
										if($_POST['type']=='ouverte')
												echo"<fieldset><span class='unsee'>".$v['places']."</span><legend onclick='nexSib(this).click();'>".trans3(date('D',mktime(0,0,0,intval(substr($v['date'],5,2)),intval(substr($v['date'],8,2)),intval(substr($v['date'],0,4)))))." ".substr($v['date'],8,2)." ".trans1(substr($v['date'],5,2))." ".substr($v['date'],0,4)." - ".trans3(date('D',mktime(0,0,0,substr(date("Y-m-d", strtotime($v['date']. " +7 day")),5,2),substr(date("Y-m-d", strtotime($v['date']. " +7 day")),8,2),substr(date("Y-m-d", strtotime($v['date']. " +7 day")),0,4)))) ." ".substr(date("Y-m-d", strtotime($v['date']. " +7 day")),8,2)." ".trans1(substr(date("Y-m-d", strtotime($v['date']. " +7 day")),5,2))." ".substr(date("Y-m-d", strtotime($v['date']. " +7 day")),0,4)."</legend><input onclick='sel(this.parentNode);retraite.id.value=this.value' type='radio' name='date' /><span onclick='preSib(this).click();'>selectionner cette date ?</span></fieldset>";
										else	echo"<fieldset><span class='unsee'>".$v['places']."</span><legend onclick='nexSib(this).click();'>".trans3(date('D',mktime(0,0,0,intval(substr($v['date'],5,2)),intval(substr($v['date'],8,2)),intval(substr($v['date'],0,4)))))." ".substr($v['date'],8,2)." ".trans1(substr($v['date'],5,2))." ".substr($v['date'],0,4)." - ".trans3(date('D',mktime(0,0,0,substr(date("Y-m-d", strtotime($v['date']. " +2 day")),5,2),substr(date("Y-m-d", strtotime($v['date']. " +2 day")),8,2),substr(date("Y-m-d", strtotime($v['date']. " +2 day")),0,4)))) ." ".substr(date("Y-m-d", strtotime($v['date']. " +2 day")),8,2)." ".trans1(substr(date("Y-m-d", strtotime($v['date']. " +2 day")),5,2))." ".substr(date("Y-m-d", strtotime($v['date']. " +2 day")),0,4)."</legend><input onclick='sel(this.parentNode);retraite.id.value=this.value' type='radio' name='date' /><span onclick='preSib(this).click();'>selectionner cette date ?</span></fieldset>";
								
						}else echo"aucun résultat";
}elseif(isset($_POST['admin_val'])){$t='';
		if($_POST['admin_val']=='reservation'){$tt=',nombre,id_retraite,nomp,numero';$tmp='numero';}else {$tt=',nomporteur,numero_de_carte';$tmp='numero_de_carte';}
		$rqt="select timestamp,id,phone_compte_user,email_compte_user,montant$tt from ".$_POST['admin_val']." where validation='0' and (phone_compte_user like '%".$_POST['valeur']."%' or email_compte_user like '%".$_POST['valeur']."%' or $tmp like '%".$_POST['valeur']."%');";
		if($result=$mysqli->query($rqt))
				if(mysqli_num_rows($result)!=0){
						while($v=$result->fetch_array()){if($_POST['admin_val']=='reservation'){$numero=$v['numero'];$nomp=$v['nomp'];}else{$numero=$v['numero_de_carte'];$nomp=$v['nomporteur'];}
								if($v['phone_compte_user']!=0)$info=$v['phone_compte_user'];elseif($numero!=0)$info="$nomp, n°B: $numero";elseif($v['email_compte_user']!='')$info=$v['email_compte_user'];
								if(isset($v['nombre']))	$t.="<div>$info || <span class='required'>".$v['montant']." Fcfa</span><br/><b>enregistré le</b>: ".$v['timestamp']."</div><aside><span>".$v['id']."</span>|<span>$info</span>|<span>".$v['nombre']."</span>|<span>".$v['id_retraite']."</span></aside>";
								else					$t.="<div>$info || <span class='required'>".$v['montant']." Fcfa</span><br/><b>enregistré le</b>: ".$v['timestamp']."</div><aside><span>".$v['id']."</span>|<span>".$v['phone_compte_user']."</span></aside>";
						}
		// }else echo$rqt;
		}else echo"aucun résultat";
		// else echo$rqt;if(count($result)==0)echo$rqt;
		// echo count($result);
		// echo$rqt;
		echo$t;
		// echo$rqt;
}elseif(isset($_POST['admin_'])){$t='';
		// echo$_POST['valeur'];
		$options_article=array();
		if($_POST['admin_']=='supprimer'){$rqt="select id_produits, ".$_POST['lang']." from articles where fr like \"%".$_POST['valeur']."%\"";
		// if($result=$mysqli->query($rqt))echo"<div onclick=\"mod.value=this.nodeValue\"><span class='hid'>".$v['id_produits']."</span>".$v['fr']."</div>";
		if(!$result=$mysqli->query($rqt))echo$rqt;
				else while($v=$result->fetch_array())
				echo"<div onclick=\"modifierr.id.value=clas('hid',this)[0].innerHTML;choix_admin.innerHTML='';envoie.value='Supprimer!';getClass(envoie,'brille');\"><span class='hid'>".$v['id_produits']."</span>".$v[$_POST['lang']]."</div>";
		}elseif($_POST['admin_']=='diaporama'){
				if($result=$mysqli->query("select * from diapo where id=\"".str_replace('#_#'," ",$_POST['valeur'])."\";"))while($v=$result->fetch_array())$cat[]=$v;
				if(isset($cat)){
						echo json_encode($cat);
						$catt=array();if($dossier=opendir(substr($cat[0]['img'],0,strrpos($cat[0]['img'],"/")+1)))
								while(false !== ($fichier = readdir($dossier)))
										if($fichier != '.' && $fichier != '..')
												$catt[]=substr($fichier,0,strlen($fichier)-4);
						// echo "#_#".substr($cat[0]['img'],0,strrpos($cat[0]['img'],"/")+1);
						echo "#_#".json_encode($catt);
				}
										
				// if(isset($cat))echo json_encode(array("kljklj"=>"lkmlk","lkjklj"=>"tfytf","fdfgch"=>"yttui"));
				// else echo"select * from diapo where id=\"".str_replace('#_#'," ",$_POST['valeur'])."\";";
				// echo$_POST['valeur'];
		}else{
				$rqt="select * from options_article;";
				if($result=$mysqli->query($rqt))
						while($v=$result->fetch_array()){
								if(!array_key_exists($v['img_article'],$options_article))$options_article[$v['img_article']]=array();
								$options_article[$v['img_article']][]=array('id'=>$v['id'],'stock'=>$v['stock'],'vendus'=>$v['vendus'],'coloris'=>$v['coloris'],'couverture'=>$v['couverture'],'taille'=>$v['taille_'],'prix'=>$v['opt_prix'],'nom'=>$v['opt_nom'],'autre'=>$v['autre'],'image'=>$v['opt_img']);
						}
				$rqt="select id_produits,fr,fr1,prix,stock,vendus,img,actif from articles where fr like '%".$_POST['valeur']."%';";
				// echo"select id_produits,fr,stock,actif from articles where fr like '%".$_POST['valeur']."%';";
				if($result=$mysqli->query($rqt))
						while($v=$result->fetch_array())
								if(isset($options_article[$v['img']])&&$_POST['admin_']!='actif')	
										foreach($options_article[$v['img']] as $k=>$vv)
												$t.="<div><span>".$v['id_produits']."</span><span class='fr'>".$v['fr']."</span><span>".($vv[$_POST['admin_']]-$vv['vendus'])."</span><span id='img_rep'>".$v['img']."</span><span class='fr1'>".$v['fr1']."</span><span class='vendus'>".$vv['vendus']."</span><span class='prix'>".$v['prix']."</span><span class='id_options_article'>".$vv['id']."</span><span class='see'>|| ".$vv['coloris'].$vv['taille']."</span></div>";
								else	$t.="<div><span>".$v['id_produits']."</span><span class='fr'>".$v['fr']."</span><span>".($v[$_POST['admin_']]-$v['vendus'])."</span><span class='fr1'>".$v['fr1']."</span><span class='vendus'>".$v['vendus']."</span><span class='prix'>".$v['prix']."</span><span></span></div>";
				else echo"aucun résultat";
				echo$t;
		}
}elseif(isset($_POST['diaporama']))
		if($_POST['diaporama']=='update'){
				if(!$result=$mysqli->query("update diapo set img='".$_POST['img']."', alt=\"".$_POST['alt']."\", texte=\"".str_replace('#','&',$_POST['texte'])."\" where id_=".$_POST['id_'].";"))echo"update diapo set id='".$_POST['nom']."', img='".$_POST['img']."', alt='".$_POST['alt']."', texte='".$_POST['texte']."' where id_=".$_POST['id_'].";";
				else echo$_POST['i']+1;
		}elseif($_POST['diaporama']=='insert'){
				if(!$result=$mysqli->query("insert into diapo(`id`,`img`,`alt`,`texte`) values('".$_POST['nom']."','".$_POST['img']."',\"".str_replace('#','&',$_POST['alt'])."\",\"".str_replace('#','&',$_POST['texte'])."\")"))echo"insert into diapo(`id`,`img`,`alt`,`texte`) values('".$_POST['nom']."','".$_POST['img']."','".$_POST['alt']."','".$_POST['texte']."')";
				else echo$_POST['i']+1;				
		}elseif($_POST['diaporama']=='erase'){
				if(!$result=$mysqli->query("delete from diapo where id='".$_POST['id']."'"))echo 1;
				else echo 1;		
		}
?>