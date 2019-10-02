<?php
function monnaie($montant)
{
    if($montant >= 1){
        if($montant%10 > 0){
            $BilletDix = ($montant - $montant%10) / 10;
            $montant= $montant%10;
        }else{
            $BilletDix = $montant / 10;
            $montant = 0;
        }
        if(($montant % 5) > 0){
            $BilletCinq = ($montant - $montant%5) / 5;
            $montant = $montant % 5;
        }else{
            $BilletCinq = $montant / 5;
            $montant = 0;
        }
        if(($montant % 2) > 0){
            $PieceDeux = ($montant - $montant%2) / 2;
            $montant = $montant % 2;
        }else{
            $PieceDeux = $montant / 2;
            $montant = 0;
        }
        $PieceUn = $montant;
    }
    $Monnaie = "<p>Voici votre monnaie</p>";
    $Monnaie .= "<ul>";
    $Monnaie .= "<li>".$BilletDix." billets de 10 euros, </li>";
    $Monnaie .= "<li>".$BilletCinq." billets de 5 euros, </li>";
    $Monnaie .= "<li>".$PieceDeux." pièces de 2 euros, </li>";
    $Monnaie .= "<li>".$PieceUn." pièces de 1 euros, </li>";
    $Monnaie .= "</ul>";
    return $Monnaie;
}

echo monnaie(100);