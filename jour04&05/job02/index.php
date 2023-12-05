<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="nom" placeholder="nom"><br>
        <input type="text" name="prenom" placeholder="prenom"><br>
        <input type="text" name="age" placeholder="age"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
    
    
</body>
</html>


<?php
echo "<table>";
echo "<tr><th>Argument</th><th>Valeur</th></tr>";

foreach ($_GET as $argument => $valeur) {
    echo "<tr><td>$argument</td><td>$valeur</td></tr>";
}

echo "</table>";
?>
