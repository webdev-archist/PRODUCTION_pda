<?php

	if(!isset($_SESSION))
		session_start();

	if(isset($_POST['moismoins'])) {
		$month = $_SESSION['month'];
		$annee = $_SESSION['annee'];
		$month --;
		if($month == 0) {
			$month = 12;
			$annee --;
		}
	} else if (isset($_POST['moisplus'])) {
		$month = $_SESSION['month'];
		$annee = $_SESSION['annee'];
		$month ++;
		if($month == 13) {
			$month = 1;
			$annee ++;
		}
	} else if (isset($_POST['anneemoins'])) {
		$month = $_SESSION['month'];
		$annee = $_SESSION['annee'];
		$annee --;
	} else if (isset($_POST['anneeplus'])) {
		$month = $_SESSION['month'];
		$annee = $_SESSION['annee'];
		$annee ++;
	} else if(isset($_POST['choisirannee'])) {
		$month = $_SESSION['month'];
		$annee = $_POST['annee'];
	} else if(!isset($_POST['valide'])) {
		$month = date('n');
		$annee = date('Y');
	} else {
		$month = $_SESSION['month'];
		$annee = $_SESSION['annee'];
	}


	$_SESSION['month'] = $month;
	$_SESSION['annee'] = $annee;
	$mois = date('F', strtotime("$month/1/$annee"));
	$nbjourmois = date('t', strtotime("$month/1/$annee"));
?>

<?php
	if(isset($_POST['valide'])) {
		echo "La date choisie est le ", $_POST['valide'], "/", $month, "/", $annee;
	} else {
?>
<style>
		form#calendrier>table input{height: 100%;width: 100%;font-size: 1.4em;text-align: center;padding: 0;cursor:pointer;}
		form#calendrier>table{float:right;}
</style>
	<FORM METHOD='POST' ACTION='' id='calendrier'>
<?php
	echo "<BOLD>$mois $annee</BOLD><BR/>";
?>
<INPUT TYPE='button' NAME="anneemoins" VALUE="<<" />
<INPUT TYPE='button' NAME="moismoins" VALUE="<" />
<INPUT TYPE='button' NAME="moisplus" VALUE=">" />
<INPUT TYPE='button' NAME="anneeplus" VALUE=">>" />
<!--<SELECT NAME='annee'>
<?php
	// for($i = date('Y') - 70; $i <= date('Y') + 20; $i++) {
		// echo "\t<OPTION VALUE='$i'";
		// if($i == $annee)
			// echo " SELECTED ";
		// echo ">$i</OPTION>\n";
	// }
?>
</SELECT>
<INPUT TYPE='button' NAME="choisirannee" VALUE="Choisir cette année">
<BR/>
-->
<TABLE>
<THEAD>
<TR>
<?php
	for($i=1; $i<=7; $i++) {
		echo "<TH>".date("D", strtotime("$month/$i/$annee"))."</TH>";
	}
?>
</TR>
</THEAD>
<TBODY>
<TR>
<?php
	for($i=1; $i<=$nbjourmois; $i++) {
		echo "<TD><INPUT TYPE='button' NAME='valide' VALUE='$i' onclick=\"date.value='$annee-$i-$month'\";/></TD>";
		if($i%7 == 0)
			echo "</TR><TR>";
	}
?>
</TR>
</TBODY>
</TABLE>
	</FORM>
<?php
	}
?>
