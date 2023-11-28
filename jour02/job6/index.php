<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
/*rectangle 20 largeur 10 de hauteur*/
    <?php
$largeur = 20;
$hauteur = 10;

if ($largeur <=0){
    echo "la largeur indique doit etre au minimum de 1";
}
if ($hauteur <=0){
    echo "la hauteur indique doit etre au minimum de 1";
}

// la ligne du haut du rectangle
$texte = '<span style="color: white">_</span>';

for ($i = 2; $i <= ($largeur-2); $i++) {
    $texte = $texte. '<span style="color: red">_</span>';
}

echo $texte. '<br />';

//bordure gauche et droite du rectangle
for ($j = 1; $j <= ($hauteur-1); $j++) {

for ($i = 1; $i <= $largeur; $i++) {
    if (($i == 1) || ($i == $largeur))
    {
        $texte = $texte. '<span style="color: red">|</span>';
    }else{
        $texte = $texte. '<span style="color: white">_</span>';
         }
 }
    echo $texte. '<br/>';
}

//ligne du bas

$texte = 'span style="color: red">|</span>';

for ($i = 2; $i <= ($largeur-1); $i++) {
    $texte = $texte.'<span style="color: red">_</span>';;
}

$texte = $texte. '<span style="color: red">|</span>';

echo $texte. '<br/>';


?>
    
</body>
</html>