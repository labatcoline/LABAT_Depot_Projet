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
					Vous allez pouvoir découvrir l'identité des musiciens par pupitre !
				</p>
		
				<!-- Création d'une liste déroulante contenant tous les instruments enregistrés -->
				<form action='recherche.php' method="post" >
					<label for="instrument">Choissisez un instrument :</label><br />
					<select name="instrument">
					<?php 
						/* Requête qui selectionne les noms des instruments dans la table instrument */
						$request = $bd->query('SELECT NomInst FROM instrument ORDER BY NomInst;');
						/* Tant qu'il y a des valeurs, on les affiche */
						while ($donnees = $request->fetch())
						{
							echo ('<option value="'.$donnees['NomInst'].'">'.$donnees['NomInst'].'</option>');
						}
					?>
					</select>
					</br>
					</br>
					
					<!-- On inscrit "Rechercher" sur le bouton -->
					<input type="submit" value="Rechercher" />
				</form>
				
				<!-- On crée un bouton pour retourner à la page musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>	
			</div>
	  
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
	  
		</div>     
	<body>
</html>