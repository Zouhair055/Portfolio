<?php
// Récupération des données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Création du corps du mail
$mailBody = "Nouveau message de $name\n
              Email: $email\n
              Sujet: $subject\n
              Message: $message";

// Destinataire
$to = 'dkhissizouhair5@gmail.com';

// En-têtes supplémentaires
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Envoyer le mail
if(mail($to, $subject, $mailBody, $headers)) {
    echo "Email envoyé avec succès";
} else {
    echo "Échec de l'envoi de l'e-mail";
}
?>