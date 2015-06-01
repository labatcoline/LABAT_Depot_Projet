<html>
	<?php

	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclut la même l'entête pour toutes les pages */
	include('head.php'); ?>
 
	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php'); ?>
	
		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
				<!-- Titre de la page -->
				<h1 style="color:Green;">Why Notes Brass Band</h1>
			
				<!-- Description de la page -->
				<p>
					Cette application va nous permettre de gérer la participation des musiciens du groupe lors de différents contrats.
					<br>
						Vous pourrez, dans les différents onglets proposés découvrir les musiciens, ajouter ou supprimer un musicien, modifier ses informations, notre agenda pour venir nous écouter, voir quelques photos de nos anciens contrats, et enfin, vous inscrire à des évenements.
					</br>
				</p>
			</div>
		
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>