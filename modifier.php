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
				
				<!-- Création d'un formulaire pour choisir un musicien -->
				<form action='modif2.php' method="post" >
					</br>
					<label for="nummu">Choisissez un musicien :</label><br />
					<select name="nummu">
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
					</br>
					<!-- Création d'un bouton continuer pour envoyer le formulaire -->
					<input type="submit" value="Continuer" />
				</form>
			
				<!-- Bouton de retour vers la page musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>