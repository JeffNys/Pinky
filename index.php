 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_index.css">
  </head>
  <body>
	<?php include("_nav.php"); ?>
	<h1>Speedy - Pinky</h1>
	<!-- les blocs sont contenus dans des div avec classes blocsDroit et BlocsGauche -->
	<div class="tram">
		<div class="blocs">
			<!-- ici le bloc présentation -->
			<h2>Mes capacités</h2>
			
		</div>

		<div class="blocs">
			<!-- ici le bloc dernière expériences -->
			<h2>Mon parcours</h2>
			<p>Je suis connu de tous dans mon rôle dans Pac-Man (qui appartient à l'histoire),
			vous pouvez découvrir mon parcour un peu plus détaillé, ainsi que mes rôles cachés 
			dans les coulisses de ce jeu, c'est ici: </p>
			<a href="experience.php" class="bouton1">Voir +</a>	
		</div>
		
		<div class="blocs">
			<!-- ici le bloc testez moi, ou, me voir en action -->
			<h2>Me voir en action</h2>
			<img src="giphy.gif" alt="animation de Pinky attrapant pacman">
			<a href="" class="bouton1">Testez-moi</a>
		</div>
		
		<div class="blocs">
			<!-- ici le bloc contactez moi -->
			<h2>Contactez moi</h2>
			<p>Si ça vous a plu, et que vous voulez me proposer du travail, il vous suffit de me contacter
			</p>
			<a href="contact.php" class="bouton1">contactez-moi</a>
		</div>
	</div>				
	<?php include("_footer.php"); ?>
  </body>
</html>
