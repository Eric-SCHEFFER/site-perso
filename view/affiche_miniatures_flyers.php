<!-- Site perso - CV - Eric SCHEFFER - affiche_miniatures_flyers.php -->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" type="image/png" href="../pictures/favicon.png" />
		<link rel = "stylesheet" href="../css/page_affiche_miniatures_flyers.css" />
		<link rel = "stylesheet" href="../css/bootstrap.css" />
		<?php	require_once('../php/affiche_miniatures_flyers_php.php');?>
	   <title>Éric SCHEFFER: Flyers</title>
	</head>
	<body class = "bg-dark">
		<header>
		</header>
		<div id = "bloc_images" class="container-fluid text-center">
			<?php afficheMiniaturesFlyers(); ?>
		</div>
		<footer>
		</footer>
	</body>
</html>
