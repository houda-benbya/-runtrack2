
<?php

// Vérifie si le cookie 'prenom' est défini
if (isset($_COOKIE['prenom'])) {
    
    $prenom = $_COOKIE['prenom'];
    echo "Bonjour $prenom !";
    echo '<br>';
    echo '<button name="deco">Déconnexion</button>';
} else {
    
    // Affiche un formulaire de connexion si le cookie 'prenom' n'est pas défini
    echo '<form action="" method="post">';
    echo '  <input type="text" name="prenom" placeholder="Votre prénom">';
    echo '  <button type="submit" name="connexion">Connexion</button>';
    echo '</form>';

    // Traite le formulaire de connexion lorsqu'il est soumis
    if (isset($_POST['connexion'])) {
        $prenom = $_POST['prenom'];
       
        // Crée un cookie 'prenom' avec une durée de vie de 1 jours
        setcookie('prenom', $prenom, time() + (86400 * 1), '/');
       
        // Redirige vers la page index.php
        header('Location: index.php');
        exit;
    }
}

// Traite la déconnexion lorsqu'elle est demandée
if (isset($_POST['deco'])) {
   
    // Supprime le cookie 'prenom'
    setcookie('prenom', '', time() - 3600, '/');
   
    // Redirige vers la page index.php
    header('Location: index.php');
    exit;
}

?>
