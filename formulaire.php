<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    // Récupérer les données du formulaire
    $firstname = htmlspecialchars($_POST["firstname"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);
    
    // Valider les données (vous pouvez ajouter vos propres validations ici)

    // Envoyer les données par e-mail
    $to = "figeac.hi@gmail.com";
    $subject = "Nouveau message depuis le formulaire de contact";
    $message_body = "Nom: $firstname\nEmail: $email\nTéléphone: $phone\nMessage:\n$message";
    $headers = "From: $email";

    // Envoyer l'e-mail
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    // Le formulaire n'a pas été soumis, rediriger ou afficher un message d'erreur
    echo "Erreur : Le formulaire n'a pas été soumis.";
}
