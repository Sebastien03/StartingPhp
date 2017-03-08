<?php
// Exercice 1 //
	echo "Exercice 1 : ";

		function true($result= true){
			return $result;
		}
	echo true();

// Exercice 2 //
	echo "<br/>";
	echo "Exercice 2 : ";

		function caractere($chaine="coucou"){
			return $chaine;
		}
	echo caractere();

//Exercice 3 //
	echo "<br/>";
	echo "Exercice 3 : ";
	$chaine1 = "blabla";
	$chaine2 = "car";
	$chaineFinal;

		function chaine($chaine1= "blabla", $chaine2= "car"){
			$chaineFinal= $chaine1." ".$chaine2;
			return $chaineFinal;
		}
	echo chaine();
// Exercice 4 //
	echo "<br/>";
	echo "Exercice 4 : ";

		function difference($nombre1= 5, $nombre2= 5){
			if($nombre1 == $nombre2){
            	echo "Les deux nombres sont identiques";
        	}else if($nombre1 >= $nombre2){
            	echo "Le premier nombre est plus grand";
        	}else if($nombre1 <= $nombre2){
         	   echo "Le premier nombre est plus petit";
        	}
		}
		echo difference(); 

// Exercice 5 //
	echo "<br/>";
	echo "Exercice 5 : ";

		function Concatenation($nb1= 1, $chaine3= "coucou")
		{
			$concat= $nb1." ".$chaine3;
			return ($concat);
		}
		echo Concatenation();
// Exercice 6 //
	echo "<br/>";
	echo "Exercice 6 : ";

		function phrase($nom= "Dutripon", $prenom= "Sebastien", $age= 19){
			$phraseConcat= "Bonjour ".$nom." ".$prenom." tu as ".$age." ans ";
			return ($phraseConcat);
		}	
		echo phrase();
// Exercice 7 //

	echo "<br/>";
	echo "Exercice 7 : ";

		function genre($genre= "Homme", $age= 19){
			if ($genre == "Homme") {
				if ($age >= 18) {
					 echo "Vous etes un homme majeure";
				} else {
					 echo "Vous etes un homme mineur";
				}
			}
			if ($genre == "Femme") {
				if ($age >= 18) {
					 echo "Vous etes une femme majeure";
				} else {
					 echo "Vous etes une femme mineur";
				}
			}
		} 
		echo genre();
// Exercice 8 //
		echo "<br/>";
		echo "Exercice 8 : ";

		function calcule($nb1= 2, $nb2= 45, $nb3= 56){
			$total=$nb1+$nb2+$nb3;
			return($total);
		}
		echo calcule();
?>
