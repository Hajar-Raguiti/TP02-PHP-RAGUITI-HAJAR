<?php
//Affichage des nombrs pairs
$a=0;
echo"Les nombres pairs de 1 à 20 : <br>";

while ($a <= 20) {
    if ($a%2 == 0) {
        if ($a==10) {
            echo "<b>$a</b><br>";
        }
        else {
            echo $a."<br>";
        }
    }
    $a++;
}

//Comparaison entre deux boucles .
$compt=5;
$nmbexecut=0;
while ($compt < 5 && $compt!=0) {
    $compt++;
    $nmbexecut++;
}
echo"Nombre d'execution de premier boucle : ".$nmbexecut."<br>";

$compt=5;
$nmbexecut=0;
do {

    $compt++;
    $nmbexecut++;
} while ($compt < 5 && $compt!=0);
echo"Nombre d'execution de 2eme boucle : ".$nmbexecut."<br>";

//Continu et Break
for ($i=1; $i <=20 ; $i++) { 
    if ($i%3==0) {
        continue;
    }
    if ($i==16) {
        break;
    }
    else {
        echo $i;
    }
}
?>