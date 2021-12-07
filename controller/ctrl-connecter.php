<?php
	
	$login = $_POST[ 'identifiant' ] ;
	$mdp = $_POST[ 'mdp' ] ;
	
	try {

		$bd = new PDO(
						'mysql:host=localhost;dbname=sbateliers' ,
						'sanayabio' ,
						'sb2021'
			) ;
			
		$sql = 'select numero , nom , prenom '
			 . 'from Client '
			 . 'where adresse_electronique = :login '
			 . 'and mot_de_passe = :mdp' ;
			 
		$st = $bd -> prepare( $sql ) ;
		
		$st -> execute( array( 
								':login' => $login ,
								':mdp' => $mdp 
						) 
					) ;
		$resultat = $st -> fetchall() ;
			
		unset( $bd ) ;
		
		if( count( $resultat ) == 1 ) {
			session_start() ;
			$_SESSION[ 'numero' ] = $resultat[0]['numero'] ;
			$_SESSION[ 'nom' ] = $resultat[0]['nom'] ;
			$_SESSION[ 'prenom' ] = $resultat[0]['prenom'] ;
			
			$_SESSION[ 'login' ] = $login ;
			
			header( 'Location: ../vues/vue-liste-ateliers.php' ) ;
		}
		else {
			header( 'Location: ../index.php?echec=1&login=' . $login ) ;
		}
	}
	catch( PDOException $e ){
		
		header( 'Location: ../index.php?echec=0' ) ;
	}

?>
