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
				<?php
			
				/* On récupère les valeurs du formulaire précédent dans des variables */
				$num = "";
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$ville = $_POST['ville'];
				$codepost = $_POST['codepost'];
				$instrument = $_POST['instrument'];
				$numinstru = $bd->prepare('SELECT NumInst FROM instrument WHERE NomInst=?;');
				$numinstru->execute(array($_POST['instrument']));
				$numeroinstru = $numinstru->fetch();
			
				/* Si un des champs n'est pas rempli... */
				if (($nom=="") or ($prenom=="") or ($ville=="") or ($codepost=="")) {
				?>
					<p> Vous n'avez pas rempli tous les champs ! </p>
					<!-- ... On affiche un bouton pour recommencer et revenir sur la page inscriremusicien.php -->
					<form action='inscriremusicien.php' method="post" >
						<input type="submit" value="Recommencer" />
					</form>
				<?php
				/* Sinon... */
				} else {
									/* On sélectionne le numéro de l'instrument dont le nom a été selectionné précédemment */
					$numinst = $bd->prepare('SELECT NumInst FROM instrument WHERE NomInst=?');
					$numinstru = $numinst->execute(array($instrument));
							
					/* On execute la requete */
					$bd->beginTransaction();
					$insc = $bd->prepare("INSERT INTO personne (Num, Nom, Prenom, Ville, CodePost, NumInst) VALUES (:NumInscrip, :NomP, :PrenomP, :VilleP, :CodePostP, :NumEv)");
					$insc->bindValue(':NumInscrip', $num);
					$insc->bindValue(':NomP', $nom);
					$insc->bindValue(':PrenomP', $prenom);
					$insc->bindValue(':VilleP', $ville);
					$insc->bindValue(':CodePostP', $codepost);
					$insc->bindValue(':NumEv', $numeroinstru['NumInst']);
					$insc->execute();
					$bd->commit();
					
				?>
					<p>Merci <?php echo $prenom; ?> ! Votre inscription est validée !</p>
				<?php 
				}
			?>
			
				<!-- Bouton de retour pour revenir à la page musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>