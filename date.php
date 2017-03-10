<?php
	// Exercice 1 //

	echo "Exercice 1 : "."<br>";
	echo date("d/m/Y")."<br/>";

	// Exercice 2 //

	echo "Exercice 2 : "."<br>";
	echo date("d-m-y")."<br/>";

	// Exercice 3 //

	echo "Exercice 3 : "."<br>";
	echo date("l j F Y")."<br/>";

	echo strftime("%A %e %B %Y")."<br/>";;

	// Exercice 4 // 

	echo "Exercice 4 : "."<br>";
	echo time()."<br/>";
	echo strtotime("2 march 2016, 15:34:12")."<br/>";

	// Exercice 5 //

	echo "Exercice 5 : "."<br>";
	$robert = time();
	$mai = mktime(00, 00, 00, 5, 16, 2016);
	$calcule = ($robert-$mai)/86400;
	$vraiCalcul = explode('.', $calcule);
	echo $vraiCalcul[0]."<br/>";

	// Exercice 6 //

	echo "Exercice 6 : "."<br>";
	$nb_jour = date('t',mktime(0, 0, 0, 2, 1, 2016));
	echo $nb_jour."<br/>";

	// Exercice 7 //

	echo "Exercice 7 : "."<br>";
	echo date("d-m-Y", strtotime("+20 days"))."<br/>";

	// Exercice 8 //

	echo "Exercice 8 : "."<br>";
	echo date("d-m-Y", strtotime("-22 days"))."<br/>";

	// Exo calendrier //
	echo "Exercice Calendrier : "."<br>";

	if (isset($_GET["mois"], $_GET["annee"])) {
		$mois = (int) $_GET["mois"];
		$annee = (int) $_GET["annee"];
	} else {
		$mois = (int) date("m");
		$annee =  (int) date("Y");
	}


	$calendrier = new DateTime("$annee-$mois-1");
	$nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
	$numtour= 0;
	switch ($calendrier->format("l")) {
		case 'Monday':
			$index = 0;
			break;
		case 'Tuesday':
			$index = 1;
			break;
		case 'Wednesday':
			$index = 2;
			break;
		case 'Thursday':
			$index = 3;
			break;
		case 'Friday':
			$index = 4;
			break;
		case 'Saturday':
			$index = 5;
			break;
		case 'Sunday':
			$index = 6;
			break;
	}
	$numerosdumois = [];
	for ($i = 0; $i < $index ; $i++) { 
		array_push($numerosdumois, " ");
	}
	for ($numerojour = 1; $numerojour <= $nombreDeJours ; $numerojour++) { 
		array_push($numerosdumois, $numerojour);
	}
	for ($i = 0; $i < 6-$index; $i++) { 
		array_push($numerosdumois, " ");
	}
?>

<link rel="stylesheet" type="text/css" href="style/css/style.css">
<table>
	<tr>
		<td colspan="7"> <?= $calendrier->format("m-Y") ?> </td>
	</tr>
	<tr>
		<td> Lun </td>
		<td> Mar </td>
		<td> Mer </td>
		<td> Jeu </td>
		<td> Ven </td>
		<td> Sam </td>
		<td> Dim </td>
	</tr>

	<?php

	 for ($semaine = 0; $semaine <= 4 ; $semaine++) {
		echo "<tr>";
		for ($jour = 0; $jour <= 6; $jour++) { 

			echo "<td>$numerosdumois[$numtour]</td>";
			$numtour++;
		}
	echo "</tr>";
	} ?>

</table>

<form action="" method="get">
	<select name="mois">
		<option value="1"> Janvier </option>
		<option value="2"> Fevrier </option>
		<option value="3"> Mars </option>
		<option value="4"> Avril </option>
		<option value="5"> Mai </option>
		<option value="6"> Juin </option>
		<option value="7"> Juillet </option>
		<option value="8"> Août </option>
		<option value="9"> Septembre </option>
		<option value="10"> Octobre </option>
		<option value="11"> Novembre </option>
		<option value="12"> Decembre </option>
	</select>
	<select name="annee">
		<?php for ($i = 2000; $i <= 2100 ; $i++) { 
			echo '<option value="'.$i.'"> '.$i.' </option>';
		} ?>
	</select>
	<button type="submit"> OK </button>
</form>