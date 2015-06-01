<html>
	<?php

	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclut la même l'entête pour toutes les pages */
	include('head.php'); ?>
 
	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php');?>

		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
			
				<!-- Titre de la page -->
				<h1 style="color:rgb(232, 24, 198);">Les musiciens</h1>
						
				<?php
			
				/* On récupère les valeurs du formulaire dans des variables */
				$nomm = $_POST['nomm'];
				$prenomm = $_POST['prenomm'];
				$villem = $_POST['villem'];
				$codepostm = $_POST['codepostm'];
			
				/* On sélectionne le numéro de l'instrument selectionné précédemment */
				$numinstr=$bd->prepare('SELECT NumInst FROM instrument WHERE NomInst=?;');
				$numinstr->execute(array($_POST['instrument']));
				$numeroinstr = $numinstr->fetch();
			
				/* Si les champs ne sont pas tous rempli, il faut recommencer */
				if (($nomm=="") or ($prenomm=="") or ($villem=="") or ($codepostm=="")) {
				?>
					<p> Vous n'avez pas rempli tous les champs ! </p>
					<form action='modif2.php' method="post" >
						<input type="submit" value="Recommencer" />
					</form>
				<?php
				/* Sinon... */
				} else {
					/* ...on modifie les informations du musicien */	
					$modification = $bd->prepare('UPDATE personne SET Nom=?, Prenom=?, Ville=?, CodePost=?, NumInst=? WHERE Num=?;');
					$modification->execute(array($nomm, $prenomm, $villem, $codepostm, $numeroinstr['NumInst'], $_POST['numero']));
				?>
					<p>Les modifications ont été effectuées !</p>
	
				<?php
				}
				?>
				
				<!-- Bouton de retour à la page musiciens.php -->
				<form action='musiciens.php' method="post" >
					<input type="submit" value="Retour" />
				</form>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
		</div>
	</body>
</html>