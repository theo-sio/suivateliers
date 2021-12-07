<?php session_destroy() ; ?>
<!DOCTYPE html>
<html>
<lang="fr">
	
	<head>
	<title>Se connecter</title>
	</head>
	
<br>
	<body>
		<form action="/suivateliers/controller/ctrl-connecter.php" method=POST >
		<label>nom de connexion</label>
		<input name=identifiant type=identifiant></input>
		<label>mot de passe</label>
		<input name=mdp type=password></input>
		
		<button type="submit">Connexion</button>
	</form>
	</body>	
</html>
