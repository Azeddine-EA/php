<?php

define("separateur","_");

    $eleve1 =[
        "Prénom" => "Pierre", 
        "Note" => 5, ];
    $eleve2 = [
        "Prénom" => "Jacques", 
        "Note" => 15,];
    $eleve3 = [
        "Prénom" => "Jean", 
        "Note" => 10,];
    $eleve4 = [
        "Prénom" => "Valerie", 
        "Note" => 12,];
    $eleve5 = [
        "Prénom" => "Paul", 
        "Note" => 18,];
    $eleve6 = [
        "Prénom" => "Delphine", 
        "Note" => 23,];
    $eleve7 = [
        "Prénom" => "Antoine", 
        "Note" => 0,];
 

    genererSeparation(separateur);
    afficherEleve($eleve1);
    afficherMention($eleve1["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve2);
    afficherMention($eleve2["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve3);
    afficherMention($eleve3["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve4);
    afficherMention($eleve4["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve5);
    afficherMention($eleve5["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve6);
    afficherMention($eleve6["Note"]);
    echo "<br/>";
    genererSeparation(separateur);
    afficherEleve($eleve7);
    afficherMention($eleve7["Note"]);
    echo "<br/>";   

    function genererSeparation($separateur){
        echo "<br/>";
        for($i = 0; $i < 50; $i++){
        echo $separateur;
    }
    echo"<br/>";
}

 function afficherMention($eleve){
    if($eleve == 0 ){
        echo "Mention: Nul";
    } elseif ($eleve >= 1 && $eleve <= 5){
        echo "Mention: Moyen";
    } elseif ($eleve >= 6 && $eleve <= 10){
        echo " Mention: Passable";
    } elseif ($eleve >= 11 && $eleve <= 15){
        echo " Mention: Bien";
    } elseif ($eleve >= 16 && $eleve <= 19){
        echo "Mention: Très bien";
    } elseif ($eleve == 20) {
        echo " Mention: Excellent";
    } else {
        echo"Erreur";
    }
 }

    function afficherEleve($tab){
        foreach($tab as $indice => $value) {
            echo $indice . " : " . $value. "<br/>";
        }
    }


 ?>


