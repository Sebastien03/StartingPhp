<?php
// Exercice 3 //
	if (isset($_GET["nom"])) {
		echo  htmlspecialchars($_GET["nom"])."<br/>";
	} 
	if (isset($_GET["prenom"])) {
		echo htmlspecialchars($_GET["prenom"])."<br/>";
	}

// Exercice 4 //

	if (isset($_POST["nom2"])) {
		echo htmlspecialchars($_POST["nom2"])."<br/>";
	} 
	if (isset($_POST["prenom2"])) {
		 echo htmlspecialchars($_POST["prenom2"])."<br/>";
	}

// Exercice 6 //
	$extensions = array('.png', '.gif', '.jpg', '.jpeg');
	$extension = strrchr($_GET['fichier'], '.');
	if(!in_array($extension, $extensions)){
     echo 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...'."<br/>";
	} else {
		echo "ca fonctionne"."<br/>";
	}
	if (isset($_GET["type"])){
		echo htmlspecialchars($_GET["type"])."<br/>";
	}
	if (isset($_GET["nom3"])){
		echo htmlspecialchars($_GET["nom3"])."<br/>";
	} 
	if (isset($_GET["prenom3"])) {
		 echo htmlspecialchars($_GET["prenom3"])."<br/>";
	}
?>