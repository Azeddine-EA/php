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
/* Parametrage de la fonction avec un séparateur*/
    genererSeparation();
    afficherJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
    genererSeparation();
    afficherJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
    genererSeparation();
    
    afficherJoueurLeplusAgee($ageJoueur1,$ageJoueur2);
    genererSeparation();
 ?>
 <?php
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
 ?>
 <?php
    function afficherJoueurLeplusAgee($ageJoueur1,$ageJoueur2){
        if($ageJoueur1 > $ageJoueur2){
            echo"joueur 1 est le lus agé";
        } else {
            echo"Joueur 2 est le plus agé";
        }

        if($ageJoueur1 === "30"){
            echo "<br/>";
            echo "C'est égal";
    }
}

?>
<?php
/* Parametrage de la fonction avec un séparateur*/
    function genererSeparation(){
        echo "<br/>";
        echo "----------------------------------------";
        echo "<br/>";
}

?>