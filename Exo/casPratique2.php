<?php
/* Déclaration des varialbles */
    $nomEtudiant1 = "DUBOIS";
    $prenomEtudiant1 = "Matthieu";
    $noteEtudiant1 = 14;

    $nomEtudiant2 = "Jean";
    $prenomEtudiant2 = "Patrick";
    $noteEtudiant2 = 34;

    genererSeparation();
    afficherEtudiant($nomEtudiant1, $prenomEtudiant1, $noteEtudiant1);
    genererSeparation();
    afficherEtudiant($nomEtudiant2, $prenomEtudiant2, $noteEtudiant2);
    genererSeparation();
    

    function afficherEtudiant($nom, $prenom, $note){
        echo "Nom   : " .$nom;
        echo "<br/>";
        echo "Prénom   : " .$prenom;
        echo "<br/>";
        echo "Note de l'étudiant  : " .$note;
    
        if($note < 10){
            echo "<br/>";
            echo " Non Admis";
        } else if ($note <= 20){
            echo  "<br/>";
            echo "Admis";
        } else {
            echo "<br/>";
            echo "Erreur de saisi";
        }
    }  
 
function genererSeparation(){
    echo "<br/>";
    echo "----------------------------------------";
    echo "<br/>";
}
?>