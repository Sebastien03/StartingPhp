<?php
session_start();
setcookie('login', $_POST['login'], time() + 365*24*3600, null, null, false, true);
setcookie('mdp', $_POST['mdp'], time() + 365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>php</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			<!-- Exercice 1 -->
				<?php
					echo "Exercice 1 : ";
					echo "<br/>";
					echo $_SERVER['SERVER_ADDR']."<br/>";
					echo $_SERVER['HTTP_USER_AGENT']."<br/>";
					echo $_SERVER["SERVER_NAME"]."<br/>";
				?>
			<!-- Exercice 2 -->
				<?php
					echo "Exercice 2 : ";
					echo "<br/>";
					$_SESSION["nom"] = "Dutripon"."<br/>";
					$_SESSION["prenom"] = "Sebastien"."<br/>";
					$_SESSION["age"] = "19"."<br/>";
				?>
				<a href="superglobal2.php"> lien vers superglobal2.php </a>
				<?php
					echo "<br/>";
				?>
								<!-- Exercice 3 -->
				<?php
					echo "Exercice 3 : ";
					echo "<br/>";
				?>
								<!-- Exercice 4 -->
				<form action="superglobal2.php" method="POST">
				<label for="login"></label>
					<p> <input type="text" name="login"> Login </p>
				<label for="mdp"></label>
					<p> <input type="text" name="mdp"> Mdp </p>
					<p> <input type="submit" name="envoyer"> Envoyer </p>
				</form>
		</body>
	</html>