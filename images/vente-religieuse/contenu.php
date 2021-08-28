<?php

	$image=new Image();
	$image=$image->getImages(IMAGES_DIR_PATH);
	// print_r($image);
?>
<style>
	h1{text-align:center;}
	li>p{position:relative;border:1px solid silver;padding:5px 0;}
	li>p:before{content:'description';position:absolute;top:-20px;text-decoration:underline;}
</style>
<ul style='list-style-type:none;'>
	<?php foreach($image as $v):?>
	<li style='position:relative;float:left;margin-bottom:10px;border:solid red;'>
		<img src="<?php echo IMAGES_DIR_PATH.$v['fichier'] ?>" title="<?php echo $v['title'] ?>" alt="<?php echo $v['title'] ?>"/>
		<h1><?php echo $v['title'] ?></h1>
		<p><?php echo $v['descr'] ?></p>
	</li>
	<?php endforeach ?>
</ul>
<a href='./index.php?admin=ok' style='display:block;position:absolute;top:0;'>Connection ???</div>