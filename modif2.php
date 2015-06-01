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
					Vous pouvez modifier les informations
				</p>
			
				<?php 
				/* Requete qui permet de récupérer le nom de la personne selectionnée et l'afficher dans le champs de texte a modifier */
				$reqnom = $bd->prepare('SELECT Nom FROM personne WHERE Num=?;');
				$reqnom->execute(array($_POST['nummu']));
				$requetenom = $reqnom->fetch();
				
				/* Requete qui permet de récupérer le prenom de la personne selectionnée et l'afficher dans le champs de texte a modifier */
				$reqprenom = $bd->prepare('SELECT Prenom FROM personne WHERE Num=?;');
				$reqprenom->execute(array($_POST['nummu']));
				$requeteprenom = $reqprenom->fetch();
				
				/* Requete qui permet de récupérer la ville de la personne selectionnée et l'afficher dans le champs de texte a modifier */
				$reqville = $bd->prepare('SELECT Ville FROM personne WHERE Num=?;');
				$reqville->execute(array($_POST['nummu']));
				$requeteville = $reqville->fetch();
				
				/* Requete qui permet de récupérer le code postal de la personne selectionnée et l'afficher dans le champs de texte a modifier */
				$reqcodepost = $bd->prepare('SELECT CodePost FROM personne WHERE Num=?;');
				$reqcodepost->execute(array($_POST['nummu']));
				$requetecodepost = $reqcodepost->fetch();
				
				/* Requete qui permet de récupérer le nom de l'instrument de la personne selectionnée et l'afficher dans le champs de texte a modifier */
				$reqinstru = $bd->prepare('SELECT NomInst FROM instrument WHERE NumInst=(SELECT NumInst FROM personne WHERE Num=?);');
				$reqinstru->execute(array($_POST['nummu']));
				$requeteinstru = $reqinstru->fetch();
				?>
				
				<!-- Création d'un formulaire de modification -->
				<form action='valider.php' method="post" >
					<label for="numero">Numero :</label><br />
					<!-- Prends en entrée le numéro inscrit dans la base de données et il n'est pas modifiable -->
					<input type="text" name="numero" value="<?php echo $_POST['nummu'] ?>" readonly='readonly'/><br /><br />
			
					<label for="nomm">Nom :</label><br />
					<!-- Prends en entrée le nom inscrit dans la base de données -->
					<input type="text" name="nomm" placeholder='<?php echo $requetenom['Nom'] ?>'/><br /><br />
			
					<label for="prenomm">Prenom :</label><br />
					<!-- Prends en entrée le prenom inscrit dans la base de données -->
					<input type="text" name="prenomm" placeholder='<?php echo $requeteprenom['Prenom'] ?>'/><br /><br />
			
					<label for="villem">Ville :</label><br />
					<!-- Prends en entrée la ville inscrit dans la base de données -->
					<input type="text" name="villem" placeholder='<?php echo $requeteville['Ville'] ?>'/><br /><br />
			
					<label for="codepostm">Code Postal :</label><br />
					<!-- Prends en entrée le code postal inscrit dans la base de données -->
					<input type="text" name="codepostm" placeholder='<?php echo $requetecodepost['CodePost'] ?>'/><br /><br />
			
					<label for="instrument">Selectionner l'instrument :</label><br />
					<!-- Création d'une liste déroulante contenant le nom des instruments de la base de données -->
					<select name="instrument" placeholder='<?php echo $requetecodepost['CodePost'] ?>'>
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
					<!-- Bouton de validation d'envoi de formulaire -->
					<input type="submit" value="Valider" />
				</form>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>