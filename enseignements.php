
		<ul id='rsf' class='up transitionall fixee'>
			<li title='Partager cette enseignement spirituel!'><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>			<div class="fb-share-button" data-href="<?php echo$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" data-layout="button"></div></li>
<?php			//mettred dans variable le permalien
//if($result=$mysqli->query("select user_name,titre,heure,phrase,pseudo from blog where user_name='".date('W')."';")) ?>
			<li>			</li>
		</ul>
<div id='enseignement'>
<?php
// $k=0;
// echo date('d-m-Y',strtotime("Monday"." -".($k*7)." day")).'<br/>';
// $k++;
// echo date('d-m-Y',strtotime("Monday"." -".($k*7)." day")).'<br/>';
// $k++;
// echo date('d-m-Y',strtotime("Monday"." -".($k*7)." day")).'<br/>';
// $k++;
// echo date('d-m-Y',strtotime("Monday"." -".($k*7)." day")).'<br/>';
// $k++;
// echo time()+strtotime('Monday').'<br/>';
// echo time().'<br/>';
// echo strtotime('Monday');


// echo$k;

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
		if(isset($_POST['pseudo'])){
				if($result=$mysqli->query("select * from blog where user_name='comment' and titre='".$_POST['titre']."' and texte='".$_POST['texte']."' and phrase='".$_POST['info0']."' and pseudo='".$_POST['pseudo']."' and img='';"))
						if(mysqli_num_rows($result)==0)
								if(!$results=$mysqli->query("insert into blog (`user_name`,`titre`,`texte`,`phrase`,`heure`,`pseudo`,`img`) values('comment','".$_POST['titre']."','".$_POST['texte']."','".$_POST['info0']."',CURRENT_TIMESTAMP,'".$_POST['pseudo']."','');"))
										echo"insert into blog (`user_name`,`titre`,`texte`,`phrase`,`heure`,`pseudo`,`img`) values('comment','".$_POST['titre']."','".$_POST['texte']."','".$_POST['info0']."',CURRENT_TIMESTAMP,'".$_POST['pseudo']."','');";
				// else 
				// echo"insert into blog (`user_name`,`titre`,`texte`,`heure`,`pseudo`,`img`,) values('comment','".$_POST['titre']."','".$_POST['texte']."','','".$_POST['pseudo']."','');";
		}
		// trouver cmd sql 
		// selectionner la valeur maximale de la colonne
		
		
if($_GET['menu']=='archive_enseignements'){$y=date('Y');$w=date('W');
		// $rqt="select titre,texte,user_name,heure from blog where user_name>0 and user_name<=".date('W').";";
		$rqt="select titre,texte,user_name,heure,img from blog where user_name>0 and img<=$y order by user_name;";
		// $rqt="select titre,texte,user_name,heure,img from blog where user_name>0 order by user_name;";
		if(!$result=$mysqli->query($rqt))echo$rqt;
		else
				while($v=$result->fetch_array())
						if($v['img']<date('Y')||($v['user_name']<date('W')&&$v['img']==date('Y'))){?>
						<a class='archive' href="index.php?menu=archive_enseignement&index=<?php echo $v['user_name']; ?>">
								<div>Enseignement spirituel du <?php //echo trouver_date($v['user_name'],$v['img'])[0]; ?></div>
								<h3><?php echo substr($v['titre'],0,50).'...'; ?></h3>
								<p><?php echo substr($v['texte'],0,100).'...'; ?></p>
						</a>
				<?php }else{}
}else{
		

		if($_GET['menu']=='archive_enseignement')	$rqt="select * from blog where user_name = '".$_GET['index']."';";
		else{	if($result=$mysqli->query("select count(user_name) as a from blog where user_name<='".date('W')."' && img='".date('Y')."';"))if(mysql_num_rows($result)==0)$nbr=$result->fetch_array();$nbr=$nbr['a'];
				$rqt="select user_name,titre,heure,phrase,pseudo from blog where user_name='".date('W')."';";
				$k=0;do{$k++;}while(date('m',strtotime("Monday"." -".($k*7)." day"))==date('m'));if(date('D')!='Mon')$k--;
		}
		// $rqt="select titre,texte from blog where user_name='".date('W')."';";
		if(!$result=$mysqli->query($rqt))echo"llllllllllllllll";
		else{
				if($v=$result->fetch_array()){ $comment=$v['heure'];$fb=strtolower($v['phrase']); ?>
		<h1><?php echo$v['pseudo']; ?></h1>
		<h2><?php echo$v['titre']; ?></h2><?php if($_GET['menu']=='enseignements-spirituels-chretien-catholique'||$_GET['menu']=='archive_enseignement'){ ?>
		<h3 style="">Enseignement spirituel n°<?php echo$nbr; ?> ; <?php  echo strtolower(trans1(date('m')))." ".date('Y'); ?> </h3>
		<!--<h3 style="">Enseignement spirituel n°<?php //echo$k; ?> du mois d<?php //if(in_array(strtolower(substr(trans1(date('m')),0,1)),array('a','o'))===false)echo"e ";else echo"'"; echo strtolower(trans1(date('m')))." ".date('Y'); ?> </h3>-->
		<?php }elseif($_GET['menu']=='archive_enseignement'){ $v['user_name']=$_GET['index'];?><h3 style="">Enseignement spirituel n°<?php echo$_GET['index']; ?> de l'année <?php echo $v['img'];  ?> </h3> <?php } ?>
		<h4 style=''>(Extrait de l'&eacute;vangile révélé à Maria Valtorta)</h4>
		<a href='index.php?menu=archive_enseignements' title="enseignements spirituels, saint-esprit, librairie puissance divine d'amour" style=''>accédez aux archives<span class='hidd'>enseignements spirituels</span></a>
		<a href='enseignements-spirituels/index.php?enseignement-spirituel=<?php echo$v['phrase']; ?>' title="permalien, enseignement spirituel, saint-esprit, librairie puissance divine d'amour" style='' target='_blank'>permalien</a>
				<?php
						// utf8_encode(include("content/ens/$fb.htm"));
						echo"<iframe src='content/enseignements-spirituels/$fb.htm' id='date_enseignements' ></iframe>";
						echo"<div id='date_enseignement' style='display:none;'>".$v['heure']."</div>";
						// print_r($v);
				}else {echo "Erreur,</br> désolé aucune réponse. </br>Veuillez rééssayer ultérieurement.";}
		}

?>
		<aside></aside>
		<aside></aside>
</div>
<div id='comments' class='hid'>
<h2>Vos commentaires</h2>

<div class="fb-comments" data-href="http://librairie-puissance-divine.ci/enseignements/index.php?enseignement=<?php echo$fb; ?>" data-width="500px" data-numposts="50" data-colorscheme="light"></div>
<div>
		<a href="http://twitter.com/share" class="twitter-share-button"   data-count="vertical" data-via="@puissancedamour">Tweet</a>
		<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
</div>
<?php
		// $tmp=array();
		// $mysqli->set_Charset("utf8");
		// $rqt="select * from blog where user_name='comments';";
		// if($result=$mysqli->query($rqt))while($v=$result->fetch_array())$tmp[]=$v;
		
		// $rqt="select * from blog where user_name='comment' and phrase='$comment';";
		// if(!$result=$mysqli->query($rqt))echo$rqt;
		// else	while($v=$result->fetch_array()){
					// $comments=array();
					// foreach($tmp as $k=>$vv)
							// if($vv['phrase']==$v['heure'])
									// $comments[]=$vv;
					// $catchh=$v['heure'];
					// if(substr($v['texte'],0,300)==$v['texte'])$texte=$v['texte'];
					// else $texte=substr($v['texte'],0,300)."...";
					// echo"
							// <div>
									// <img src='".$v['img']."' width='75px' alt=''/>
									// <span class='repondre'><fieldset><legend>Répondre à ce commentaire</legend><input style='background:url(images/rep.png) center center no-repeat;' class='repondreInp' type='button' value=''/> <span style='clear:none;'>".count($comments)." </span>&nbsp;commentaire(s)";if(count($comments)!=0)echo" <a style='font-size:.8em;position: absolute;top: 5px;right: 10px;' href='#coms'  onclick='clas(\"commentaires\",this.parentNode.parentNode.parentNode)[0].style.display=\"block\"';this.parentNode.parentNode.parentNode.onmouseout=function(){clas(\"commentaires\",this)[0].removeAttribute(\"style\");alert(\"ok\");};>(les afficher)</a>";echo"</fieldset></span>
									// <span class='vote'><fieldset><legend>aimer ce commentaire</legend><input style='background:url(images/okk.png) center center no-repeat;' class='voteInp' type='button' value=''/> <span style='clear:none;'>".substr_count($v['vote'],';')." </span>&nbsp;mention(s) \"j'aime\"</fieldset></span>
									// <span class='retirer'><fieldset><legend>demander à retirer ce commentaire</legend><input style='background:url(images/retirer.png) center center no-repeat;' class='retirerInp' type='button' value=''/> <span style='clear:none;'>".substr_count($v['retirer'],';')." </span>&nbsp;retrait(s) demandés</fieldset></span>
									// <section>L'internaute <b>".$v['pseudo']."</b> à <b>".$v['heure']."</b> a écrit :</section> 
									// <h3>".$v['titre']."</h3>
									// <article id='extrait'>$texte</article>
									// <article>".$v['texte']."</article>
									// <div class='commentaires'>";
									// foreach($comments as $k=>$vv)echo"
											// <div class='mm'>
													// <span>".$vv['pseudo']."</span>
													// <span>".$vv['heure']."</span>
													// <div>".$vv['texte']."</div>
											// </div>";
									// echo"</div>";
									
									// if($_SERVER['REMOTE_ADDR']=='127.0.0.1')echo
											// "<input class='retirerADMIN' style='background:url(images/retirer.png) center center no-repeat;margin-left:-10px;' type='button' onclick=\"this.parentNode.parentNode.removeChild(this.parentNode);rmv_livredor_signe('delete from blog where heure=$catchh');\"/>";
									// echo"
							// </div>
					// ";
			// }
?>
<input type='button' value="Laissez un commentaire en cliquant ici" class='hidd' onclick='send_msg_enseignement();'/>
<!--<input type='button' value="Laissez un commentaire en cliquant ici" style='position:relative;top:0;width:100%;' onclick='message_comments.action="index.php?menu=enseignements";alert(message_comments.onsubmit);tag("footer")[0].style.marginBottom="200px";message_comments.style.display="block";message_comments.style.height="200px"'/>-->
</div>
<?php
}
?>