<?php
$i= 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
while ($i<1337)
{
    $i=$i+1;
    echo "<p>" ,$i, "</p>";

if ($i==42){
    echo "<b>", "<u>" , $i , "</b>", "</u>";
}
}

 ?>

</body>
</html>