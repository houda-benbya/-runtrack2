<?php
$nombre0 = 0;
$nombre1337 = 1337;
$hide = "";
$br = "<br>";
$array = array(26, 37, 88, 1111);

while($nombre0 < $nombre1337){
    $nombre0=$nombre0 + 1;
    if(!in_array($nombre0, $array)){
        echo $nombre0 . $br;
    }
}
?>