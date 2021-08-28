<?php
	include('process.php');
	$images=new Image();
	$images=$images->getImages(IMAGES_DIR_PATH);
	
	// print_r($images);
?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<style>
	body{background:gray;padding-top:50px;margin:0;overflow-y:hidden;}
	a{display:block;text-align:center;}
	form{border:solid gold;background:rgba(111,111,111,.7);}
	ul{list-style-type:none;background:whitesmoke;overflow:hidden;width:100%;height:500px;box-sizing:border-box; display: -webkit-box;-webkit-box-pack: center;-webkit-box-align: center;border-bottom:10px solid gold;border-top:10px solid gold;box-shadow:0 0 10px 1px black, 0 0 3px 0px black inset;}
	img{display:block;z-index:10;}
	li:first-of-type{margin-left:40px;-webkit-transition:margin-left .3s;}
	li>span,li>span+form>input{z-index:10;position:absolute;top:0;right:0;background:orange;color:silver;font-weight:900;cursor:pointer;box-sizing:border-box;}
	li>img+form>input{right:11px;border-bottom-left-radius:10px;}
	li>span:hover{border:1px solid red;}
	li>span:active{background:red;}
	aside{position:absolute;top:0;padding:240px 10px 0;height:325px;background:rgba(128,0,128,.5);font-size:2em;font-weight:900;z-index:100;cursor:pointer;border-right:1px solid gold;-webkit-transition:all 3s;}
	aside:hover{background:purple;color:gold;}
	aside:active{background:green;color:red;box-shadow:0 0 10px 1px silver;}
	aside+aside{right:0px;border-right:none;border-left:1px solid gold;}
	aside+aside>span{border-right:none;border-left:1px solid red;}
	aside>span{width:100%;text-align:center;border-right:1px solid red;background:rgba(255,69,0,.7);font-size:.7em;position:absolute;top:0;left:0;color:black;-webkit-transition:all .3s;}
	aside>span:hover{background:'orange red';color:gold;}
	aside>span:active{background:red;color:purple;box-shadow:0 0 10px 1px silver;}
	
	#upl{position:absolute;top:0;left:35%;right:35%;border-top:none;}
	#infos{}
	#info{position:absolute;bottom:-200px;background:silver;box-shadow:0 0 10px 0 black inset;height:200px;width:100%;overflow:scroll;}
	#lastform{position:absolute;opacity:0;top:0;z-index:-1;}
	
	.uploadsucc{-webkit-animation: uplsucc 3s ease-in-out 1;text-align:center;}
	@-webkit-keyframes uplsucc {from,to{opacity:0;background:transparent;}0%,99%{display:block;}50%{background:green;}	}
	.uploaderr{-webkit-animation: uplerr 3s ease-in-out 1;text-align:center;}
	@-webkit-keyframes uplerr {from,to{opacity:0;background:transparent;}0%,99%{display:block;}50%{background:red;}	}
</style>
<form id='upl' action="admin.php" method='POST' enctype='multipart/form-data'>
  Charger un fichier image: (poids max 1Mo)<br/> <input type="file" name="upl[]" multiple>
  <input type="submit" name='upload_envoie'>
</form>
<?php if(isset($msg_upl_err)){echo"<div id='infos'>";echo"<p class='uploaderr'>$msg_upl_err</p></div>"; }
elseif(isset($msg_upl_succ)) echo"<p class='uploadsucc'>$msg_upl_succ</p></div>"; 
?>
<a style='position:absolute;width:100%;'href='index.php?front=ok'>retour front</a>
<aside><<span title='Avance rapide'><</span></aside><aside>><span title='Recule rapide'>></span></aside>
<ul style='padding-left:0;padding-right:0;'>
	<?php foreach($images as $v):?>
	<li style='position:relative;float:left;margin: 10px 20px;box-sizing: border-box;border:solid red;'>
		<img height='450px' src="<?php echo IMAGES_DIR_PATH.$v['fichier'] ?>" title="<?php echo $v['fichier'] ?>" alt="<?php echo $v['fichier'] ?>"/>
		<form action='admin.php' method='POST'>
			<input type='hidden' name='filename' value='<?php echo $v['fichier'] ?>'/>
			<input name='supp' type='submit' title="supprimer définitivement cette image" value="x"style='background:purple'/>
		</form>
		<span title="Modifier les attribut de l'image" style='background:<?php if(empty($v['title']))echo"orange";else echo "purple" ?>;'>+</span>
		<form name='fill_com_img' action='admin.php' method='post' id='lastform'>
			<input name='<?php if(!empty($v['title']))echo"fichierUpdate";else echo "fichier" ?>' type='hidden' value='<?php echo $v['fichier'] ?>'/>
			<p>Titre<input name='title' type='text' value='<?php echo $v['title'] ?>'/></p>
			<p>Derciption<textarea name='descr' cols='50' rows='5'><?php echo $v['descr'] ?></textarea></p>
			<p><input name='envoie' type='submit' value='balancer'/></p>
		</form>
	</li>
	<?php endforeach ?>
</ul>
<script language='javascript'>
	var bool=true;;
	var choix=document.getElementsByTagName('ul')[0].getElementsByTagName('span');
	var navigation=document.getElementsByTagName('aside');
	// kk0=kk[0].getElementsByTagName('span')[0];kk1=kk[1].getElementsByTagName('span')[0];
	// alert(kk0+"\n"+kk1);
	var navigation_pointer=document.getElementsByTagName('li')[0];navigation_pointer.style.marginLeft='40px';
		navigation[0].onclick=function(){if(bool){navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)+200+'px';}else bool=true;};
		navigation[1].onclick=function(){if(bool){navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)-200+'px';}else bool=true;};
		navigation[0].getElementsByTagName('span')[0].addEventListener("click", function(e){bool=false;navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)+1000+'px';}, false);
		navigation[1].getElementsByTagName('span')[0].addEventListener("click", function(e){bool=false;navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)-1000+'px';}, false);
		// kk0.onclick=function(e){navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)-1000+'px';bool=false;};
		// kk1.onclick=function(e){navigation_pointer.style.marginLeft=parseInt(navigation_pointer.style.marginLeft)+1000+'px';bool=false;};
	for(var i=0;i<choix.length;i++){choix[i].param=true;
		choix[i].onclick=function(){
			if(this.param){this.param=false;
			// alert(this);
			this.previousSibling.previousSibling.style.opacity=0.3;
			this.previousSibling.previousSibling.style.zIndex=0;
			this.nextSibling.nextSibling.style.opacity=1;
			this.nextSibling.nextSibling.style.zIndex=2;
			this.innerHTML='-';}
			else{this.param=true;this.previousSibling.previousSibling.style.opacity=1;
			this.previousSibling.previousSibling.style.zIndex=10;
			this.nextSibling.nextSibling.style.opacity=0;
			this.nextSibling.nextSibling.style.zIndex=-1;
			this.innerHTML='+';}
		}
	}
	window.onload=function(){setTimeout("document.getElementById('infos').style.display='none'",2000);};
</script>