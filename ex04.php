<?php 
//Declaration de six variables .
$nmbInt=42 ;
$nmbChar= "42";
$nmbFloat= 15.8 ;
$etatTrue= true ;
$etatFalse= false;
$valNull = null;

//Examination de type &valeur .
echo"Les six variables avec leurs types et valeurs : <br>";
echo "<pre>";
var_dump($nmbInt);
var_dump($nmbChar);
var_dump($nmbFloat);
var_dump($etatTrue);
var_dump($etatFalse);
var_dump($valNull);
echo"</pre>"

//Conversion des variables .
echo"Conversion des variables : <br>";
$nmbCharToInt= (int) $nmbChar ;
$nmbFloatToInt = (int) $nmbFloat;
$nmbIntToString = (string) $nmbInt ;

echo "<pre>";
var_dump($nmbCharToInt);
var_dump($nmbFloatToInt);
var_dump($nmbIntToString);
echo "</pre>";

//Affichage de True et False .
echo"Affichage True  : ".true."<br>";
echo"Affichage False  : ".false."<br>";
var_dump(true);
var_dump(false);

//Conversion en booléens .
echo"Conversion en booléens";
$intToBool = (bool) 0;
var_dump($intToBool);
$charToBool = (bool) "0";
var_dump($charToBool);
$textToBool = (bool) "PHP" ;
var_dump($textToBool);


?>