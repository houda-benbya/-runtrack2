<?php
$hi= 0;
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
while ($hi<100)
{
    $hi=$hi+1;
   
    

if ($hi>0 and $hi<20)
{
    echo  "<br>" . "<i>" . $hi . "</i>" . "</br>";
}



if ($hi >19 and $hi<26){
    echo "<br>" . $hi, "</br>";
}
if ($hi >49 and $hi<101){
    echo "<br>" . $hi, "</br>";
}


if ($hi>25 and $hi<50)
{
    echo  "<br>" . "<u>" . $hi . "</br>" . "</u>";
}

}






 ?>

</body>
</html>