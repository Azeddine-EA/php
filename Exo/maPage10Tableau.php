<?php
/* Utilisation des fonctions en PHP */
/* Déclaration des variables */
define("separateur","_");

    $joueur1 = ["Matthieu",20, true ];
    $joueur2 = ["Tata",23, false ];
 
/* Parametrage d'affichage */
    genererSeparation(separateur);
    afficherJoueurV2($joueur1);
    echo "<br/>";
    afficherMajeur($joueur1[1]); 
    genererSeparation(separateur);
    afficherJoueurV2($joueur2);
    echo "<br/>";
    afficherMajeur($joueur2[1]);
    genererSeparation(separateur);
    
    afficherJoueurLeplusAgee($joueur1[1],$joueur2[1]);
    genererSeparation(separateur);
    $differenceAge = calculDifferenceAge($joueur1[1],$joueur2[1]);
    echo "La difference d'âge est de :" .$differenceAge;

    function afficherJoueur ($nom, $age, $homme){
        echo "Nom du joueur 1 : " .$nom;
        echo "<br/>";
        echo "Âge du joueur 1: " .$age;
        echo "<br/>";

        if($homme === true){
            echo "c'est un homme";
        } else { $homme === false;
            echo "C'est une femme";
        }
}
/* Parametrage de la fonction  pour le joueur le plus agée */
    function afficherJoueurLeplusAgee($ageJoueur1,$ageJoueur2){
        if($ageJoueur1 > $ageJoueur2){
            echo"joueur 1 est le plus agé";
        } else if ($ageJoueur1 < $ageJoueur2){
            echo"Joueur 2 est le plus agé";
        }
          else {
            echo "Ils ont le même âge";
        }
}
/* Parametrage de la fonction avec un séparateur*/
    function genererSeparation($separateur){
        echo "<br/>";
        for($i = 0; $i < 50; $i++){
        echo $separateur;
    }
    echo"<br/>";
}
/* Parametrage de la fonction diffécence d'âge */
 function CalculDifferenceAge($age1, $age2){
     $resultat = $age1 - $age2;
     if($resultat < 0 ){
         $resultat = $resultat;
     }  
     return $resultat;
 }
 function afficherMajeur($age){
        switch($age){
            case 21 : echo "Il est majeur";
            case 20 : echo "Il est majeur";
            case 19 : echo "Il est majeur";
            break; /*Interrompe le switch */
            case 18 : echo "Il est tout juste majeur";
            break;
            case 17 : echo "Il est encore mineur";
            break;
            case 16 : echo "Il est mineur";
            break;
            case 10 : echo "Il est mineur";
            break;
            default: echo "???";
            break;
     }
 }

function afficherJoueurV2($tab){
    foreach($tab as $indice => $value) {
        echo $indice . " : " . $value. "<br/>";
    }
}

 ?>