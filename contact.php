<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];

    $destinataire = "mondessubtils@yahoo.com";
    $sujet = "Nouvelle demande de réservation";

    $contenu = "Nom : " . $nom . "\n";
    $contenu .= "Prénom : " . $prenom . "\n";
    $contenu .= "Téléphone : " . $telephone . "\n\n";
    $contenu .= "Message :\n" . $message;

    $headers = "From: mondessubtils@yahoo.com\r\n";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Votre demande a bien été envoyée.";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>
