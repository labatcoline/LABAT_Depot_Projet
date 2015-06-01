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
					Vous pouvez inscrire un nouveau musicien
				</p>
		
				<!-- Formulaire d'inscription d'un nouveau musicien -->
				<form action='inscriremusicienfinal.php' method="post" >
					<label for="nom">Nom :</label><br />
					<input type="text" name="nom" /><br /><br />
			
					<label for="prenom">Prenom :</label><br />
					<input type="text" name="prenom" /><br /><br />
			
					<label for="ville">Ville :</label><br />
					<input type="text" name="ville" /><br /><br />
			
					<label for="codepost">Code Postal :</label><br />
					<input type="text" name="codepost" /><br /><br />
			
					<label for="instrument">Selectionner l'instrument :</label><br />
					
					<!-- Création d'une liste déroulante qui contient le nom des instruments -->
					<select name="instrument">
					<?php 
						$request = $bd->query('SELECT NomInst FROM instrument ORDER BY NomInst;');
						while ($donnees = $request->fetch())
						{
							echo ('<option value="'.$donnees['NomInst'].'">'.$donnees['NomInst'].'</option>');
						}
					?>
					</select>
					</br>
					</br>
					<input type="submit" value="Valider" />
				</form>
		
				<!-- Bouton qui permet de revenir à la page musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
				
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>
