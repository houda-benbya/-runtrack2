<?php
// Créer ou mettre à jour le cookie "nbvisites"
if(isset($_COOKIE['nbvisites'])) {
    $nbVisites = $_COOKIE['nbvisites'] + 1;
} else {
    $nbVisites = 1;
}
setcookie('nbvisites', $nbVisites, time() + 3600); // Le cookie expire dans 1 heure

// Afficher le contenu du cookie
echo "Nombre de visites : " . $nbVisites;

// Réinitialiser le compteur
if(isset($_POST['reset'])) {
    setcookie('nbvisites', 0, time() - 3600); // Supprimer le cookie en le faisant expirer dans le passé
    header('Location: index.php'); // Rediriger vers la page actuelle pour mettre à jour le compteur affiché
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Compteur de visites</title>
</head>
<body>
    <h1>Compteur de visites</h1>
    <form method="post">
        <input type="submit" name="reset" value="Réinitialiser">
    </form>
</body>
</html>
