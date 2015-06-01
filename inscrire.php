<html>
	<?php
	/* Connexion à la base de données WNBB */
	include('connexion.php');

	/* On inclus la même l'entête pour toutes les pages */
	include('head.php'); 
	?>
 
	<body>
		<!-- Affichage de la barre de navigation -->
		<?php include('navbar.php'); ?>

		<!-- Mise en place du theme de la page -->
		<div class="container theme-showcase" role="main">
			<div class="jumbotron">
			
				<!-- Titre de la page -->
				<h1 style="color:Green;">Inscription</h1>
				<?php
			
				/* On récupère les valeurs du formulaire dans des variables */
				$num = "";
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$ville = $_POST['ville'];
				$codepost = $_POST['codepost'];
				$evenement = $_POST['evenement'];
				/* Requete qui selectionne le numero de l'évenement en fonction de la description */
				$numev = $bd->prepare('SELECT NumEv FROM evenement WHERE Description=?;');
				$numev->execute(array($_POST['evenement']));
				$numeroev = $numev->fetch();
				
				/* Si tous les champs ne sont pas remplit, il faut recommencer */
				if (($nom=="") or ($prenom=="") or ($ville=="") or ($codepost=="")) {
				?>
					<p> Vous n'avez pas rempli tous les champs ! </p>
					<form action='inscription.php' method="post" >
						<input type="submit" value="Recommencer" />
					</form>
				<?php
				/* Sinon... */
				} else {
					
					/* Je compte le nombre d'inscription à l'évènement selectionné */
					$nb = $bd->query('SELECT COUNT(NumEv) FROM inscription WHERE NumEv=$numev');
					/* Je récupère le nombre de places totales a l'évènement */
					$nbtot = $bd->query('SELECT NbPlaces FROM evenement WHERE NumEv=$numev');
						
					if ($nb>=$nbtot){
				?>		
						<p>Il n'y a plus de places !</p>
						<br />
						<form action='inscription.php' method="post" >
							<input type="submit" value="Recommencer" />
						</form>
				<?php
					} else {
						/* On ajoute une inscription */
						$bd->beginTransaction();
						$insc = $bd->prepare("INSERT INTO inscription (NumInscrip, NomP, PrenomP, VilleP, CodePostP, NumEv) VALUES (:NumInscrip, :NomP, :PrenomP, :VilleP, :CodePostP, :NumEv)");
						$insc->bindValue(':NumInscrip', $num);
						$insc->bindValue(':NomP', $nom);
						$insc->bindValue(':PrenomP', $prenom);
						$insc->bindValue(':VilleP', $ville);
						$insc->bindValue(':CodePostP', $codepost);
						$insc->bindValue(':NumEv', $numeroev['NumEv']);
						$insc->execute();
						$bd->commit();
				?>
						<p>Merci <?php echo $prenom; ?> ! Votre inscription pour <?php echo $evenement; ?> est validée !</p>
						<br />
						<form action='inscription.php' method="post" >
							<input type="submit" value="Nouvelle inscription" />
						</form>
				<?php 
					}
				}
				?>
				
				
				
			</div>
			
			<!-- On inclut le pieds de page -->
		<?php include('footer.php'); ?>
		</div>
	</body>	
</html>