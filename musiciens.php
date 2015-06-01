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
				
				<!-- Indications concernant les modalités de la page -->
				<p>
					Vous pouvez choisir de découvrir l'identité des musiciens par pupitre ou de modifier les informations de musiciens.
				</p>
		
				<!-- Création du bouton de recherche -->
				<form action='recherchedebut.php' method="post" >
					<input type="submit" value="Rechercher les musiciens" />		
				</form>
		
				<!-- Création du bouton d'inscription -->
				<form action='inscriremusicien.php' method="post" >
					<input type="submit" value="Inscrire un musicien" />		
				</form>

				<!-- Création du bouton de modification -->
				<form action='modifier.php' method="post" >
					<input type="submit" value="Modifier des informations" />		
				</form>
		
				<!-- Création du bouton de suppression -->
				<form action='supprimer.php' method="post" >
					<input type="submit" value="Supprimer un musicien" />		
				</form>
				
				<!-- Création du bouton d'inscription à un évènement -->
				<form action='inscevent.php' method="post" >
					<input type="submit" value="Inscrire un musicien à un évènement" />		
				</form>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	<body>
</html>