<?php
// Exercice 1 //
	echo "Exercice 1 : ";
	$result = true;

		function true($result){
			return $result;
		}
	echo true($result);

// Exercice 2 //
	echo "<br/>";
	echo "Exercice 2 : ";
	$chaine= 'coucou';

		function caractere($chaine){
			return $chaine;
		}
	echo caractere($chaine);

// Exercice 3 //
	echo "<br/>";
	echo "Exercice 3 : ";
	$chaine1 = "blabla";
	$chaine2 = "car";
	$chaineFinal;

		function chaine($chaine1, $chaine2, $chaineFinal){
			$chaineFinal= $chaine1.$chaine2;
			return $chaineFinal;
		}
	echo chaine($chaineFinal);
/* Exercice 4 //
	echo "<br/>";
	echo "Exercice 4 : ";
	$nombre1 = 4;
	$nombre2 = 3;
		function difference($nombre1, $nombre2){
			if ($nombre1 > $nombre2) {
				echo $nombre1." est plus granc que ".$nombre2;
			} else if ($nombre2 > $nombre1) {
				echo $nombre1." est plus petit que ".$nombre2;
			} elseif ($nombre2 == $nombre1) {
				echo $nombre1." est egal a ".$nombre2;
			}
			return difference();
		}
		echo difference(); */
?>
