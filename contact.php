<?php 
session_start();
include 'navigation.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contactez-nous</title>
    <link rel="stylesheet" type="text/css" href="presentation.css">
    <meta charset="utf-8">
</head>
<body>
<div class="container-1">
    <!-- Inclure votre barre de navigation ici -->


    <div class="contact-form">
        <h2>Contactez-nous</h2>
        <form action="envoyer_contact.php" method="post">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
            <?php if (!empty($_SESSION['message_confirmation'])) : ?>
    <div style="color: green;">
        <?php 
            echo $_SESSION['message_confirmation']; 
            // Après l'affichage, effacez le message pour qu'il ne réapparaisse pas lors des rechargements futurs.
            unset($_SESSION['message_confirmation']);
        ?>
    </div>
<?php endif; ?>
        </form>
    </div>
   


    <!-- Inclure votre pied de page ici -->
    <?php include 'footer.php'; ?>
	
</div>
</body>
</html>
