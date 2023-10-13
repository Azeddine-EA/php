<?php
/* Utilisation des fonctions en PHP */
/* Déclaration des variables */
define("separateur","_");
    $nomJoueur1 ="Matthieu";
    $ageJoueur1 = 18;
    $estUnHommeJoueur1 = true;

    $nomJoueur2 = "Tata";
    $ageJoueur2 = 30;
    $estUnHommeJoueur2 = false;
 
/* Parametrage d'affichage */
    genererSeparation(separateur);
    afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
    echo "<br/>";
    afficherMajeur($ageJoueur1); 
    genererSeparation(separateur);
    afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
    echo "<br/>";
    afficherMajeur($ageJoueur2);
    genererSeparation(separateur);
    
    afficherJoueurLeplusAgee($ageJoueur1,$ageJoueur2);
    genererSeparation(separateur);
    $differenceAge = calculDifferenceAge($ageJoueur1, $ageJoueur2);
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

 ?>