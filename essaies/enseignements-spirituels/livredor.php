<?php
		if(isset($_POST['pseudo'])){
			
				$mysqli=$_SESSION['mysqli'];
				// $mysqli=new mysqli('localhost','root','','lib');
				// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
				$mysqli->set_Charset("utf8");
				if(!$result=$mysqli->query("insert into blog (`user_name`,`titre`,`texte`,`heure`,`pseudo`,`img`) values('livredor','".$_POST['titre']."','".$_POST['texte']."','".date("Y-m-d H:i:s")."','".$_POST['pseudo']."','');"))
				echo"insert into blog (`user_name`,`titre`,`texte`,`heure`,`pseudo`,`img`,) values('livredor','".$_POST['titre']."','".$_POST['texte']."','','".$_POST['pseudo']."','');";
		}
?>
<div id='livredor'>
<input type='button' style='position:fixed;top:80%;'; value='&Eacute;crire' onclick='tag("footer")[0].style.marginBottom="200px";message_comments.style.display="block";message_comments.style.height="200px"'/>
<h2>Livre d'or</h2>
		<div>
<?php


	$mysqli=$_SESSION['mysqli'];
	// $mysqli=new mysqli('localhost','root','','lib');
	// $mysqli=new mysqli('localhost','root_pda_website','q3p_Vv75','admin_pda');
	$mysqli->set_Charset("utf8");
	if($result=$mysqli->query("select titre,texte,heure,pseudo,img from blog where user_name='livredor' order by heure ASC;"))
			if(mysqli_num_rows($result)!=0)
					while($v=$result->fetch_array()){$catchh=$v['heure'];
							echo"
											<img src='".$v['img']."' alt=''/>
											<section>L' internaute <b>".$v['pseudo']."</b>, le <span>".giveDateFr($v['heure'],'abrevEn','abrevEn')."</span>, a dit :</section>
											<h4>".$v['titre']."</h4>
											<article>".$v['texte']."</article>";
									if($_SERVER['REMOTE_ADDR']=='127.0.0.1')echo
											"<input class='retirer' style='background:url(images/retirer.png) center center no-repeat;margin-left:-70px;' type='button' onclick=\"rmv_livredor_signe('delete from blog where heure=$catchh;');\"/>";
							echo"
							";
					}
			else echo"Aucun post n'a encore été laissé sur <u>librairie-puissance-divine.ci</u><br/>Soyez le premier à le faire ! ! !";

?>			
		</div>
					
<input type='button' class='shinelivredor' value="&Eacute;crire vous aussi dans notre livre d'or" style='position:absolute;bottom:0;width:100%;cursor:pointer;' onclick='send_msg_livredor()'/>
</div>