<?php
class Image{

private $mysqli;
private $info;
public $msg_err='';
public $msg_error='';
	
	
	public function __construct(){
		
	}
	
	private function connexion(){
		$this->mysqli=$mysqli=$_SESSION['mysqli'];
		$this->mysqli->set_Charset("utf8");
		if($this->mysqli->connect_errno){
			echo"Echec de la connexion: %s\n",$this->mysqli->connect_error;
			exit();
		}
	}
	private function getImageData($x){
		$this->connexion();
		$rqt="select * from imgs where fichier='".$x."';";
		if($result=$this->mysqli->query($rqt)){
			$row=$result->fetch_array();
			$imageData=$row;
			$this->info[]=$imageData;
			return $imageData;
		}else{
			$error="Une erreur est survenue à l'exécution de la requête:\n".$rqt."\n Message d'erreur: ".$this->mysqli->error;
			return false;
		}$this->mysqli->close();
		
	}
	
	
	
	public function getImages($x){
		$images=array();
		if($handle=opendir($x)){
			while(false!==($entry=readdir($handle))){
				if(is_dir($x.$entry)!=true){//echo is_dir($entry)."$entry!!!   ";
					if($imagedata=$this->getImageData($entry)) $images[count($images)]=$imagedata;
					else $images[]=array('title'=>'','descr'=>'','fichier'=>$entry);
					$this->creer_vignette($entry);
				}
			}
		if(!isset($_GET)){echo"<div id='info'>";var_dump($this->info);echo"</div>";}
		}
	// print_r($images);
		closedir($handle);
		return $images;
	}
	public function updateImage($x,$y,$z,$zz=''){
		$this->connexion();
		$rqt="update imgs set title='$x', descr='$y' where fichier='$z';";
		if($this->mysqli->query($rqt))
			return true;
		else{
			$error="Une erreur est survenue à l'exécution de la requête:\n".$rqt."\n 
			Message d'erreur: ".$this->mysqli->error;
			return false;
		}$this->mysqli->close();		
	}
	public function insertImage($x,$y,$z,$zz=''){
		$this->connexion();
		$rqt="insert into imgs(title, descr,fichier) values('$x','$y','$z')";
		if($this->mysqli->query($rqt))
			return true;
		else{
			$error="Une erreur est survenue à l'exécution de la requête:\n".$rqt."\n 
			Message d'erreur: ".$this->mysqli->error;
			return false;
		}$this->mysqli->close();		
	}
	public function uploadzz($files,$y){
		var_dump($files);
		var_dump($y);
		
		$upload_dir="images/".;
		$upl_dir=IMAGES_UPLOADED;
		// $upload_dir=";
		foreach($files as $k=>$v)://print_r($v);
			$err=0;
			$this->msg_err="Upload réussi";
			// echo count($files);
			if($err==UPLOAD_ERR_OK)
				if($v["type"][0]=='image/jpeg'||$v["type"][0]=='image/png'){
					if($v["type"][0]=='image/jpeg')$ext='jpg';else $ext='png';
					$tmp=$v["tmp_name"][0];
					if(!isset($_POST['img']))$name=$files['upl']["name"][$k];else $name=$_POST['img'].'.'.$ext;
					if(move_uploaded_file($tmp,$y)==false){$err++;$this->msg_err="Erreur lors de l'upload, le fichier '$name' n'a pas pu etre déplacé à: $upload_dir";}
					if(!copy($y,$upl_dir.$name)) echo "La copie $upload_dir$name du fichier a échoué...\n";
					// if(!copy($y,$upload_dir.$y.substr($name,0,count($name)-5).'-cov.'.$ext)) echo "La copie $upload_dir$name du fichier a échoué...\n";
					// $this->creer_vignette($upload_dir.$y.$name,$upload_dir.'min/'.$y.$name,$upload_dir.'min/'.$y.substr($name,0,count($name)-5).'.'.$ext);
					// $this->creer_vignette($upload_dir.$y.substr($name,0,count($name)-5).'-cov.'.$ext,$upload_dir.'min/'.$y.substr($name,0,count($name)-5).'-cov.'.$ext);
				}else{$err++;echo$v["type"][$k];$this->msg_err="Type de fichier uploadé incorrecte: image/jpeg<br/>Entré: ".$v["type"][$k];}	
			else{$err++;$this->msg_err='Erreur, veuillez réessayer.';}	
		endforeach;
		if($err==0)return true; else return false;
	}
	public function uploadz($files,$y){
		
		$upload_dir=IMAGES_DIR_PATHY;
		$upl_dir=IMAGES_UPLOADED;
		// $upload_dir=";
		foreach($files['upl']['error'] as $k=>$v)://print_r($v);
			$err=0;
			$this->msg_err="Upload réussi";
			echo count($files);
			if($err==UPLOAD_ERR_OK)
				if($files['upl']["type"][$k]=='image/jpeg'||$files['upl']["type"][$k]=='image/png'){
					if($files['upl']["type"][$k]=='image/jpeg')$ext='jpg';elseif($files['upl']["type"][$k]=='image/png') $ext='png';
					$tmp=$files['upl']["tmp_name"][$k];
					if(!isset($_POST['img']))$name=$files['upl']["name"][$k];else $name=$_POST['img'].'.'.$ext;
					if(move_uploaded_file($tmp,$upload_dir.$y.$name)==false){$err++;$this->msg_err="Erreur lors de l'upload, le fichier '$name' n'a pas pu etre déplacé à: $upload_dir";}
					if(!copy($upload_dir.$y.$name,$upl_dir.$name)) echo "La copie $upload_dir$name du fichier a échoué...\n";
					if(!copy($upload_dir.$y.$name,$upload_dir.$y.substr($name,0,count($name)-5).'-cov.'.$ext)) echo "La copie $upload_dir$name du fichier a échoué...\n";
					$this->creer_vignette($upload_dir.$y.$name,$upload_dir.'min/'.$y.$name,$upload_dir.'min/'.$y.substr($name,0,count($name)-5).'.'.$ext);
					$this->creer_vignette($upload_dir.$y.substr($name,0,count($name)-5).'-cov.'.$ext,$upload_dir.'min/'.$y.substr($name,0,count($name)-5).'-cov.'.$ext);
				}else{$err++;echo$files['upl']["type"][$k];$this->msg_err="Type de fichier uploadé incorrecte: image/jpeg<br/>Entré: ".$files['upl']["type"][$k];}	
			else{$err++;$this->msg_err='Erreur, veuillez réessayer.';}	
		endforeach;
		if($err==0)return true; else return false;
	}
	
	private function creer_vignette($x,$y){
		
		$image=$x;
		echo$image;
		$vignette=$y;
		$size=getimagesize($image);
		$largeur=$size[0];
		$hauteur=$size[1];
		$maxL=100;
		$maxH=100;
		$image_src=imagecreatefromjpeg($image);
		if($largeur>$maxL||$hauteur>$maxH){
			if($hauteur<=$largeur)$ratio=$maxL/$largeur;else$ratio=$maxH/$hauteur;
		}else $ratio=1;
		$dest=imagecreatetruecolor(round($largeur*$ratio),round($hauteur*$ratio));
		imagecopyresampled($dest,$image_src,0,0,0,0,round($largeur*$ratio),round($hauteur*$ratio),$largeur,$hauteur);
		if(!imagejpeg($dest,$vignette)){$msg_error="création de la vignette echouée";return false;}
		else return true;
		
	}
	public function delete_image($filename){
		
		$this->connexion();
		$path_image=IMAGES_DIR_PATHZ.$filename;
		$path_thumb=IMAGES_VIGNETTES.$filename;
		if(file_exists($path_image)){
			if(!unlink($path_image))
				$this->msg_error[]="Une erreur est survenue lors de la suppression du fichier image:$filename";
		}else $this->msg_error[]="Le fichier image n'existe pas";
		if(file_exists($path_thumb)){
			if(!unlink($path_thumb))
				$this->msg_error[]="Une erreur est survenue lors de la suppression du fichier vignette:$filename";
		}else $this->msg_error[]="Le fichier vignette n'existe pas";
		if(!$this->mysqli->query("delete from imgs where fichier='$filename';"))
			$this->msg_error[]="Une erreur mysql est survenue lors de la suppression de la base de donnée de la clé:$filename";
		
		$this->mysqli->close();
		
	}
	
	
}