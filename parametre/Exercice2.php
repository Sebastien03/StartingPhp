<?php
if (isset($_GET["age"])) {
	echo $_GET["age"];
} else {
	echo "Ce parametre n'existe pas";
}
?>