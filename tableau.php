<?php
// Exercice 1 //
echo "Exercice 1 : ";
$array = array("janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre");

//Exercice 2 //
echo "<br/>";
echo "Exercice 2 : ";
echo $array[2];

// Exercice 3 //

echo "<br/>";
echo "Exercice 3 : ";
echo $array[4];

// Exercice 4 //

echo "<br/>";
echo "Exercice 4 : ";
$key = 3;
	foreach ($array as $key => $value) {
		$array[$key] = "Julien";
	}
echo $array[3];
?>