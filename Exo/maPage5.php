<?php
/* Utilisation des fonctions en PHP */
/* Déclaration des variables */
    $nomJoueur1 ="Matthieu";
    $ageJoueur1 = 30;
    $estUnHommeJoueur1 = true;

    $nomJoueur2 = "Tata";
    $ageJoueur2 = 25;
    $estUnHommeJoueur2 = false;
?>
<?php
   
/* Parametrage de la fonction */
    afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
    afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
?>
<?php
/* Appeler la fonction*/ 
    function afficherJoueur ($nom, $age, $homme){
        echo "Nom du joueur 1 : " .$nom;
        echo "<br/>";
        echo "Âge du joueur 1: " .$age;
        echo "<br/>";
        $age = $age + 1 ;
        echo "Âge du joueur 1: " .$age;
        echo "<br/>";

        if($homme === true){
            echo "c'est un homme";
        } else { $homme === false;
            echo "C'est une femme";
        }
        echo "<br/>";
    }
?>
<?php
/* Déclaration d'une 2ème fonction */
    function test ($c){
        $a = 5;
        $b = 10;
        return $a + $b + $c;
        echo "<br/>";
    }
    echo "Le résultat de la fonction test vaut : ";
    $text = test(3);
    echo$text;
?>


