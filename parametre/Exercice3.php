<?php
if ($_GET["dateDebut"]) {
	echo $_GET["dateDebut"]."<br/>";
} else {
	echo "Ce parametre n'existe toujour pas"."<br/>";
}
if ($_GET["dateFin"]) {
	echo $_GET["dateFin"];
} else {
	echo "Ce parametre n'existe toujour pas"."<br/>";
}
?>