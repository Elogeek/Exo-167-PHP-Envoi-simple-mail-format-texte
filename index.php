<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez (upload) sur votre serveur et testez !
 */
// TODO Votre code ici.
$from = 'persone@gmail.com';
$to = 'j.conan@fondationface.org,test@gmail.com';
$subject = 'Test';
$headers = 'From: persone@gmail.com' . "\r\n" . 'Reply-To: persone@gmail.com' ."\r\n" .  'X-Mailer: PHP/' .phpversion();
$message = 'Hello World, sending a simple mail !';
mail($to, $subject, $message, $headers);

/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.
$message2 = "Je suis le nouveau message à envoyer par mail. Il fait dégeu aujourd'hui ? ! J'espère que  ça fonctionne correctement . Je pense qu'il y a assez de caractères.";
$message2 = wordwrap($message2, 70, "\r\n");

if(mail($to, "Premier mail", $message2)) {
   echo "Le message a bien été envoyé. Merci !";
   file_put_contents('mails.txt', '\n' . $to . ": " . $message2, FILE_APPEND);
}
else {
   echo "L'envoi du message a échoué. Une erreur est survenue lors de l'envoi du mail.";
}




