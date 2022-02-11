<?php

$tableau = array(
    0 => 1,
    1 => 91,
    2 => 23,
    3 => 44,
    4 => 12,
    5 => 88,
    6 => 57,
);

echo "Avant le tri:";
for($K = 0; $K < count($tableau); $K++) {
    echo('<br>'.$tableau[$K]);
}
for($I = count($tableau) - 2;$I >= 0; $I--) {
    for($J = 0; $J <= $I; $J++) {
     if($tableau[$J + 1] < $tableau[$J]) {
      $t = $tableau[$J + 1];
      $tableau[$J + 1] = $tableau[$J];
      $tableau[$J] = $t;
     }
    }
   }

   echo "<br>"."<br>"."Après le tri:";
for($L = 0; $L < count($tableau); $L++) {
  echo('<br>'. $tableau[$L]);
}
echo "<br>"."<br>";

$rech = 88;

foreach($tableau as $key => $value){
        if ($value == $rech){
            echo "La valeur ". $value. " existe à la position : ". $key;}

}

function dichotomie($tab, $valeur, $deb, $fin)
{
   if($deb <= $fin){
        $milieu = (int)(($deb+$fin)/2);
        if($tab[$milieu] == $valeur) echo("Le nombre ". $valeur. " se trouve à la position : ". $milieu);
    else if($tab[$milieu] < $valeur) return dichotomie($tab, $valeur, $milieu+1, $fin);
    else if($tab[$milieu] > $valeur) return dichotomie($tab, $valeur, $deb, $milieu-1);}
   else echo("Le nombre ". $valeur. "  ne se trouve pas dans le tableau");
}
   
echo "<br>"."<br>";
echo dichotomie($tableau,4,0,6);

?>
