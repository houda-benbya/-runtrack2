<?php
$str= "im sorry Dave i'm affraid i can't do that";

foreach (str_split($str) as $char) {
    if (preg_match('/[aeiouy]/i',$char)) 
{
    echo $char;
}
}
?>