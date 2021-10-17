<?php
	/*
	====================================================================
	Site perso - CV - Eric SCHEFFER - affiche_miniatures_flyers.php
	Page php à inclure dans la page /site_perso/views/affiche_miniatures_flyers.php

	Ce code php affiche sur la page web des miniatures carrées d'images
	cliquables, pointant vers leurs sources respectives.
	Ces sources sont situées dans un même dossier sur un serveur.
	Le nom de chaque image source est à lister dans le tableau $sourceFolder.
	====================================================================
	*/



   // =============== PRINCIPALES VARIABLES À RENSEIGNER ===============

   // Renseigner ici le dossier source des images, en http ou https, en terminant par un slash
   $sourceFolder = "https://www.blueangelsdanse.org/bad/images/flyers/";


   // -------- On liste les images sources dans un tableau (Ne mettre que du jpeg ou png) ---------
   $listsourcePictures = array(
		'2020-07-28_flyer_affiche_danse_et_loisirs.jpg',
		'2020-02-16_flyer_affiche_stage_kiz.jpg',
		'2020-03-08_flyer_affiche_stage_bachata.jpg',
   	'2019-06-29_flyer_affiche_latino-rock_party_1.4.jpg',
   	'2019-07-02_mon_ete_latino_1.1.jpg',
   	'2019-09-10_portes_ouvertes_ba_1.2.jpg',
   	'2019-10-19_flyer_affiche_stage_kiz.jpg',
   	'2019-11-30_flyer_affiche_stage_kiz.jpg',
   	'2019-12-21_flyer_affiche_stage_kiz.jpg',
   	'2020-01-26_flyer_affiche_stage_tango.jpg',
   	'2020-02-23_flyer_affiche_stage_tango2.jpg',
   	'2020-03-21-22_flyer_affiche_sortie_wangenbourg.jpg',
   	'2020-03-21-22_flyer_affiche_sortie_wangenbourg_verso.jpg',
   	'flyer-affiche_camping_erstein_2018.png',
   	'flyer-affiche_rentree_erstein_et_selestat_sept_2018.png',
   	'flyer-affiche_soiree_21_juin_sbahneck.png',
   	'2019-06-01_flyer_stage_wcs.png',
   	'flyer-affiche_soiree_tempo_baila_15-12-2018.png',
   	'flyer-affiche_stage_kiz_17-11-2018.png',
   	'flyer-affiche_stage_perf_membres_4_danses_1-12-2018_et_12-01-2019.png',
   	'flyer-affiche_stages_kiz_16-02_et_18-05-2019.png',
   	'flyer-affiche_wangenbourg_avril_2019.png',
   	'flyer_ladys_style_23-3-2019.png',
   	'flyer_rentree_sept_2018.png',
   	'flyer_stage_bachata_13-04-2019.png');


   // Chemin du dossier cible qui contiendra les miniatures
	$targetFolderSitePath = '../pictures/miniaturesFlyers/';
	
	

   // Chemin absolu depuis le point de montage, du dossier cible
	//$targetFolder =$_SERVER['DOCUMENT_ROOT'] . $targetFolderSitePath;
	//$targetFolder = '../pictures/miniaturesFlyers/';

	$targetFolder = pathinfo (realpath ('../index.php'), PATHINFO_DIRNAME) . '/pictures/miniaturesFlyers/';

	//$targetFolder = $targetFolder . 'pictures/miniaturesFlyers/';




   // choisir la taille des côtés des miniatures (en pixels)
   $targetSize = 300;


   // On crée sur le serveur le dossier pour accueillir les miniatures, s'il n'existe pas
   if(!file_exists($targetFolder)){
   	// Stocke le masque avant la création du dossier
   	// Sous linux, ça évite qu'après sa création, le dossier ne soit plus accessible localement en écriture
   	$oldUmask = umask(002);
   	mkdir($targetFolder);
   	umask($oldUmask); // Réaffecte le masque mémorisé
   }



   // =============== FONCTIONS ===============


   function getExtension ($sourcePicture) {
   	$ext = pathinfo($sourcePicture, PATHINFO_EXTENSION);
   	if($ext == "jpg" || $ext == "JPG" || $ext == "jpeg" || $ext == "JPEG") {
   		$ext = "jpg";
   		return $ext;
   	}
   	elseif ($ext == "png" || $ext == "PNG") {
   		$ext = "png";
   		return $ext;
   	}
   	else {
   		echo "extension non valide";
   		exit;
   	}
   }



   // Retourne le chemin complet de l'image cible
   // Chemin absolu depuis la racine du point de montage (du type /var/www/sites/site1/blabla/monFichier.jpg)
   // En 1er parametre, le nom du fichier, sans le chemin (monfichier.jpg)
   function getTargetPictureFullPath ($sourcePicture, $ext, $targetFolder) {
   	$targetPicture = pathinfo($sourcePicture, PATHINFO_FILENAME);
   	$targetPicture = $targetFolder . $targetPicture . "_min." . $ext;
   	return $targetPicture;
   }



   // Retourne le chemin relatif de l'image cible, depuis la racine du serveur
   // Pour une exploitation dans le html
   // (Du type /site1/blabla/monFichier.jpg)
   // En parametre, le nom du fichier, sans le chemin (monfichier.jpg)
   function getTargetWebPicture ($sourcePicture) {
   	global $ext;
   	global $targetFolderSitePath;
   	$targetWebPicture = pathinfo($sourcePicture, PATHINFO_FILENAME);
   	$targetWebPicture = $targetFolderSitePath . $targetWebPicture . "_min." . $ext;
   	return $targetWebPicture;
   }



   function createMiniature($sourcePicture, $targetPicture) {
   	global $targetSize;
   	global $ext;
   	if ($ext == "jpg") {
   		$sourceSize = getimagesize($sourcePicture);
   		$imgIn = imagecreatefromjpeg($sourcePicture);
   		$imgOut = imagecreatetruecolor($targetSize,$targetSize);
   		imagecopyresampled($imgOut,$imgIn,0,0,0,0,$targetSize,$targetSize,$sourceSize[0],$sourceSize[0]);
   		imagejpeg($imgOut,$targetPicture);
   	}
   	else {
   		$sourceSize = getimagesize($sourcePicture);
   		$imgIn = imagecreatefrompng($sourcePicture);
   		$imgOut = imagecreatetruecolor($targetSize,$targetSize);
   		imagecopyresampled($imgOut,$imgIn,0,0,0,0,$targetSize,$targetSize,$sourceSize[0],$sourceSize[0]);
   		imagepng($imgOut,$targetPicture);
   	}
   }


   // Lancer cette fonction pour démarrer le programme
   function afficheMiniaturesFlyers() {
      global $listsourcePictures, $targetFolder, $sourceFolder, $ext;
      foreach ($listsourcePictures as $sourcePicture) {
      	$ext = getExtension ($sourcePicture); // Retourne l'extension de l'image source (les caractères sans le point)
      	$targetPicture = getTargetPictureFullPath ($sourcePicture, $ext, $targetFolder);
      	$sourceWebPicture = $sourceFolder . $sourcePicture;
			$targetWebPicture = getTargetWebPicture($sourcePicture);
			//$targetWebPicture = $targetFolder . $sourcePicture;
         $pictureName = $sourcePicture;
      	$sourcePicture = $sourceFolder . $sourcePicture;
      	if(!file_exists($targetPicture)) {
      		createMiniature($sourcePicture, $targetPicture); // Crée la miniature dans le dossier cible
      	}
      	 // Affiche la miniature sur la page web
			echo '<a href = "' . $sourceWebPicture . '">
					<img class = "rounded m-1 img-thumbnail" 
					src = "' . $targetWebPicture . '"
					alt = "' . $targetWebPicture . '">
					</a>' . "\n";
      }
   }


   // =============== PROGRAMME PRINCIPAL ===============

   // Comme cette présente page sera incluse dans la page affiche_miniatures_flyers.php,
   // c'est là-bas que l'on appellera la fontion afficheMiniaturesFlyers
   // à l'endroit ou l'on veut voir s'afficher les miniatures
?>
