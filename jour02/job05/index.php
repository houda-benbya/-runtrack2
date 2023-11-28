<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*faire un algorithme qui affiche lesnombres premiers 
     jusqu'a 1000 en mettant un retour à la ligne entre chaque nombre*/

     $n = 1000;

     echo "les nombres premiers entre 0 et ".$n." sont : <br/>";

     //on prend chaque nombre entre 2 et n  (0 et 1 n'etant pas premier)
     for ($i = 2; $i <= $n; $i++){
        $nbDiv = 0;//et on compte le nombre de diviseur
        for($j=1;$j<=$i;$j++){
            if($i%$j==0){
                $nbDiv++;
            }
     }
     if($nbDiv == 2){
        //un nombre premier est un chiffre qui ne possede que 2 diviseur (1 et // lui meme)
        echo $i. "<br/>";
     }
    }

     ?>

</body>
</html>