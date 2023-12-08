<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php



//test php
session_start();
if(file_exists('compteur_visites.txt'))
{
        $compteur_f = fopen('compteur_visites.txt', 'r+');
        $compte = fgets($compteur_f);
}
else
{
        $compteur_f = fopen('compteur_visites.txt', 'a+');
        $compte = 0;
}
if(!isset($_SESSION['compteur_de_visite']))
{
        $_SESSION['compteur_de_visite'] = 'visite';
        $compte++;
        fseek($compteur_f, 0);
        fputs($compteur_f, $compte);
}
fclose($compteur_f);
echo '<strong>'.$compte.'</strong> visites.';

//initialiser le compteur
$compteurValue = isset ($_POST ['compteur']) ?
$_POST ['compteur'] : 0;


//verifier si le bouton "reset" à ete cliqué
if (isset ($_POST ['reset'])) {
    $compteurValue = 0;
}

//afficher le compteur et le bouton 
echo "<h1>Compteur </h1>";
echo "<p>$compteurValue</p>";
echo "<form method='post>";
echo "<input type='hidden'
name='compteur' value='$compteurValue'>";
echo "<input type='submit'
name='reset' value='reset'>";
echo "</form>";

?>

</head>

</body>
</html>




