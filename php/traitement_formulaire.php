<?php

// Initialise certaines variables à une chaine vide
$nom = $tel = $email = $objet = $message = "";
$nomErr = $telErr = $emailErr = $objetErr = $messageErr  = $captchaErr = "";
$message_envoye = '<h3>Message Envoyé</h3>
                    Merci';
$destinataire_email = 'eric.scheffer.pro@gmail.com';


$regex_texte = "/^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ(),'?:;!._\]\[{}€&~+*%\"#@\=|\s-]{0,2650}$/";


// ======= FONCTIONS =======

// Tests communs à tous les champs
function testsCommunChamps($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



// Tests spécifiques par champ (doivent être non vides, et répondre aux conditions spécifiques)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // ======= RECAPTCHA GOOGLE =======  
  //  Teste si le recapcha est validé par google 
  $keysecret = 'blablabla';
  if (empty($_POST['g-recaptcha-response'])) {
    $captchaErr = "Captcha vide";
    exit;
  }
  $response = $_POST['g-recaptcha-response'];
  $reponse_google = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $keysecret . '&response=' . $response;
  $json = json_decode(file_get_contents($reponse_google), true);
  if (!$json["success"]) {
    $captchaErr = "Echec Captcha. Google vous voit comme un robot";
    exit;
  }


  // ======= NOM =======
  if (empty($_POST["nom"])) {
    $nomErr = "Veuillez compléter ce champ";
  } else {
    $nom = testsCommunChamps($_POST["nom"]);
    // Teste si le nom ne contient que les caractères et la longueur autorisés par la regex
    if (!preg_match($regex_texte, $nom)) {
      $nomErr = "Seuls les lettres et espaces sont autorisés";
    }
  }

  // ======= TELEPHONE =======
  if (empty($_POST["tel"])) {
    $telErr = "Veuillez compléter ce champ";
  } else {
    $tel = testsCommunChamps($_POST["tel"]);
    // Teste si le tel ne contient que des chiffres
    if (!is_numeric($tel)) {
      $telErr = "Seuls les chiffres sont autorisés";
    }
  }

  // ======= EMAIL =======
  if (empty($_POST["email"])) {
    $emailErr = "Veuillez compléter ce champ";
  } else {
    $email = testsCommunChamps($_POST["email"]);
    // Teste la syntaxe de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Adresse mail non valide";
    }
  }

  // ======= OBJET =======
  if (empty($_POST["objet"])) {
    $objetErr = "Veuillez compléter ce champ";
  } else {
    $objet = testsCommunChamps($_POST["objet"]);
    // Teste si l'objet ne contient que les caractères et la longueur autorisés par la regex
    if (!preg_match($regex_texte, $objet)) {
      $objetErr = "Seuls les lettres et espaces sont autorisés";
    }
  }

  // ======= MESSAGE =======
  if (empty($_POST["message"])) {
    $messageErr = "Veuillez compléter ce champ";
  } else {
    $message = testsCommunChamps($_POST["message"]);
    //Teste si le message ne contient que les caractères et la longueur autorisés par la regex
    if (!preg_match($regex_texte, $message)) {
      $messageErr = "Seuls les lettres et espaces sont autorisés";
    }
  }


  // Teste si tous les champs sont remplis et conformes
  if (
    $nomErr == ""
    && $telErr == ""
    && $emailErr == ""
    && $objetErr == ""
    && $messageErr == ""
  ) {
    // Sauvegarde du formulaire dans $corps_email
    $corps_email =
      'Nom: ' . $nom . "\n\n" .
      'Tel: ' . $tel . "\n\n" .
      'E-mail: ' . $email . "\n\n" .
      'Objet: ' . $objet . "\n\n" .
      "Message:\n " . $message;
    // S'il y a plus de 70 caractères dans $corps_email, on coupe
    $corps_email = wordwrap($corps_email, 70, "\r\n");
    $sujet_email = '[formulaire site eric-scheffer.fr] ' . $objet;
    $headers = 'From: site@eric-scheffer.fr' . "\r\n";
    $headers .= 'Reply-to: ' . $email;

    
    // Envoi du formulaire par mail
    mail($destinataire_email, $sujet_email, $corps_email, $headers);
    
    echo
      '<style type = "text/css">
    #masqueOpaquereceptionFormulaire {
        display: block;
      }
    </style>';
  }
}
