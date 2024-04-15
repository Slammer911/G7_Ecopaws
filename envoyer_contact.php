<?php
session_start();
include 'navigation.php';
// Connexion à la base de données
$host = "localhost"; // ou l'adresse du serveur
$dbname = "animalerie";
$username = "root"; // ou votre nom d'utilisateur pour la base de données
$password = ""; // ou votre mot de passe pour la base de données

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Définir le mode d'erreur PDO à exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupération des données du formulaire
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Préparation de la requête d'insertion
        $sql = $conn->prepare("INSERT INTO messages_contact (nom, email, message) VALUES (?, ?, ?)");
        $sql->execute([$nom, $email, $message]);

        // Affichage du message de confirmation
        $_SESSION['message_confirmation'] = "Votre message a bien été envoyé.";
        header('Location: contact.php'); // Redirection vers contact.php
        exit();
    }
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
