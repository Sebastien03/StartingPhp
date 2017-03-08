<?php
if (isset($_GET["batiment"])) {
	echo $_GET["batiment"]."<br/>";
} else {
	echo "Ca n'existe pas ";
}
if (isset($_GET["salle"])) {
	echo $_GET["salle"];
} else {
	echo "Ca n'existe pas ";
}
?>