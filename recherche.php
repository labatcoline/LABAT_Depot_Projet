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
					Les musiciens du pupitre de <?php echo $_POST['instrument'] ?> sont :
				</p>
				<?php 
					
					/* Requete qui selectionne les noms et prenoms des personnes jouant de l'instrument selectionné */
					$personne = $bd->prepare('SELECT Nom, Prenom FROM personne WHERE NumInst=(SELECT NumInst FROM instrument WHERE NomInst=?) ORDER BY Nom;');
					$personne->execute(array($_POST['instrument']));
				?>
				
				<!-- On crée un tableau -->
				<table data-url="data1.json" data-height="299">
				
					<!-- Propriétés des colonnes du tableau -->
					<colgroup>
						<col span="1" width="200"/>
						<col span="1" width="200"/>
					</colgroup>
			
					
					<thead>
						<tr>
							<!-- Nom des colonnes -->
							<th data-field="Nom" data-halign="center" data-align="center">Nom</th>
							<th data-field="Prenom" data-halign="left" data-align="left">Prénom</th>
						</tr>
			
						<?php
						/* Tant qu'il y a une personne, on affiche son nom et son prenom */
						while ($liste = $personne->fetch()) {
						?>
						<tr>
							<!-- Première cellule de la ligne -->
							<td><?php echo $liste['Nom']; ?></td>
							<!-- Deuxième cellule de la ligne -->
							<td><?php echo $liste['Prenom']; ?></td>
						</tr>
						<?php
						}
						?>
					</thead>
				</table>
				<br />
				
				<!-- On crée un bouton pour effectuer une nouvelle recherche -->
				<form action='recherchedebut.php' method="post" >
					<input type="submit" value="Nouvelle recherche" />
				</form>		
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
			
		</div>
	</body>
</html>