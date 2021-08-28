<?php
/*
	EXECUTER LES REGEXP SUIVANTES POUR QUE LES ASSETS CORRESPONDENT PRECISEMENT AU NOM DE DOMAINE (qu'il y ai écrit en dur le nom de domaine dans chaque asset, mais suivit du reste de l'uri)
	ex:
	$tmp="http://librairie-puissance-divine.ci"
	$tmp_="pda"
	`src="/"` par `src="$tmp\/reste-uri`
	`href="/"` par `href="$tmp\/reste-uri`
*/
	
	function scriptjsTab($x,$y=-1,$z="",$zz){$keep=$x;
	// print_r($x);
		// $x = = array |||| $x = = string &&&& $y = = choix {-1:sinon||!=-1:si} &&&& $z(si!=-1) = = nom_varJS
		
		// si $y=-1 n'est pas défini à l'appel, c'est pour créer des instances type "var = machin;" dans js. Si $x est un array il contient des string de ce type: "var cpt=1;" ou des valeurs nus qui seront présentés comme ci-avant.
		//(( $x = = array |||| $x = = string )) 
		// si $y=1 (alors $z est défini) est défini à l'appel, c'est pour créer un array dans js ($z c'est le nom de la variable dans js)
		// (( $x = = array &&&& $y ! = -1 &&&& $z = = nom_varJS ))
		// $cc=0;if(is_array($x)){
			// foreach($x as $k=>$v){
				// while(is_array($v)){
					// if($cc!=0){next($v);$temp.="new Array(";}
					// $v=current($v);	
					// $cc++;
				// }
				// $cc=0;
			// }
			$temp='';
			$cc=0;$ccc=0;
			if(is_array($x))//$x="var ".implode($x,";var ").";";
				if(is_array(current($x)))
					if($y==-1)
						foreach($x as $k=>$v){
							$temp="new Array(";
							if($cc==count($x))$temp="\"".implode("\",\"",$v)."\")";
							else{$cc++;$temp="\"".implode("\",\"",$v)."\"),";}
						}
					else{
						$temp="{";
						foreach($x as $k=>$v){
							if($cc==count($x)-1){$ccc=0;
								foreach($v as $kk=>$vv){
									if(gettype($vv)=='string')$glue="\"";else $glue="";
									if($ccc==count($v)-1)
										$temp.="\"$kk\":".$glue."$vv".$glue."}";
									else $temp.="\"$kk\":".$glue."$vv".$glue.",\n";
									// echo $ccc." v ".count($v)-1 ." xvx " ;
									// print_r($v);count($v);
									// echo count($v)-1;
									// echo 'x'.$ccc.' ';
									$ccc++;
								}
							}else{$ccc=0;
							//echo count($vv)." ";print_r($vv);
								foreach($v as $kk=>$vv){
									if(gettype($vv)=='string')$glue="\"";else $glue="";
									if($ccc==count($v)-1)
										$temp.="\"$kk\":$glue $vv $glue},{";
									else $temp.="\"$kk\":".$glue."$vv".$glue.",\n";
									$ccc++;
								}
							}
							// echo$cc." ".(count($x)-1)." xxx " ;
							$cc++;
						}
						$cc=0;
					}
				elseif($y==-1)$temp="'".implode("','",$x)."'";
					else{ $temp='{';foreach($x as $k=>$v)
						if($cc==count($x)-1)
							$temp.="\"$k\":\"$v\"}";
						else{$temp.="\"$k\":\"$v\",";$cc++;}
						
					}
// var tab_scriptjsTab=new Array({"id_type":" 1 ","Annee":" 2011-2012 ","francais":" &Eacute;tudiant en licence pro <a href='http://lp-imash.unice.fr' onclick='window.open(this.href.substring(this.href.indexOf('http')));return false;'>IMAPP </a>(Informatique Multim&eacute;dias Appliqu&eacute;s). Cr&eacute;ation et gestion de site web. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" 2007-2010 ","francais":" Dipl&ocirc;m&eacute; en licence <a href='http://math.unice.fr/~tikhonen/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>MASS</a> (Math&eacute;matiques App. aux Sciences Sociales). Math&eacute;matiques, probabilit&eacute;, &eacute;conomie, informatique. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" 2006-2007 ","francais":" &Eacute;tude en IUT, formation <a href='http://rt.unice.fr/RT/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>R&T</a> (r&eacute;seaux et t&eacute;l&eacute;communication). ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" Juin 2006 ","francais":" Obtention Baccalaur&eacute;at scientifique Fran&ccedil;ais. (acad&eacute;mie d'Amiens, Compi&egrave;gne, OISE). ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" D&eacute;cembre 2012 ","francais":" Stage WebDesigner dans la soci&eacute;t&eacute; <a href='http://www.bexter.fr/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>Bexter</a> (La Seyne/Mer) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" Septembre 2012 ","francais":" Plonge restaurant "Les2Soeurs" (St Cyr/Mer) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" 2011-2012 ","francais":" Livreur scooter MisterPizza (2rue Barla, NICE) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2011 ","francais":" Livreur scooter MamboPizza (99 bld Californie,NICE) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" 2009-2010 ","francais":" Sondeur au CSA; Street-marketing (France-Soir,DirectNice) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2008 ","francais":" Pizza&iuml;olo dans le restaurant O'staff, av. JeanMedecin. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2007 ","francais":" Encadreur en colonie de vacance, enfant 9-18ans. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Anglais ","francais":" Bon niveau: &eacute;crit, parl&eacute;. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Espagnol ","francais":" Bonnes bases: &eacute;crit. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Japonais ","francais":" Debutant. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Hobbies ","francais":" Voyages, lecture, jeux vid&eacute;o, sport, cin&eacute;ma, th&eacute;&acirc;tre ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Sport ","francais":" Jogging et Natation. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Musique ","francais":" Zarb, Guitare ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" 2011-2012 ","francais":" &Eacute;tudiant en licence pro <a href='http://lp-imash.unice.fr' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>IMAPP </a>(Informatique Multim&eacute;dias Appliqu&eacute;s). Cr&eacute;ation et gestion de site web. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" 2007-2010 ","francais":" Dipl&ocirc;m&eacute; en licence <a href='http://math.unice.fr/~tikhonen/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>MASS</a> (Math&eacute;matiques App. aux Sciences Sociales). Math&eacute;matiques, probabilit&eacute;, &eacute;conomie, informatique. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" 2006-2007 ","francais":" &Eacute;tude en IUT, formation <a href='http://rt.unice.fr/RT/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>R&T</a> (r&eacute;seaux et t&eacute;l&eacute;communication). ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 1 ","Annee":" Juin 2006 ","francais":" Obtention Baccalaur&eacute;at scientifique Fran&ccedil;ais. (acad&eacute;mie d'Amiens, Compi&egrave;gne, OISE). ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" D&eacute;cembre 2012 ","francais":" Stage WebDesigner dans la soci&eacute;t&eacute; <a href='http://www.bexter.fr/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>Bexter</a> (La Seyne/Mer) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" Septembre 2012 ","francais":" Plonge restaurant "Les2Soeurs" (St Cyr/Mer) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" 2011-2012 ","francais":" Livreur scooter MisterPizza (2rue Barla, NICE) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2011 ","francais":" Livreur scooter MamboPizza (99 bld Californie,NICE) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" 2009-2010 ","francais":" Sondeur au CSA; Street-marketing (France-Soir,DirectNice) ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2008 ","francais":" Pizza&iuml;olo dans le restaurant O'staff, av. JeanMedecin. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 2 ","Annee":" &Eacute;t&eacute; 2007 ","francais":" Encadreur en colonie de vacance, enfant 9-18ans. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Anglais ","francais":" Bon niveau: &eacute;crit, parl&eacute;. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Espagnol ","francais":" Bonnes bases: &eacute;crit. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 3 ","Annee":" Japonais ","francais":" Debutant. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Hobbies ","francais":" Voyages, lecture, jeux vid&eacute;o, sport, cin&eacute;ma, th&eacute;&acirc;tre ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Sport ","francais":" Jogging et Natation. ","anglais":"  ","espagnol":"  ","japonais":"  "}{"id_type":" 4 ","Annee":" Musique ","francais":" Zarb, Guitare ","anglais":"  ","espagnol":"  ","japonais":"  "});
		// echo$temp;
		if($z=="")scriptjs("var tab_scriptjsTab=new Array(".$temp.");");		
		elseif(isset($zz))	return$z.'=new Array('.$temp.');';	
		elseif(is_string($z))	scriptjs('var '.$z.'=new Array('.$temp.');');	
		else return $temp;
	}
	function scriptjsTab2($x,$y=-1,$z=""){$keep=$x;
	// print_r($x);
		// $x = = array |||| $x = = string &&&& $y = = choix {-1:sinon||!=-1:si} &&&& $z(si!=-1) = = nom_varJS
		
		// si $y=-1 n'est pas défini à l'appel, c'est pour créer des instances type "var = machin;" dans js. Si $x est un array il contient des string de ce type: "var cpt=1;" ou des valeurs nus qui seront présentés comme ci-avant.
		//(( $x = = array |||| $x = = string )) 
		// si $y=1 (alors $z est défini) est défini à l'appel, c'est pour créer un array dans js ($z c'est le nom de la variable dans js)
		// (( $x = = array &&&& $y ! = -1 &&&& $z = = nom_varJS ))
		// $cc=0;if(is_array($x)){
			// foreach($x as $k=>$v){
				// while(is_array($v)){
					// if($cc!=0){next($v);$temp.="new Array(";}
					// $v=current($v);	
					// $cc++;
				// }
				// $cc=0;
			// }
			$cc=0;$ccc=0;
			if(is_array($x))//$x="var ".implode($x,";var ").";";
				if(is_array(current($x)))
					if($y==-1)
						foreach($x as $k=>$v){
							$temp="new Array(";
							if($cc==count($x))$temp="\"".implode("\",\"",$v)."\"));";
							else{$cc++;$temp="\"".implode("\",\"",$v)."\"),";}
						}
					else{
						$temp="new Array(";
						foreach($x as $k=>$v){
							if($cc==count($x))foreach($v as $kk=>$vv)$temp.="\"$kk\"=>\"$vv\");";
							else{foreach($v as $kk=>$vv)if($ccc==count($v))$temp.="\"$kk\"=>\"$vv\"),";else $temp.="\"$kk\"=>\"$vv\",";$cc++;}
							$cc=0;$ccc=0;
						}
					}
				elseif($y==-1)$temp="'".implode("','",$x)."'";
					else foreach($x as $k=>$v)if($cc==count($x))$temp.="'$k'=>'$v'";else{$temp.="'$k'=>'$v',";$cc++;}
// var tab_scriptjsTab=new Array(new Array("id_type"=>"1","Annee"=>"2011-2012","francais"=>"&Eacute;tudiant en licence pro <a href='http://lp-imash.unice.fr' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>IMAPP </a>(Informatique Multim&eacute;dias Appliqu&eacute;s). Cr&eacute;ation et gestion de site web.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"2007-2010","francais"=>"Dipl&ocirc;m&eacute; en licence <a href='http://math.unice.fr/~tikhonen/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>MASS</a> (Math&eacute;matiques App. aux Sciences Sociales). Math&eacute;matiques, probabilit&eacute;, &eacute;conomie, informatique.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"2006-2007","francais"=>"&Eacute;tude en IUT, formation <a href='http://rt.unice.fr/RT/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>R&T</a> (r&eacute;seaux et t&eacute;l&eacute;communication).","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"Juin 2006","francais"=>"Obtention Baccalaur&eacute;at scientifique Fran&ccedil;ais. (acad&eacute;mie d'Amiens, Compi&egrave;gne, OISE).","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"D&eacute;cembre 2012","francais"=>"Stage WebDesigner dans la soci&eacute;t&eacute; <a href='http://www.bexter.fr/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>Bexter</a> (La Seyne/Mer)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"Septembre 2012","francais"=>"Plonge restaurant "Les2Soeurs" (St Cyr/Mer)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"2011-2012","francais"=>"Livreur scooter MisterPizza (2rue Barla, NICE)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2011","francais"=>"Livreur scooter MamboPizza (99 bld Californie,NICE)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"2009-2010","francais"=>"Sondeur au CSA; Street-marketing (France-Soir,DirectNice)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2008","francais"=>"Pizza&iuml;olo dans le restaurant O'staff, av. JeanMedecin.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2007","francais"=>"Encadreur en colonie de vacance, enfant 9-18ans.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Anglais","francais"=>"Bon niveau: &eacute;crit, parl&eacute;.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Espagnol","francais"=>"Bonnes bases: &eacute;crit.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Japonais","francais"=>"Debutant.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Hobbies","francais"=>"Voyages, lecture, jeux vid&eacute;o, sport, cin&eacute;ma, th&eacute;&acirc;tre","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Sport","francais"=>"Jogging et Natation.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Musique","francais"=>"Zarb, Guitare","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"2011-2012","francais"=>"&Eacute;tudiant en licence pro <a href='http://lp-imash.unice.fr' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>IMAPP </a>(Informatique Multim&eacute;dias Appliqu&eacute;s). Cr&eacute;ation et gestion de site web.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"2007-2010","francais"=>"Dipl&ocirc;m&eacute; en licence <a href='http://math.unice.fr/~tikhonen/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>MASS</a> (Math&eacute;matiques App. aux Sciences Sociales). Math&eacute;matiques, probabilit&eacute;, &eacute;conomie, informatique.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"2006-2007","francais"=>"&Eacute;tude en IUT, formation <a href='http://rt.unice.fr/RT/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>R&T</a> (r&eacute;seaux et t&eacute;l&eacute;communication).","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"1","Annee"=>"Juin 2006","francais"=>"Obtention Baccalaur&eacute;at scientifique Fran&ccedil;ais. (acad&eacute;mie d'Amiens, Compi&egrave;gne, OISE).","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"D&eacute;cembre 2012","francais"=>"Stage WebDesigner dans la soci&eacute;t&eacute; <a href='http://www.bexter.fr/' onclick='window.open(this.href.substring(this.href.indexOf("http")));return false;'>Bexter</a> (La Seyne/Mer)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"Septembre 2012","francais"=>"Plonge restaurant "Les2Soeurs" (St Cyr/Mer)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"2011-2012","francais"=>"Livreur scooter MisterPizza (2rue Barla, NICE)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2011","francais"=>"Livreur scooter MamboPizza (99 bld Californie,NICE)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"2009-2010","francais"=>"Sondeur au CSA; Street-marketing (France-Soir,DirectNice)","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2008","francais"=>"Pizza&iuml;olo dans le restaurant O'staff, av. JeanMedecin.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"2","Annee"=>"&Eacute;t&eacute; 2007","francais"=>"Encadreur en colonie de vacance, enfant 9-18ans.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Anglais","francais"=>"Bon niveau: &eacute;crit, parl&eacute;.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Espagnol","francais"=>"Bonnes bases: &eacute;crit.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"3","Annee"=>"Japonais","francais"=>"Debutant.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Hobbies","francais"=>"Voyages, lecture, jeux vid&eacute;o, sport, cin&eacute;ma, th&eacute;&acirc;tre","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Sport","francais"=>"Jogging et Natation.","anglais"=>"","espagnol"=>"","japonais"=>"","id_type"=>"4","Annee"=>"Musique","francais"=>"Zarb, Guitare","anglais"=>"","espagnol"=>"","japonais"=>"",);
		// echo$temp;
		if($z=="")scriptjs("var tab_scriptjsTab=new Array(".$temp.");");		
		else	scriptjs('var '.$z.'=new Array('.$temp.');');		
	}
	
	function scriptjsA($x,$y=0,$z=""){
		// $x = = array &&&& $y = = choix {0:sinon||1:si} &&&& $z = = nom_varJS
		// si $y=1 (alors $z est défini) est défini à l'appel, c'est pour créer un array dans js (c'est le nom de la variable dans js)
		// sinon (si $y=0) le array $x contient des string de ce type: "var cpt=1;"
		if($y==0)$y="";
		else $y="','";
		$x="'".implode($x,$y);
		if($y=="")scriptjs($x."'");		
		else	scriptjs('var '.$z.'=new Array('.$x.'fin\');</script>');		
	}
	function scriptjs($x){
		echo'<script type="text/javascript">'.$x.'</script>';		
	}

	function giveDateFr($timestamp,$typeD='',$typeH=''){
	$cpt='';
	// echo$timestamp;
			if(strpos($timestamp,':')!==false)
					$heure=substr($timestamp,11);
			else $heure='';
			if(strlen($timestamp)>10)
					$jour=substr($timestamp,0,10);
			else $jour='';
			switch($typeD){
					case'*':break;
					case'abrev':break;
					case'abrevEn':
							$jour =	substr($jour,8,2).'/'.substr($jour,5,2).'/'.substr($jour,0,4);
					break;
					case'fullEn':
							if(strlen($timestamp)>10)
									$jour = trans3(date('D',mktime(0,0,0,intval(substr($jour,5,2)),intval(substr($jour,8,2)),intval(substr($jour,0,4)))))." ".substr($jour,8,2)." ".trans1(substr($jour,5,2))." ".substr($jour,0,4);
					break;
					default:break;
			}
			if($heure!='')
					switch($typeH){
							case'*':break;
							case'abrevEn':
									$heure=substr($heure,0,(count($heure)-3));
									$heure = ' à '.preg_replace('/:/','H',$heure,1);$heure=preg_replace('/:/','m',$heure,1);
							break;
							case'fullEn':
									$heure = ' à '.preg_replace('/:/',' heures, ',$heure,1);$heure=preg_replace('/:/',' minutes et ',$heure,1);$heure.=' secondes';
							break;
							default:break;
					}
					
					return$jour.$heure;
			
	}
	function money($s){
	// $ss=(int) $s;
			// if(gettype($s)!='integer'){
				if(strlen($s)<4)return $s.' Fcfa';
				else if(strlen($s)<7)return substr($s,0,strlen($s)-3).'.'.substr($s,strlen($s)-3).' Fcfa';
			// }else return $s;
	}

function numero_tel($tel,$deux=''){$r='';

		// if(x.length%2==0)
				for($i=0;$i<=(count($tel)-2);$i+=2){
						// $rr=$i+2;
						$r.=substr($tel,$i,$i+2).' ';
				}
		// alert(r);
		if($deux!='')
		return '00'.$deux.' '.$r;
		else return $r;
}

function sql($x,$y=array(),$z=array()){$_SESSION['sql']=array();
	$cpt=array();
	// echo"yooooooooooooo";
	// echo gettype($z);
	$mysqli=$_SESSION['mysqli'];
	// $mysqli=new mysqli('localhost','SuperUser','ueLy68_3',"pda");
	// $mysqli=new mysqli('localhost','root_pda_website','oEc7x5?7','admin_pda');
	
	// $connexion = mysql_connect('sql210.byethost12.com', 'b12_14735210', 'bigcyri');
	// mysql_select_db('b12_14735210_portfolioo');
	if($sql=$mysqli->query('show tables'))
		while($row=$sql->fetch_array())
			$cpt[]=$row["Tables_in_$x"];
			// $cpt[]=$row['Tables_in_b12_14735210_portfolioo'];
	// print_r($cpt);
	$i=true;
	foreach($cpt as $k=>$v){
		if($i){$_SESSION['sql'][$v]=array();$i=!$i;}
				if(!in_array($v,$y)){
						if($sql=$mysqli->query('select * from '.$v))
								while($row=$sql->fetch_array())
										$_SESSION['sql'][$v][]=$row;
				}
	}$i=0;
	if(isset($z)){
			// var_dump($z);
			foreach($z as $k=>$v){
				// echo$v;
				if($sql=$mysqli->query($v))
				// if($sql=mysql_query($v))
					while($row=$sql->fetch_array())
					// while($row=mysql_fetch_assoc($sql))
							$_SESSION['sql']["sql$k"][]=$row;
				else echo$v."!!!!!!";
				// echo"||sql$k||";
			}
	}
	// print_r($_SESSION['sql']);
	
	// foreach($_SESSION['sql'] as $k=>$v){
		// echo$k.'<br/>';print_r($v);echo"<br/><br/>";
	// }
}



function getBrowser() 
{ 
    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
        $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $bname = 'Google Chrome'; 
        $ub = "Chrome"; 
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $bname = 'Apple Safari'; 
        $ub = "Safari"; 
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 
    } 
    
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
    
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
    
    return array(
        'userAgent' => $u_agent,
		// 'name'      => $bname,
        'name'      => $ub,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
function wd_remove_accents($str, $charset='utf-8')
{
    $str = htmlentities($str, ENT_NOQUOTES, $charset);
    
    $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
    $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
    $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères
    
    return $str;
} 
function bal($x,$y,$z=0,$zz=0){
// echo$x;


		if(is_array($x))
		{		switch($x[0]){
						case"iframe":
								// $attribut='';
								// if(isset($x[2])){
										// if(is_array($x[2]))
												// foreach($x[2] as $v)
														// $attribut.="$k='$v' ";
								// }else {$attribut.='';}
								
								// $attributs='';
								// if(is_array($y))
										// foreach($y as $v)
												// $attributs.="$k='$v' ";
										
								// elseif($y!=""){$attributs=$y;}else {$attributs="";}
								$cpt="<".$x[0]." src='".$x[1]."'></iframe>";
						break;
						case"img":
								$attribut='';
								if(isset($x[2])){
										if(is_array($x[2]))
												foreach($x[2] as $v)
														$attribut.="$k='$v' ";
								}else {$attribut.='';}
								
								$attributs='';
								if(is_array($y))
										foreach($y as $k=>$v)
												$attributs.=$k.'="'.$v.'" ';
										
								elseif($y!=""){$attributs=$y;}else {$attributs="";}
								$cpt="<".$x[0]." src='".$x[1]."' $attribut $attributs />";
						break;
						case"video":
								$texte='';
								$attribut='';
								$attributs='';
								// var_dump($y);
								if(isset($x[2])){
										if(is_array($x[2]))
												foreach($x[2] as $k=>$v)
														$attribut.="$k='$v' ";
								}else {$attribut.='';}
								if(is_array($y))
										foreach($y as $k=>$v)
												if($k=="title")	$attributs.=$k.'="'.$v.'" ';
												else		$texte=$v;
								elseif($y!=""){$texte=$y;$attributs='';}else {$attributs="";}
								
								if($z!=0){
										$cpt="<".$x[0]." title=\"$texte\" $attribut $attributs >";
										if(is_array($z))
												foreach($z as $v)
														$cpt.="<source src='".$x[1]."$v' type='video/$v'>";
								}
								else	{$ext=substr($x[1],(strlen($x[1])-3));
										$cpt="<".$x[0]." controls title=\"$texte\" $attribut $attributs >";
										$cpt.="<source src='".$x[1]."' type='video/$ext'>";}
								$cpt.="$texte</video>";
						break;
						default:break;
				}	echo$cpt;
		}else{
				if(is_array($y))	$y=$y[rand(0,count($y))];
				if($z==-1)	return "<$x>$y</$x>";
				else	echo "<$x>$y</$x>";
		}
}

function fildariane($x,$y="",$z="")
{				if($y!="")if(isset($_GET['panier']))echo"<$y id='h1panier'>";else echo"<$y>";
				else	if(isset($_GET['panier']))echo"<h1 id='h1panier'>";else echo"<h1>";
				$keyw=array();
				$keywz=array();
				$tmp=explode(',',utf8_encode($x['keyword']));
				// var_dump($tmp);
				// echo$x['keyword'];
				$j=0;
				for($i=0;$i<5;$i++){	$j=0;$keyw[$i]="\"";$keywz[$i]="\"";
						while($j<5){	$keyw[$i].=$tmp[rand(0,count($tmp)-1)].", ";$keywz[$i].="Puissance Divine : ".$tmp[rand(0,count($tmp)-1)].", ";	$j++;	}
						$keyw[$i].="\"";$keywz[$i].="\"";
				}
				echo"<a href='.' title=".$keyw[rand(0,4)]."><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]." title=".$keyw[rand(0,4)]." width='1'/>Accueil</a>";
				if(isset($_GET['menu']))
						switch($_GET['menu']){
								case"objectifs":
										echo"><a href='.?menu=priere' title=".$keyw[rand(0,4)]."><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]." title=".$keywz[rand(0,4)]." width='1'/>Nos objectifs</a>";
								break;
								case"retraites-de-priere-spirituelles-abidjan":
										echo"><a href='.?menu=priere' title=".$keyw[rand(0,4)]."><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]." title=".$keywz[rand(0,4)]." width='1'/>Retraites et Prière spirituelles</a>";
								break;
								case"retraite-de-priere-spirituelle-esprit-saint-gregorienne":case"retraite-spirituelle-abidjan-week-ends-rosaire":case"location-espace-de-priere-abidjan":case"assistance-spirituelle-abidjan":
										if($_GET['menu']=="retraite-de-priere-spirituelle-esprit-saint-gregorienne"){$a="Retraite Grégorienne ou à l'esprit-saint";}
										elseif($_GET['menu']=="retraite-spirituelle-abidjan-week-ends-rosaire"){$a="Weekend du Rosaire";}
										elseif($_GET['menu']=="location-espace-de-priere-abidjan"){$a="Louer espace spirituel";}
										else{$a="Demande prière d'intercession";}
								echo"><a href='.?menu=priere' title=".$keyw[rand(0,4)]."><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]." width='1'/>Retraites et Prière spirituelles</a>";
								echo"><a href='.?menu=".$_GET['menu']."' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>$a</a>";
								break;
								case"enseignements-spirituels-chretien-catholique":
								echo"><a href='.?menu=enseignements' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>Enseignements spirituels</a>";
								break;
								case"archive_enseignements":
								echo"><a href='.?menu=enseignements' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>Enseignements spirituels</a>";
								echo"><a href='.?menu=archive_enseignements' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>Liste d'Enseignements</a>";
								break;
								case"vente-en-ligne":
								echo"><a href='.?menu=vente' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/><strong>Ecommerce</strong></a>";
								break;
								case"vente-en-ligne-publications-chretiennes":case"vente-en-ligne-objets-religieux-catholique":
										if($_GET['menu']=="vente-en-ligne-objets-pieux"){$a="Objets de piété";}
										else{$a="Publications chrétiennes";}
								echo"><a href='.?menu=vente' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/><strong>Ecommerce</strong></a>";
								echo"><a href='.?menu=".$_GET['menu']."' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>$a</a>";
								break;
								case"lieux-activites":
								echo"><a href='.?menu=".$_GET['menu']."' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>Lieux PuissanceDivine</a>";
								break;
								case"puissance-divine-librairie":case"puissance-divine-sanctuaire":case"puissance-divine-fraternite":case"puissance-divine-fraternite-librairie-sanctuaire":
										if($_GET['menu']=="puissance-divine-librairie"){$a="Librairie Puissance Divine";}
										elseif($_GET['menu']=="puissance-divine-sanctuaire"){$a="Bolobi";}
										elseif($_GET['menu']=="puissance-divine-fraternite"){$a="Fraternité PuissanceDivine d'Amour";}
										else{$a="lieux Puissance Divine Abidjan";}
								echo"><a href='.?menu=lieux-activites' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  width='1'/>Lieux PuissanceDivine</a>";
								echo"><a href='.?menu=".$_GET['menu']."' title='Ecommerce religieux catholique $a'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>$a</a>";
								break;
								default:break;
						}
				if(isset($_GET['produit-religieux']))
						if(isset($z)){
								if($z['user_name']!='publications'){$a="Objets de piété";}else{$a="Publications chrétiennes";}
								echo"><a href='.?menu=vente' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  style='width:1px'/><strong>Ecommerce</strong></a>";
								echo"><a href='.?vente-en-ligne/index.php?produit-religieux=".$_GET['produit-religieux']."' title=".$keyw[rand(0,4)]." ><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt=".$keywz[rand(0,4)]."  title=".$keywz[rand(0,4)]."  style='width:1px'/><strong>".rmv_balise_($z[$_SESSION['langue']])."</strong></a>";
						}
				if(isset($_GET['cle']))
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Confirmation</a>";
				if(isset($_GET['panier']))
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier</a>";
				if(isset($_POST['panier'])){
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier</a>";
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier Etape 1</a>";
				}
				if(isset($_POST['adresse_comp'])){
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier</a>";
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier Etape 2</a>";
						echo"><a href='.?panier=panier' title='Ecommerce religieux catholique, votre panier shopping'><img src='./images/ecommerce-catholique-saint-esprit-Dieu-amour.png' alt='Puissance Divine : Ecommerce de produits religieux chrétiens' title='articles chrétien: sainte bible, livre chrétien, édition puissance divine, icone statue et grotte religieuse etc...' width='1'/>Panier Etape 3</a>";
				}
				if($y!="")echo"</$y>";
				else echo"</h1>";
}
function trouver_date($semaine,$annee)
{
if(strftime("%W",mktime(0,0,0,01,01,$annee))==1)
$mon_mktime = mktime(0,0,0,01,(01+(($semaine-1)*7)),$annee);
else
$mon_mktime = mktime(0,0,0,01,(01+(($semaine)*7)),$annee);

$decalage = 0 ;

if(date("w",$mon_mktime)==0)
$decalage = (6*60*60*24);

if(date("w",$mon_mktime)>1)
$decalage = ((date("w",$mon_mktime)-1)*60*60*24);

$lundi = $mon_mktime - $decalage;
//$dimanche = $lundi + (6*60*60*24);

for ($a=0;$a<7;$a++)
{
$dateSemaine[$a] = $lundi + ($a*60*60*24);
$dateSemaine[$a] = date("Y-m-d",$dateSemaine[$a]);
}

return $dateSemaine;
}

function strpos_array($haystack, $needles) {
    if ( is_array($needles) ) {
        foreach ($needles as $str) {
            if ( is_array($str) ) {
                $pos = strpos_array($haystack, $str);
            } else {
                $pos = strpos($haystack, $str);
            }
            // if ($pos !== FALSE) {
                return $pos;
            // }
        }
    } else {
        return strpos($haystack, $needles);
    }
}
function rmv_balise_($haystack) {//echo strlen($haystack);
		$i=0;while(($tmp=strpos($haystack,'<'))!==false){$tmpbis=$tmp;//echo $haystack."|||".$tmp.substr($haystack,0,$tmp)."<br/>";
				while(($rr=substr($haystack,$tmpbis,1))!='>'&&$i==0){if($tmpbis<strlen($haystack))$tmpbis++;else $i=1;}
				$haystack=substr($haystack,0,$tmp).substr($haystack,$tmpbis+1);
				// echo $haystack."|||".$tmpbis."!=".strlen($haystack)."<br/>";
				$i=0;
				// echo $haystack."<br/>";
		}//echo$i;
		return$haystack;
}
function H_skip($x,$y) {
//fonction a faire, retire les balises ouvrantes et fermantes de la balise $y
}
function HU_skip($x,$y) {
//fonction à améliorer
		$tmp="<$y/>";
		return str_replace($y," ",$x);		
}
function next_escape_($x,$y) {
		while(substr($y,$x,1)!=' ')$x++;
		return substr($y,0,$x);
}
function next_escape($x,$y) {
		while(substr($y,$x,1)!=' ')$x++;
		echo substr($y,0,$x);
}
?>