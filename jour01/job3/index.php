<?php
$var1= true;
$var2= 14;
$var3= "bonjour";
$var4= 0.4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
<table >
    <thead>
    <tr>
        <th>
            type
        </th>
    
        <th>
            nom
        </th>
    
        <th>
            valeur
        </th>
</tr>
</thead>
<tbody>

    <tr>
        <td>
            boolean
        </td>
    
        <td>
            var1
        </td>
    
        <td>
           <?php echo $var1
           ?>
        </td>
    </tr>

    <tr>
        <td>
            entier
        </td>
    
        <td>
            var2
        </td>
    
        <td>
           <?php echo $var2
           ?>
        </td>
    </tr>

    <tr>
        <td>
            texte
        </td>
    
        <td>
            var3
        </td>
    
        <td>
           <?php echo $var3
           ?>
        </td>
    </tr>

    <tr>
        <td>
            floatant
        </td>
    
        <td>
            var4
        </td>
    
        <td>
           <?php echo $var4
           ?>
        </td>
    </tr>




</tbody>
</table>

    
</body>
</html>
