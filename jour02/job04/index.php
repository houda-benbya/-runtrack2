<?php
$nombre0 = 0;
$nombre100 = 100;
$br = "<br>";

while($nombre0 < $nombre100){
    $nombre0=$nombre0 + 1;
    if($nombre0 % 3 == 0 and $nombre0 % 5 == 0){
        echo "fizzbuzz" . $br;
    }

    elseif($nombre0 % 5 == 0){
        echo "buzz" . $br;
    }

    elseif($nombre0 % 3 == 0){
        echo "fizz" . $br;
    }

    else{
        echo $nombre0 . $br;
    }
}

?>