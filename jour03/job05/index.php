<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$strCount = strlen($str);

$dic = array(
     "consonnes" => 0,
     "voyelle" => 0
);

for($countFor = 0; $countFor < $strCount; $countFor++) {
    if ($str[$countFor] == 'a' || $str[$countFor] == 'e' || $str[$countFor] == 'i'|| $str[$countFor] == 'o' || $str[$countFor] == 'u' || $str[$countFor] == 'y'){
$dic["voyelle"] = $dic["voyelle"] +1;}
else{
    $dic["consonnes"] = $dic["consonnes"] +1;
}

}


echo "<table border='1'>
        <thead>
        <tr>
            <th>voyelle</th>
            <th>consonnes</th>
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>{$dic["voyelle"]}</td>
            <td>{$dic["consonnes"]}</td>
        </tr>
        </tbody>
      </table>";
        








?>