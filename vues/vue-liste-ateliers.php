<?php session_start() ; ?>




<!DOCTYPE html>
<html lang="fr">
	<div style="display: flex; flex-direction: row; justify-content: space-between; background-color: #78c4f9; padding:20px; width: 95%; border-radius:5px ;margin: 0 auto" class="center-div">
        <a href="/suivateliers/index.php">Se déconnecter</a>
        <a><?php echo $_SESSION[ 'nom' ] . ' ' .$_SESSION[ 'prenom' ] ?></a>
        <a href="/sbateliers/vues/vue-consultation-profil.php">Consulter le profil</a>
</div>

		
		

</html>
