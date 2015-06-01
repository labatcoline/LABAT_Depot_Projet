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
				
				<form action='insceventfinal.php' method="post" >
					</br>
					<label for="numeromusicien">Choisissez un musicien :</label><br />
					<select name="numeromusicien">
						<?php 
						/* Requete qui récupère le numéro, le nom et le prénom de tous les musiciens */
						$request = $bd->query('SELECT Num, Nom, Prenom FROM personne ORDER BY Nom;');
						/* Tant qu'il y a un musicien, on l'affiche */
						while ($donnees = $request->fetch())
						{
							echo ('<option value="'.$donnees['Num'].'">'.$donnees['Num'].' - '.$donnees['Nom'].' '.$donnees['Prenom'].'</option>');
						}
						?>
					</select>
					<br />
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
			
					<br />
					</br>
					<!-- Création d'un bouton continuer pour envoyer le formulaire -->
					<input type="submit" value="Continuer" />
				</form>
				
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
				
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>