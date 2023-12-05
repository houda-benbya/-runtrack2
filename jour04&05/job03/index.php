<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>methode post</title>
</head>
<style>
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
    }

    button {
        background-color: #4caf50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombre_arguments = count($_POST);

        echo "Le nombre d'arguments POST envoyé est : " . $nombre_arguments;
    }
    ?>

    <div class="formulaire">

        <form method="POST">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="adresse">Adresse :</label>
            <textarea id="adresse" name="adresse" rows="4" required></textarea>

            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required>



            <label for="commentaire"> Votre commentaire :</label>
            <textarea type="text" id="commentaire" name="commentaire" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </div>
