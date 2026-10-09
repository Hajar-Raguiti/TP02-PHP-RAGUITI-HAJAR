<?php
//Declaration de variable .
$numeroMois = (int) date("m");

//
switch ($numeroMois) {
    case 1:
        echo"Janvier <br>";
        break;
    case 2:
        echo"Février <br>";
        break;
    case 3:
        echo"Mars <br>";
        break;
    case 4:
        echo"Avril <br>";
        break;
    case 5:
        echo"Mai <br>";
        break;
    case 6:
        echo"Juin <br>";
        break;
    case 7:
        echo"Juillet <br>";
        break;
    case 8:
        echo"Août <br>";
        break;
    case 9:
        echo"Septembre <br>";
        break;
    case 10:
        echo"Octobre <br>";
        break;
    case 11:
        echo"Novembre  <br>";
        break;
    case 12:
        echo"Décembre <br>";
        break;
    default:
        echo"Numéro de mois invalide";
        break;
}
?>