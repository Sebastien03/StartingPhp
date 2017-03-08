<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="style.css">
			<title>php</title>
		</head>
		<body>
		<!-- Exercice 1 -->
			<form action="user.php" method="get">
				<p> <input type="text" name="nom" /> nom </p>
				<p> <input type="text" name="prenom" />prenom </p>
				<p> <input type="submit" name="Ok"> Envoyer </p>
			</form>
		<!-- Exercice 2 -->
			<form action="user.php" method="post">
				<p> <input type="text" name="nom" /> nom </p>
				<p> <input type="text" name="prenom" />prenom </p>
				<p> <input type="submit" name="Ok"> Envoyer </p>
			</form>
		</body>
	</html>