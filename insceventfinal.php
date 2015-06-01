<html>
	<?php
	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclus la même l'entête pour toutes les pages */
	include('head.php'); 
	?>
 
	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php'); ?>

		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
			
				<!-- Titre de la page -->
				<h1 style="color:rgb(232, 24, 198);">Les musiciens</h1>
				<?php
			
				/* On récupère les valeurs du formulaire dans des variables */
				$numero = $_POST['numeromusicien'];
				/* Requete qui selectionne le numero de l'évenement en fonction de la description */
				$numev = $bd->prepare('SELECT NumEv FROM evenement WHERE Description=?;');
				$numev->execute(array($_POST['evenement']));
				$numeroev = $numev->fetch();
				
				/* On insère le musicien dans la table participer */
			
				$bd->beginTransaction();
				$insc = $bd->prepare("INSERT INTO participer (Num, NumEv) VALUES (:NumMusicien, :NumEv)");
				$insc->bindValue(':NumMusicien', $numero['Num']);
				$insc->bindValue(':NumEv', $numeroev['NumEv']);
				$insc->execute();
				$bd->commit();
				?>
				<p>L'inscription est validée !</p>
				
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
				
			</div>
			
			<!-- On inclut le pieds de page -->
		<?php include('footer.php'); ?>
		</div>
	</body>	
</html>