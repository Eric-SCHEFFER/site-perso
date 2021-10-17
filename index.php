<!-- Site perso - CV - Eric SCHEFFER - index.php -->

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Éric SCHEFFER, développeur web" />
	<link rel="icon" type="image/png" href="pictures/favicon.png" />
	<link rel="stylesheet" href="css/global.css" />
	<!-- <link rel="stylesheet" href="css/bootstrap.css" /> -->
	<?php require_once('php/traitement_formulaire.php'); ?>
	<title>Eric SCHEFFER: Développeur web</title>
	<!-- ======== recaptcha de google ========-->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script>
		function onSubmit(token) {
			document.getElementById("formulaire").submit();
		}
	</script>

</head>

<body>

	<!-- ======== ENTÊTE ========-->
	<header>
		<div id="bandeauEntete">
			<div id="photoEntete"><img id='moi' src="pictures/moi.jpg" alt="Photo Éric SCHEFFER"></div>
			<div id="prenomNomEntete">Éric SCHEFFER</div>
			<div id="blocTitreEntete">
				<div id="titreEntete">Développeur</div>
				<div id="sousTitreEntete">web</div>
			</div>
		</div>
	</header>

	<!-- ======== MENU ========-->
	<nav id="nav">
		<div id="top"><a href="#" title="Aller en haut">arrow_upward</a></div> <!-- Bouton go on top -->
		<div id="open"><a href="#nav" title="Menu">menu</a></div> <!-- Bouton ouvrir menu burger-->
		<div id="close"><a href="#close" title="Fermer">close</a></div> <!-- Bouton fermer menu burger-->
		<ul>
			<li><a id="navAccueil" href="#">accueil</a></li>
			<li><a id="navCompetences" href="#competences">Compétences</a></li>
			<li><a id="navRealisations" href="#realisations">Portfolio</a></li>
			<li><a id="navParcours" href="#experiences">parcours</a></li>
			<li><a id="navContact" href="#contact">Contact</a></li>
		</ul>
	</nav>


	<div class="main">
		<section id="bloc1" class="article">
			<!-- ======== COMPÉTENCES ========-->
			<div id="competences">
				<h2>Compétences</h2>
				<ul>
					<li class="gras">Langages</li>
					<li>HTML5: Langage de base d'une page web</li>
					<li>CSS3: Langage de style d'une page web</li>
					<li>Javascript: Langage web front end</li>
					<li>PHP: Langage web back end</li>
					<li>SQL: Langage de base de donnée</li>
					<li>BASH: Lignes de commandes de Linux</li>
				</ul>
				<ul>
					<li class="gras">Bibliothèques et modules</li>
					<li>Bootstrap: Bibliothèque CSS</li>
					<li>Flexbox - grid: Modules de CSS3 pour affichage adaptatif</li>
					<li>Jquery: Bibliothèque javascript</li>
				</ul>
				
				<ul>
					<li class="gras">Frameworks</li>
					<li>Symfony: Framework MVC pour développement web</li>
				</ul>

				<ul>
					<li class="gras">Outils spécifiques</li>
					<li>Mysql: Système de gestion de base de données relationnelles</li>
					<li>Rsync: Sauvegarde Synchronisation avancée en lignes de commandes</li>
					
				</ul>
				<ul>
					<li class="gras">Outils collaboratifs</li>
					<li>Git - Github: Partage des sources</li>
					<li>Trello: Gestion de projet</li>
					<li>Slack: Plateforme de communication collaborative</li>
					<li>Discord: Logiciel et plateforme avancés de communication collaboratifs</li>
					<li>Zoom: Logiciel de visioconférences</li>
					<li>Google calendar: Application de gestion et de partage d'agendas</li>
					<li>Google meet: Service de visioconférence</li>
				</ul>
				<ul>
					<li class="gras">Autres outils</li>
					<li>Google keep: Application de prise de notes</li>
					<li>Drupal: Système de gestion de contenu</li>
				</ul>
				<ul>
					<li class="gras">Systèmes d'exploitation</li>
					<li>GNU/Linux: Famille de systèmes open source</li>
					<li>UBUNTU: Distribution Linux</li>
				</ul>
				<ul>
					<li class="gras">Graphisme</li>
					<li>Inkscape: Logiciel de dessin vectoriel</li>
					<li>Gimp: Logiciel d'édition d'images</li>
				</ul>
			</div>
			<hr>
			<!-- ======== PORTFOLIO ========-->
			<h2 class="h2Realisations">Portfolio</h2>
			<div id="realisations">
				<div id="blueAngesls" class="miniature">
					<a href="https://www.blueangelsdanse.org" target="_blank">
						<img src="pictures/miniature_site_blue_angels.jpg" alt="apercu homepage site blue angels">
						<h3 class="titre">Site web</h3>
					</a>
				</div>
				<div id="tattookozak" class="miniature">
					<a href="https://www.jan-kozak.fr/tattookozak" target="_blank">
						<img src="pictures/miniature_site_tattookozak.jpg" alt="apercu homepage site tattookozak">
						<h3 class="titre">Site web</h3>
					</a>
				</div>
			</div>
		</section>


		<section id="bloc2" class="article">
			<!-- ======== EXPÉRIENCES ========-->
			<div id="experiences">
				<h2>expériences</h2>
				<ul>
					<li class="gris">Janvier 2021 > avril 2021</li>
					<li class="gras">Développeur web bénévole</li>
					<li>Association de danses "Les Blue Angels" - Erstein</li>
					<li class="grisPetitItalic"><a href="https://blueangelsdanse.org" target="_blank">https://blueangelsdanse.org</a></li>
					<li class="grisPetitItalic">Refonte complète du site vitrine des Blue Angels</li>
					<li class="grisPetitItalic">Ajout d'un espace d'administration via un mot de passe</li>
					<li class="grisPetitItalic">Souscription - transfert du nom de domaine et de l'hebergement chez les prestataires (d'OVH vers IONOS)</li>
					<li class="grisPetitItalic">Création d'un script bash pour synchroniser automatiquement mon serveur local vers le serveur distant</li>
					<li class="grisPetitItalic">Technos : HTML5 - CSS3 - PHP - Git - Github - Symfony -  Rsync - Trello</li>
				</ul>
				<ul>
					<li class="gris">Septembre 2020 > Novembre 2020</li>
					<li class="gras">Développeur web bénévole</li>
					<li>Artisan Tatoueur Jan KOZAK</li>
					<li class="grisPetitItalic"><a href="https://jan-kozak.fr/tattookozak" target="_blank">https://jan-kozak.fr/tattookozak</a></li>
					<li class="grisPetitItalic">Réalisation site vitrine - Espace d'administration via un mot de passe</li>
					<li class="grisPetitItalic">Mise en place d'un serveur web</li>
					<li class="grisPetitItalic">Technos : HTML5 - CSS3 - PHP - Git - Github - Symfony -  Rsync - Trello</li>
				</ul>
				<ul>
					<li class="gris">Février > juin 2020 (5 mois)</li>
					<li class="gras">Formation développeur web et web mobile</li>
					<li>Webforce3 - Strasbourg</li>
					<li class="grisPetitItalic">Formation préparant un titre professionnel de niveau bac +2</li>
					<li class="grisPetitItalic">Apprentissage des langages de développement et de programmation. HTML, CSS, JS, PHP, MySQL</li>
				</ul>
				<ul>
					<li class="gris">Janvier 2020 (1 semaine)</li>
					<li class="gras">Développeur web (stage découverte)</li>
					<li>Grand Est Automobile - Schiltigheim</li>
					<li class="grisPetitItalic">Réalisation d'une application web de monitoring de logs pour l'intranet de l'entreprise</li>
					<li class="grisPetitItalic">Technos : HTML5 - CSS3 - PHP - Git - bitbucket - Bootstrap - Découverte de Laravel</li>

				</ul>
				<ul>
					<li class="gris">Janvier 2009 > aujourd'hui</li>
					<li class="gras">Développeur web bénévole</li>
					<li>Association de danses "Les Blue Angels" - Erstein</li>
					<li class="grisPetitItalic"><a href="https://blueangelsdanse.org" target="_blank">https://blueangelsdanse.org</a></li>
					<li class="grisPetitItalic">Réalisation site vitrine</li>
					<li class="grisPetitItalic">Gestion du contenu</li>
					<li class="grisPetitItalic">Mise en place d'un serveur web</li>
					<li class="grisPetitItalic">Référencement pour les moteurs de recherche</li>
					<li class="grisPetitItalic">Obligations légales d'un site web (RGPD - script tarteaucitron)</li>
					<li class="grisPetitItalic">Souscription - transfert du nom de domaine et de l'hebergement chez les prestataires (IONOS)</li>
					<li class="grisPetitItalic">Technos : HTML5 - CSS3 - PHP</li>
				</ul>
				<ul>
					<li class="gris">Janvier 2009 > aujourd'hui</li>
					<li class="gras">Conception de visuels pour affiches et flyers évènementiels</li>
					<li>Les Blue Angels - Erstein</li>
					<li class="grisPetitItalic">Communiquer avec les imprimeurs (marges intérieures, fond perdu, dpi, etc...)</li>
					<li class="grisPetitItalic">Mise en page, cohérence de style, harmonie des couleurs, polices d'écriture, de graphisme</li>
					<li class="grisPetitItalic">Recherche d'images, photos de fond, d'illustration</li>
					<li class="grisPetitItalic">Comprendre et interpréter la demande du client</li>
					<li class="grisPetitItalic">Technos : Inkscape</li>
				</ul>
				<ul>
					<li class="gris">Janvier 2009 > aujourd'hui</li>
					<li class="gras">Diffusion et partage des visuels numériques</li>
					<li>Les Blue Angels - Erstein</li>
					<li class="grisPetitItalic">Valider correctement un visuel pour être clair et efficace, et éviter les erreurs (notion de version)</li>
					<li class="grisPetitItalic">Synchronisation de la diffusion d'un visuel évènementiel via plusieurs supports (site web, réseaux sociaux, plateformes régionales, communales, presse papier, médias de quartier, cinéma)</li>
					<li class="grisPetitItalic">Communiquer avec les différents acteurs:</li>
					<li class="grisPetitItalic">Membres de l'association</li>
					<li class="grisPetitItalic">Community manager</li>
				</ul>
				<ul>
					<li class="gris">Janvier 2009 > aujourd'hui</li>
					<li class="gras">Sécurité des données - backup du site - transferts chiffrés - respect de la vie privée</li>
					<li>Les Blue Angels - Erstein</li>
					<li class="grisPetitItalic">Mise en place d'un backup automatique du site de test local vers le site distant en production (avec RSYNC sous linux)</li>
					<li class="grisPetitItalic">Transfert chiffré grace à SSH</li>
					<li class="grisPetitItalic">Prévenir le site d'attaques malveillantes par la sécurisation du code</li>
					<li class="grisPetitItalic">Filtrage côté serveur des données venant du formulaire</li>
					<li class="grisPetitItalic">Intégration sur le site web du règlement européen sur la protection des données (RGPD) - gestion des cookies par l'utilisateur</li>
					<li class="grisPetitItalic">Basculement de http vers https</li>
				</ul>
			</div>
		</section>


		<section id="bloc3" class="article">
			<!-- ======== AUTRES EXPÉRIENCES ========-->
			<div id="autresExperiences">
				<h2>autres expériences</h2>
				<ul>
					<li class="gris">Février 2016 > août 2017 (1 an et 7 mois)</li>
					<li class="gras">Technicien sytèmes d'alarmes</li>
					<li>SÉRÉNITÉ 24H24 - Strasbourg</li>
					<li class="grisPetitItalic">Installation - maintenance systèmes d'alarmes - Entreprises - gros chantiers - particuliers</li>
					<li class="grisPetitItalic">Grand Est</li>
				</ul>
				<ul>
					<li class="gris">1998 > 2014 (+ 16 ans)</li>
					<li class="gras">À mon compte dans les sytèmes d'alarmes</li>
					<li>EXSAPRO Sarralbe</li>
					<li class="grisPetitItalic">Installation - maintenance systèmes d'alarmes - particuliers</li>
					<li class="grisPetitItalic">Grand Est</li>
				</ul>
				<ul>
					<li class="gris">Septembre > décembre 2007 (4 mois)</li>
					<li class="gras">Technicien sytèmes d'alarmes</li>
					<li>SÉCURITAS - Strasbourg</li>
					<li class="grisPetitItalic">Installation - maintenance systèmes d'alarmes particuliers - entreprises</li>
					<li class="grisPetitItalic">Grand Est</li>
				</ul>
				<ul>
					<li class="gris">1988 > 1998 (env 10 ans)</li>
					<li class="gras">Technicien sytèmes d'alarmes</li>
					<li>ÉLECTROLUX - Strasbourg</li>
					<li class="grisPetitItalic">Installation - maintenance systèmes d'alarmes particuliers - entreprises</li>
					<li class="grisPetitItalic">Grand Est</li>
				</ul>
				<ul>
					<li class="gris">Janvier 1988 > juin 1988 (6 mois)</li>
					<li class="gras">Technicien réparation appareils photos</li>
					<li>PHOTOREP - Strasbourg</li>
					<li class="grisPetitItalic">Diagnostic et réparation d'appareils photos en atelier</li>
				</ul>
				<ul>
					<li class="gris">1986 > 1987 (+ 1 an)</li>
					<li class="gras">Divers emplois technicien alarmes</li>
					<li>Strasbourg et environs</li>
					<li class="grisPetitItalic">Installation - maintenance systèmes d'alarmes particuliers - entreprises</li>
				</ul>
				<ul>
					<li class="gris">1985 > 1986 (1 an)</li>
					<li class="gras">Électricien au casernement (service militaire)</li>
					<li>Oberhoffen/Moder</li>
					<li class="grisPetitItalic">Entretien locatif - permanences et dépannages</li>
				</ul>
				<ul>
					<li class="gris">1983 > 1985 (1 an et 11 mois)</li>
					<li class="gras">Apprenti Électricien</li>
					<li>CONFORELEC - Oberhausbergen</li>
					<li class="grisPetitItalic">Alternance chantiers - théorie en CFA</li>
				</ul>
			</div>
		</section>


		<section id="bloc4" class="article">
			<!-- ======== ÉTUDES / DIPLÔMES ========-->
			<div id="etudesDiplomes">
				<h2>études - diplômes</h2>
				<ul>
					<li class="gris">1985</li>
					<li class="gras">CAP + brevet de compagnon Électricien d'équipement</li>
					<li>CONFORELEC - Oberhausbergen - CFA Illkirch</li>
				</ul>
				<ul>
					<li class="gris">1983</li>
					<li class="gras">Niveau Fin de 1 ère F3 (électrotechnique)</li>
					<li>LYCÉE TECHNIQUE COUFFIGNAL - Strasbourg</li>
				</ul>
			</div>
			<hr>

			<div id="diversLoisirs">
				<h2>Divers - Loisirs</h2>
				<ul>
					<li>Permis B</li>
					<li>Voiture</li>
				</ul>
				<ul>
					<li class="gras">Sports</li>
					<li>Vélo</li>
					<li>Randonnées pédestres</li>
				</ul>
				<ul>
					<li class="gras">Arts - détente</li>
					<li>Musiques (Rock - blues - latines)</li>
					<li>Danses en couples (Rock 'n' roll - salsa - bachata)</li>
					<li>Graphisme numérique pour évènements (affiches, flyers, sites web, réseaux sociaux)</li>
				</ul>
				<ul>
					<li class="gras">Informatique</li>
					<li>Réparer les ordinateurs</li>
					<li>Installer / configurer les systèmes d'exploitation sous Linux (Xubuntu)</li>
					<li>Aider / dépanner la famille / les amis en informatique</li>
					<li>Scripts bash</li>
					<li>Codage sites web</li>
				</ul>
			</div>
		</section>
	</div>


	<div id="contact">
		<!-- ======== COORDONNÉES ========-->
		<section id="coordonnees">
			<h2>Coordonnées</h2>
			<ul>
				<li class="gris">Nom</li>
				<li class="gras">SCHEFFER</li>
			</ul>
			<ul>
				<li class="gris">Prénom</li>
				<li class="gras">Éric</li>
			</ul>
			<ul>
				<li class="gris">Date de naissance</li>
				<li class="gras">22/10/1965</li>
			</ul>
			<ul>
				<li class="gris">Lieu</li>
				<li class="gras">Dieuze (57)</li>
			</ul>
			<ul>
				<li class="gris">Adresse</li>
				<li class="gras">6A rue Édmond About</li>
				<li class="gras">67700 SAVERNE</li>
			</ul>
			<ul>
				<li class="gris">Tel</li>
				<li class="gras">06 07 35 96 82</li>
			</ul>
			<ul>
				<li class="gris">email</li>
				<li class="gras"><a href="mailto:eric.scheffer.pro@gmail.com">eric.scheffer.pro@gmail.com</a></li>
			</ul>
		</section>


		<!-- ======== FORMULAIRE DE CONTACT ========-->
		<form id="formulaire" method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#formulaire'>
			<h2>Formulaire de contact</h2>

			<input type="text" id="nom" name="nom" required value="<?php echo $nom; ?>"><label for="nom">*Nom <span class="error"><?php echo $nomErr; ?></span></label>

			<input type="tel" id="tel" name="tel" required maxlength=40 minlength=6 value="<?php echo $tel; ?>"><label for="tel">*Téléphone <span class="error"><?php echo $telErr; ?></span></label>

			<input type="email" id="email" name="email" required value="<?php echo $email; ?>"><label for="email">*Email <span class="error"><?php echo $emailErr; ?></span></label>

			<input type="text" id="objet" name="objet" required value="<?php echo $objet; ?>"><label for="objet">*Objet <span class="error"><?php echo $objetErr; ?></span></label>

			<textarea id="message" name="message" required><?php echo $message; ?></textarea><label for="message">*Message <span class="error"><?php echo $messageErr; ?></span></label>

			<input type='submit' class='bouton g-recaptcha' data-sitekey="6LdE2dQUAAAAAAFGae1NNJN7aMonbuoUyKGVl82H" data-callback='onSubmit' name="envoyer" value="Envoyer">
			<span class="error"><?php echo $captchaErr; ?></span>
		</form>

		<div id="masqueOpaquereceptionFormulaire">
			<div id="bloc_message">
				<?php echo $message_envoye; ?>
				<a href='<?php echo $_SERVER["PHP_SELF"]; ?>'>X</a>
			</div>
		</div>


	</div>


	<footer>

	</footer>

</body>


</html>