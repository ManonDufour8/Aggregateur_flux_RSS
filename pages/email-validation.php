<?php
// avant tout on télécharge les fichiers PHPMailer (doit se faire au début)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/mail/Exception.php';
require 'assets/mail/PHPMailer.php';
require 'assets/mail/SMTP.php';

// On rencontre un pbm, le message s'affiche au rafraîchissement de la page, il faut donc vérifier que le formulaire ai été rempli avant que la vérification soit faite et que le message s'affiche
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération de l'email
    // isset() vérifie si le champ email existe dans le formulaire et n’est pas null
    // $_POST['email'] = la valeur envoyée par le formulaire
    // si $_POST['email'] n’existe pas ou = null, alors $email prend une chaîne vide pour éviter les erreurs
    if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}
// On vérifie alors que le champ du mail ne soit pas vide (empty) puis on vérifie la validité de l'email rentré par l'utilisateur
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $mail = new PHPMailer(true); // Passer `true` active les exceptions / false les désactive et empêche l'affichage des erreurs internes

        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->Username   = 'noreply@students-talents.fr'; // Identifiant de connexion au serveur SMTP
        $mail->SMTPSecure = 'ssl'; // Type de chiffrement utilisé pour sécuriser la connexion
        $mail->Port       = 465; // Port SSL (465 = chiffrement SSL, 587 = STARTTLS)

        // setFrom = Expediteur
        $mail->setFrom('noreply@students-talents.fr', 'Le Monde'); // Adresse email affichée comme expéditeur
        // addReplyTo = adresse pour les réponses
        $mail->addReplyTo('noreply@students-talents.fr', 'Le Monde'); // Nom affiché comme expéditeur dans la boîte mail
        // addAddress = destinataire principal
        $mail->addAddress($email);

        $mail->isHTML(true); // Définir le format d'email en HTML
        $mail->Subject = "Confirmation de l'inscription";
        $mail->Body    = '<h1>Validation du compte</h1><p>Cliquez sur le bouton pour confirmer votre inscription.</p>';
        $mail->AltBody = 'Validation du compte. Cliquez sur le bouton pour confirmer votre inscription.';

        // envoi du mail
        if ($mail->send()) {
            echo "Le mail a été envoyé";
        } else {
            // $mail->ErrorInfo = propriété classe PHPMailer
            echo "Erreur d'envoi : " . $mail->ErrorInfo;
        }

    } else {
        echo "Adresse email invalide";
    }
}
?>