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
					echo $_SERVER['SERVER_ADDR']."<br/>";
					echo $_SERVER['HTTP_USER_AGENT']."<br/>";
					echo $_SERVER["SERVER_NAME"]."<br/>";
				?>
			<!-- Exercice 2 -->
				<?php
				session_start();
					$_SESSION["nom"] = "Dutripon"."<br/>";
					$_SESSION["prenom"] = "Sebastien"."<br/>";
					$_SESSION["age"] = "19"."<br/>";
				?>
				<a href="superglobal2.php"> superglobal2 </a>
		</body>
	</html>