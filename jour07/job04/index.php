<?php
$a = 10;
$operation = "+";
$b = 5;

function calcule($a, $operation, $b) {
   if ($operation == "+") {
            return $a + $b;
   } elseif ($operation == "-") {
         return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
           return $a / $b;
    } else{
            return "Opération non valide";
    }
}
echo calcule ($a, $operation, $b)


?>