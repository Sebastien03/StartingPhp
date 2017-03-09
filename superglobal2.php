<?php
	session_start();
	echo $_SESSION["nom"];
	echo $_SESSION["prenom"];
	echo $_SESSION["age"];
?>
<?php
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
?>