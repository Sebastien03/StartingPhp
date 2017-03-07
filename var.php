<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Php</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		// Exercice 1 //
		$nom= "Dutripon";
		// Exercice 2 //
		$prenom= "Sebastien";
		$age = 19;

		echo $nom."<br/>";
		echo $prenom."<br/>";
		echo $age."<br/>";
		// Exercice 3 //
		$kilometre = 1;
		echo $kilometre."<br/>";

		$kilometre = 3;
		echo $kilometre."<br/>";

		$kilometre = 125;
		echo $kilometre."<br/>";
		// Exercice 4 //
		$string = "blabla";
		echo $string."<br/>";
		$int = 19;
		echo $int."<br/>";
		$float = 15.8;
		echo $float."<br/>";
		$bolean = true;
		echo $bolean."<br/>";
		// Exercice 5 //
		$int2 ="";
		echo $int2;
		$int2 = 9; 
		echo $int2."<br/>";
		// Exercice 6 //
		$nom2 = "Dutripon";
		echo ("Bonjour,".$nom2.", ca va ?")."<br/>";
		// Exercice 7 //
		$nom3 = "Dutripon";
		$prenom2 = "Sebastien";
		$age2 = 19;
		echo "Bonjour, ".$nom3." ".$prenom2.", tu as ".$age2." ans";
		?>
	</body>
</html>