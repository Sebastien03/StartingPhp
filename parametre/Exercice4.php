<?php
if (isset($_GET["langage"])) {
	echo $_GET["langage"]."<br/>";
} else {
	echo "Ce parametre n'existe pas"."<br/>";
}
if (isset($_GET["serveur"])){
	echo $_GET["serveur"]."<br/>";
} else {
	echo "Ce parametre n'existe pas"."<br/>";
}
?>