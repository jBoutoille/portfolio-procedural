<?php
              // S'il y des données de postées
              if ($_SERVER['REQUEST_METHOD']=='POST') {
                // Code PHP pour traiter l'envoi de l'email
                
                $nombreErreur = 0; // Variable qui compte le nombre d'erreur
                
                // Définit toutes les erreurs possibles
                if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
                  $nombreErreur++; // On incrémente la variable qui compte les erreurs
                  $erreur1 = '<p class="notification2">Email invalide.</p>';
                } else { // Sinon, cela signifie que la variable existe (c'est normal)
                  if (empty($_POST['email'])) { // Si la variable est vide
                    $nombreErreur++; // On incrémente la variable qui compte les erreurs
                    $erreur2 = '<p class="notification2">Vous avez oublié de renseigner votre email.</p>';
                  } else {
                    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                      $nombreErreur++; // On incrémente la variable qui compte les erreurs
                      $erreur3 = '<p class="notification2">Cet email ne ressemble pas à un email.</p>';
                    }
                  }
                }
                
                if (!isset($_POST['message'])) {
                  $nombreErreur++;
                  $erreur4 = '<p class="notification2">Message invalide</p>';
                } else {
                  if (empty($_POST['message'])) {
                    $nombreErreur++;
                    $erreur5 = '<p class="notification2">Vous avez oublié votre message.</p>';
                  }
                }                
                
                if (!isset($_POST['captcha'])) {
                  $nombreErreur++;
                  $erreur6 = '<p class="notification2">Il y a un problème de sécurité.</p>';
                } else {
                  if ($_POST['captcha']!=9) {
                    $nombreErreur++;
                    $erreur7 = '<p class="notification2">La sécurité anti-spam est incorrecte.</p>';
                  }
                }
                
                if ($nombreErreur==0) { // S'il n'y a pas d'erreur
                  // Récupération des variables et sécurisation des données
                  $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
                  $email = htmlentities($_POST['email']);
                  $debut = htmlentities($_POST['debut']);
                  $fin = htmlentities($_POST['fin']);
                  $message = htmlentities($_POST['message']);
                  $type = htmlentities($_POST['typeSite']);
                  $influence = htmlentities($_POST['influence']);
                  $charte = htmlentities($_POST['charte']);
                  $maintenance = htmlentities($_POST['maintenance']);
                  
                  // Variables concernant l'email
                  $destinataire = 'boutoille.julien@gmail.com'; // Mon adresse email 
                  $sujet = 'Demande client'; // Titre de l'email
                  $contenu = '<html><head><title>Demande client</title></head><body>';
                  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre portfolio.</p>';
                  $contenu .= '<p><b>Nom</b>: '.$nom.'</p>';
                  $contenu .= '<p><b>Email</b>: '.$email.'</p>';
                  $contenu .= '<p><b>Début projet</b>: '.$debut.'</p>';
                  $contenu .= '<p><b>Fin projet</b>: '.$fin.'</p>';
                  $contenu .= '<p><b>Message</b>: '.$message.'</p>';
                  $contenu .= '<p><b>Type</b>: '.$type.'</p>';
                  $contenu .= '<p><b>Influence</b>: '.$influence.'</p>';
                  $contenu .= '<p><b>Charte graphique disponible</b>: '.$charte.'</p>';
                  $contenu .= '<p><b>Maintenance du site</b>: '.$maintenance.'</p>';
                  $contenu .= '</body></html>'; // Contenu du message de l'email
                  
                  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
                  $headers = 'MIME-Version: 1.0'."\r\n";
                  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
                  
                  @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
                  
                  echo '<p class="notification wow fadeInUp data-wow-delay="0.7s">Message envoyé <img src="./img/ico/sent.svg" class="social"></p>'; // Afficher un message pour indiquer que le message a été envoyé
                } else { // S'il y a un moins une erreur
                  echo '<div class="notification2">';
                  echo '<p>🤖 Désolé, il y a '.$nombreErreur.' erreur(s). Voici les détails des erreurs :</p>';
                  if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
                  if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
                  if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
                  if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
                  if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
                  if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
                  if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
                  echo '</div>';
                }
              }
              ?>