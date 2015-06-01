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
					Vous pouvez supprimer un musicien
				</p>
		
				<!-- Création d'un formulaire pour choisir un musicien -->
				<form action='supprimerfin.php' method="post" >
					<label for="nummu">Choisissez un musicien :</label><br />
					
					<!-- Création d'une liste déroulante pour afficher tous les musiciens -->
					<select name="nummu">
					<?php 
						/* Requete qui affiche le numero, nom et prénom des musiciens */
						$request = $bd->query('SELECT Num, Nom, Prenom FROM personne ORDER BY Nom;');
						/* Tant qu'il y a des musiciens, on les affiche */
						while ($donnees = $request->fetch())
						{
							echo ('<option value="'.$donnees['Num'].'">'.$donnees['Num'].' - '.$donnees['Nom'].' '.$donnees['Prenom'].'</option>');
						}
					?>
					</select>
					</br>
					</br>
					<!-- Bouton 'Supprimer' pour envoyer les infos à la page supprimerfin.php -->
					<input type="submit" value="Supprimer" />
				</form>
		
				<!-- Bouton de retour vers musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>	
			</div>
	  
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>     
	<body>
</html>