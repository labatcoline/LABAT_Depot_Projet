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
			<div class="jumbotron" >
			
				<!-- Titre de la page -->
				<h1 style="color:rgb(232, 24, 198);">Nos photos</h1>
				
				<!-- Indications concernant les modalités de la page -->
				<p>
					Voici quelques photos prises lors de nos différents contrats.
				</p>
				<br />
				
				<!-- Affichage de la première photo -->
				<img class="img_paysage" src="images/mta.JPG" alt="image1">
				<br />
				<!-- Légende -->
				<p>
					Marion, Tania et Adrien, le pupitre de sax, lors de l'animation du repas à Aubagnan le dimanche 10 mai 2015.
				</p>
				
				<!-- Affichage de la deuxième photo -->
				<img class="img_paysage" src="images/foule.JPG" alt="image5">
				<br />
				<!-- Légende -->
				<p>
					Il y avait foule à Aubagnan.
				</p>
				
				<!-- Affichage de la troisième photo -->
				<img class="img_paysage" src="images/aurerom.JPG" alt="image7">
				<br />
				<!-- Légende -->
				<p>
					Aurélien et Romain, le tempo, c'est leur truc !
				</p>
		
				<!-- Affichage de la quatrième photo -->
				<img class="img_paysage" src="images/brh.JPG" alt="image7">
				<br />
				<!-- Légende -->
				<p>
					Baptiste, Romain et Hugo, très concentrés.
				</p>
		
				<!-- Affichage de la cinquième photo -->
				<img class="img_paysage" src="images/aure.JPG" alt="image2">
				<br />
				<!-- Légende -->
				<p>
					Une petite pause à Bahus, pour l'animation de la journée inter-association le jeudi 14 mai 2015 : Aurélien se lache.
				</p>
				
				<!-- Affichage de la sixième photo -->
				<img class="img_portrait" src="images/hugorom.JPG" alt="image3">
				<br />
				<!-- Légende -->
				<p>
					A Bahus, c'etait super pour Hugo et Romain !
				</p>
		
				<!-- Affichage de la septieme photo -->
				<img class="img_paysage" src="images/elvislucas.JPG" alt="image6">
				<br />
				<!-- Légende -->
				<p>
					Elvis et Lucas, nos fabuleux trombones !
				</p>
			</div>
			
			<!-- On inclut le pieds de page -->
			<?php include('footer.php'); ?>
	    </div>
	</body>	
</html>