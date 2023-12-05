<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";
$nok = strlen($str);

for ($ok = 0; $ok < $nok; $ok++) {
    if ($ok == $nok - 1) {
        echo $str[0];
    } else {
        echo $str[$ok + 1];
    }
    }

?>