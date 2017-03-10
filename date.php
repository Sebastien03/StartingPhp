<?php
	// Exercice 1 //
	echo date("d/m/Y")."<br/>";

	// Exercice 2 //

	echo date("d-m-y")."<br/>";

	// Exercice 3 //

	echo date("l j F Y")."<br/>";

	echo strftime("%A %e %B %Y")."<br/>";;

	// Exercice 4 // 

	echo time()."<br/>";
	echo strtotime("2 march 2016, 15:34:12")."<br/>";

	// Exercice 5 //

	$robert = time();
	$mai = mktime(00, 00, 00, 5, 16, 2016);
	$calcule = ($robert-$mai)/86400;
	$vraiCalcul = explode('.', $calcule);
	echo $vraiCalcul[0]."<br/>";

	// Exercice 6 //

	$nb_jour = date('t',mktime(0, 0, 0, 2, 1, 2016));
	echo $nb_jour;

	// Exercice 7 //


	// Exercice 8 //

?>