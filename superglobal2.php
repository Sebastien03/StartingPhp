<?php
	// Exercice 2 //
	session_start();
	echo "Exercice 2 : ";
	echo "<br/>";
	echo $_SESSION["nom"];
	echo $_SESSION["prenom"];
	echo $_SESSION["age"];
?>
<?php
	// Exercice 3 //
	echo "Regarder les cookie l'exercice se passe ici : ";
	echo "<br/>";
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
?>
<?php
	// Exercice 5 //
$_COOKIE["login"] = $_POST["login"];
$_COOKIE["mdp"] = $_POST["mdp"];

$login= $_POST["login"];
$mdp= $_POST["mdp"];

	if (isset($_COOKIE["login"], $_COOKIE["mdp"])) {
		$_COOKIE["login"] = $_POST["login"];
		$_COOKIE["mdp"] = $_POST["mdp"];
	echo '<form action="superglobal2.php" method="POST">
				<label for="login"></label>
					<p> <input type="text" name="login" value="'.$login.'"> Login </p>
				<label for="mdp"></label>
					<p> <input type="text" name="mdp" value="'.$mdp.'"> Mdp </p>
					<p> <input type="submit" name="envoyer"> Envoyer </p>
				</form>';
	}
?>