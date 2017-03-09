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
		</body>
	</html>