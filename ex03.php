<?php 
//Définition des constantes .
define("TAUX_TVA",20);
define("DEVISE","NAD");

//Déclaration du prix HT et quantite.
$prix_unitaireHT = 60 ;
$quantite = 3;

//Calcule du total HT, TVA, TTC .
$totalHT = $prix_unitaireHT*$quantite ;
$montantTVA= $totalHT*TAUX_TVA/100 ;
$totalTTC= $totalHT+$montantTVA ;

//Ajout frais livraison .
$totalTTC+=15;

//Affichage 
echo"<h1>Récapitulatif</h1>";
echo "Total HT : ".$totalHT." <br>";
echo "Montant TVA : ".$montantTVA." <br>";
echo "Total TTC avant Frais de livraison : ".($totalTTC-15)." <br>";
echo "Total TTC avec Frais de livraison : ".$totalTTC."<br>";

//Verification d'existance de constante 
$existTAUX_TVA= defined("TAUX_TVA");
if ($existTAUX_TVA){
    echo"le TAUX_TVA existe . <br>";
} 
else {
    echo"le TAUX_TVA n'existe pas . <br>";
}
?>