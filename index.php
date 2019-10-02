<?php
function monnaie($montant)
{
    if($montant >= 1){
        if($montant%10 > 0){
            $billetDix = ($montant - $montant%10) / 10;
            $montant= $montant%10;
        }else{
            $billetDix = $montant / 10;
            $montant = 0;
        }
        if(($montant % 5) > 0){
            $billetCinq = ($montant - $montant%5) / 5;
            $montant = $montant % 5;
        }else{
            $billetCinq = $montant / 5;
            $montant = 0;
        }
        if(($montant % 2) > 0){
            $pieceDeux = ($montant - $montant%2) / 2;
            $montant = $montant % 2;
        }else{
            $pieceDeux = $montant / 2;
            $montant = 0;
        }
        $pieceUn = $montant;
    }
    $Monnaie = "<p>Voici votre monnaie</p>";
    $Monnaie .= "<ul>";
    $Monnaie .= "<li>".$billetDix." billets de 10 euros, </li>";
    $Monnaie .= "<li>".$billetCinq." billets de 5 euros, </li>";
    $Monnaie .= "<li>".$pieceDeux." pièces de 2 euros, </li>";
    $Monnaie .= "<li>".$pieceUn." pièces de 1 euros, </li>";
    $Monnaie .= "</ul>";
    return $Monnaie;
}

echo monnaie(100);