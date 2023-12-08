<?php

session_start();

// Vérifier si le formulaire a été soumis
if(isset($_POST['submit'])) {
    // Récupérer le prénom saisi
    $prenom = $_POST['prenom'];

    // Ajouter le prénom à la variable de session
    $_SESSION['prenoms'][] = $prenom;
}

// Réinitialiser la liste des prénoms si le bouton "reset" est cliqué
if(isset($_POST['reset'])) {
    $_SESSION['prenoms'] = array();
}

// Afficher l'ensemble des prénoms
if(isset($_SESSION['prenoms'])) {
    foreach($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}
?>

<form method="POST" action="">
    <input type="text" name="prenom" placeholder="Entrez votre prénom">
    <input type="submit" name="submit" value="Ajouter">
    <input type="submit" name="reset" value="Réinitialiser">
</form>
