<?php 
//Déclaration des variables .
$nom = "Raguiti" ;
$prenom = "Hajar";
$age = 20;
$formation = "TC-IAP" ;

//Construction de phrase et affichage.
$phrase_present = "je suis l'etudiante ".$prenom." ".$nom.
" , j'ai ".$age." ans et j'étude ".$formation." .";
echo $phrase_present,."<br>";

//Concatination à la suit de la phrase .
$phrase_present.="J'apprends PHP .";
echo $phrase_present,."<br>";

//Declarations des notes et affichage.
$note= 12 ;
$Note = 16 ;
echo $note ."<br>";
echo $Note ."<br>";

?>