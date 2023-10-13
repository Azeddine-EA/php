<?php
/* Déclaration des varialbles */
    $nomDuJoueur1 = "Matthieu";
    $age = 30;
    $estUnHomme = true;
/* Afficher le résultat */
    echo"Nom du joueur 1 :" .$nomDuJoueur1;
    echo"<br/>";
    echo"Âge du joueur 1:" .$age;
    echo"<br/>";
    $age = $age+1;
    echo"Âge du joueur 1:" .$age;
    echo"<br/>";

if($estUnHomme === true){
    echo"C'est un homme";
    echo"<br/>";
}else{ $estUnHomme === false;
    echo"C'est une femme";
}

?>