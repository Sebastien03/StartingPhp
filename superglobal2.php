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
<?php
$_COOKIE["login"] = $_POST["login"];
$_COOKIE["mdp"] = $_POST["mdp"];

	if (isset($_COOKIE["login"])) {
		$_COOKIE["login"] = "azertyuiop";
		setcookie('login', $_COOKIE['login'], time() + 365*24*3600, null, null, false, true);
	} else {
		setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
	}
	if (isset($_COOKIE["mdp"])) {
		$_COOKIE["mdp"] = "blablabla";
		setcookie('mdp', $_COOKIE['mdp'], time() + 365*24*3600, null, null, false, true);
	} else {
		setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
	}
?>