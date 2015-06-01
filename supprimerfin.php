<html>
	<?php

	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclus la même l'entête pour toutes les pages */
	include('head.php'); ?>
 
	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php'); ?>

		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				
				<!-- Titre de la page -->
				<h1 style="color:rgb(232, 24, 198);">Les musiciens</h1>
				<?php
			
				/* On execute la requete suivante : */	
				/* On supprime la ligne de la personne selectionnée dans la liste déroulante précédente */
				$supparticiper = $bd->prepare('DELETE FROM participer WHERE Num=?;');
				$supparticiper->execute(array($_POST['nummu']));
				
				$sup = $bd->prepare('DELETE FROM personne WHERE Num=?;');
				$sup->execute(array($_POST['nummu']));
			
				?>
				<p>La suppression est confirmée !</p>
				<br />
				
				<!-- Création d'un bouton retour vers musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
						
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>