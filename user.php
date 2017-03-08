<?php
// Exercice 3 //
	if (isset($_GET["nom"])) {
		echo $_GET["nom"]."<br/>";
	} 
	if (isset($_GET["prenom"])) {
		echo $_GET["prenom"]."<br/>";
	}

// Exercice 4 //

	if (isset($_POST["nom2"])) {
		echo $_POST["nom2"]."<br/>";
	} 
	if (isset($_POST["prenom2"])) {
		echo $_POST["prenom2"]."<br/>";
	}
?>