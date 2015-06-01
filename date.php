<html>
	<?php

	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclus la même l'entête pour toutes les pages */
	include('head.php');
	/* On inclut la fonction date_france.php */
	include('date_france.php'); ?>


	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php'); ?>	
	
		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
			
				<!-- Titre de la page -->
				<h1 style="color:Green;">Nos dates</h1>
				
				<!-- Indications concernant les modalités de la page -->
				<p>
					Vous rêvez de nous écouter en direct live ? Voici notre calendrier !
				</p>
		
				<!-- Requete : Selectionne la date, la ville et la description de chaque évenement et l'ordonne par date décroissante -->
				<?php
				$res = $bd->prepare('SELECT DateEv, VilleEv, Description FROM evenement ORDER BY DateEv DESC;');
				$res->execute();	
				?>

				<!-- Création d'un tableau -->
				<table data-url="data1.json" data-height="299">
		
					<!-- Propriétés des colonnes -->
					<colgroup>
						<col span="1" width="160"/>
						<col span="1" width="200"/>
						<col span="1" width="700"/>
					</colgroup>
		
					<!-- Contenu du tableau -->
					<thead>
						<!-- Première ligne : description de chaque colonne -->
						<tr>
							<th data-field="date" data-halign="center" data-align="center">Date</th>
							<th data-field="ville" data-halign="left" data-align="left">Ville</th>
							<th data-field="description" data-halign="left" data-align="left">Description</th>
						</tr>
		
						<!-- Tant qu'il y a des évenements, on les affiche -->
						<?php
						while ($donnees = $res->fetch()) {
						?>
						
						<!-- Affichage des lignes -->
						<tr>
							<!-- Première cellule -->
							<td><?php echo date_france($donnees['DateEv']); ?></td>
							<!-- Deuxième cellule -->
							<td><?php echo $donnees['VilleEv']; ?></td>
							<!-- Troisième cellule -->
							<td><?php echo $donnees['Description']; ?></td>
						</tr>
						<?php
						}
						?>
		
					</thead>
				</table>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>