 <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_index.css">
  </head>
  <body>
    <header>
	<?php include("_nav.php"); ?>
    </header>
    <main>	
    <h1>Speedy - Pinky</h1>
	<!-- les blocs sont contenus dans des div avec classes blocsDroit et BlocsGauche -->
	<div class="tram">
		<div class="blocs">
			<!-- ici le bloc présentation -->
			<h2>Mes capacités</h2>
			<ul>
				<li>chasseuse d'intrus</li>
				<li>coach en tracking</li>
				<li>maitre d'armes</li>
				<li>membre de la ligue des fantomes historique</li>
				<li>liste à completer + mise en forme</li>
			</ul>	
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
			<img class="anime" src="giphy.gif" alt="animation de Pinky attrapant pacman">
			<a href="game.php" class="bouton1">Testez-moi</a>
		</div>
		
		<div class="blocs">
			<!-- ici le bloc contactez moi -->
			<h2>Contactez moi</h2>
			<p>Si ça vous a plu, et que vous voulez me proposer du travail, il vous suffit de me contacter
			</p>
			<a href="contact.php" class="bouton1">contactez-moi</a>
		</div>
	</div>
    </main>
    <footer class="footer_index">				
	<?php include("_footer.php"); ?>
    </footer>
  </body>
</html>
