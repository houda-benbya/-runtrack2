<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    // Vérifier si les valeurs sont valides
    if (is_numeric($largeur) && is_numeric($hauteur)) {
        // Afficher la maison
        echo '<pre>';
        for ($i = 1; $i <= $hauteur; $i++) {
            for ($j = 1; $j <= $largeur; $j++) {
                if ($i == 1 || $j == 1 || $j == $largeur || $i == $hauteur) {
                    echo '*';
                } else {
                    echo ' ';
                }
            }
            echo "\n";
        }
        echo '</pre>';
    } else {
        echo 'Veuillez entrer des valeurs numériques pour la largeur et la hauteur.';
    }
}
?>

<form method="POST" action="">
    <label for="largeur">Largeur :</label>
    <input type="text" name="largeur" id="largeur" required>

    <label for="hauteur">Hauteur :</label>
    <input type="text" name="hauteur" id="hauteur" required>

    <button type="submit">Valider</button>
</form>
