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
				<h1 style="color:Green;">Inscription</h1>
				
				<!-- Indications concernant les modalités de la page -->
				<p>
					Sur cette page, vous pouvez vous inscrire à certains de nos évenements (en fonction du nombre de places) !
				</p>
		
				<!-- Formulaire d'inscription -->
				<form action='inscrire.php' method="post" >
					<label for="nom">Nom :</label><br />
					<input type="text" name="nom" /><br /><br />
			
					<label for="prenom">Prenom :</label><br />
					<input type="text" name="prenom" /><br /><br />
			
					<label for="ville">Ville :</label><br />
					<input type="text" name="ville" /><br /><br />
			
					<label for="codepost">Code Postal :</label><br />
					<input type="text" name="codepost" /><br /><br />
			
					<label for="evenement">Selectionner l'évenement :</label><br />
					<!-- Liste déroulante de la ville de l'évènement et de la description -->
					<select name="evenement">
						<?php 
						$request = $bd->query('SELECT VilleEv, Description FROM evenement;');
						/* Tant qu'il y a des évènements, on les affiche */
						while ($donnees = $request->fetch())
						{
							echo ('<option value="'.$donnees['Description'].'">'.$donnees['VilleEv'].', '.$donnees['Description'].'</option>');
						}
						?>
					</select>
					</br>
					</br>
					<!-- Bouton Valider pour envoyer le formulaire -->
					<input type="submit" value="Valider" />
				</form>						
			</div>
			
			<!-- On inclut le pieds de page -->
		<?php include('footer.php'); ?>
		</div>
	</body>	
</html>
