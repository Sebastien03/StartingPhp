<?php
// Exercice 1 //
$age = 19;
	if ($age >= 18) {
		echo "Vous est majeur"."<br/>";;
	} else {
		echo "Vous etes mineur"."<br/>";;
	}
// Exercice 2 //
$IsEasy = true;
	if ($IsEasy == true) {
		echo "C'est facile"."<br/>";
	} else {
		echo "C'est difficile"."<br/>";
	}
// Exercice 3 // 
$age2 = 19 ;
$genre = "Homme";
	if ($age2 >= 18) {
		if ($genre == "Homme") {
			echo "Vous etes un Homme majeure"."<br/>";
		} 
	}
	if ($age2 < 18) {
		if ($genre == "Homme") {
			echo "Vous etes un Homme mineure"."<br/>";
		}
	}
	if ($age2 >= 18) {
		if ($genre == "Femme") {
			echo "Vous etes une Femme majeure"."<br/>";
		}
	}
	if ($age2 < 18){
		if ($genre == "Femme") {
			echo "Vous etes une Femme mineure"."<br/>";
		}
	}
// Exercice 4 //
$magnetude = 3 ;
	switch ($magnetude) {
		case 1:
			echo "Micro-séisme impossible à ressentir."."<br/>";
			break;
		case 2:
			echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres."."<br/>";
			break;
		case 3:
			echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti."."<br/>"."<br/>";
			break;
		case 4:
			echo " Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats."."<br/>";
			break;
		case 5:
			echo " Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."."<br/>";
			break;
		case 6:
			echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre"."<br/>";
			break;
		case 7:
			echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."."<br/>";
			break;
		case 8:
			echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."."<br/>";
			break;
		case 9:
			echo " Séisme capable de tout détruire sur une très vaste zone."."<br/>";
			break;
	}
// Exercice 5 //
$genre2 = "Homme";
	if ($genre != "Homme") {
		echo "C'est une développeuse"."<br/>";
	} else {
		echo "C'est un developpeur"."<br/>";
	}
// Exercice 6 //
$validite = true;
	if ($validite == false) {
		echo "C'est pas bon"."<br/>";
	} else {
		echo "C'est ok"."<br/>";
	}
// Exercice 7 //
$age3 = 19;
	if ($age3 >= 18) {
		echo "Tu es majeure"."<br/>";
	} else {
		echo "Tu n'es pas majeure"."<br/>";
	}
// Exercice 8 //
$existe;
	if (isset($existe)) {
		echo "C'est ok"."<br/>";
	} else {
		echo "C'est pas bon"."<br/>";
	}
?>