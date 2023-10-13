<?php 
    require_once("classes/personnage.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h2> Personnage : </h2>

<?php 
$p1 = new Personnage("Luke","player.png",27,Personnage::HOMME,Personnage::FORCE_MED, Personnage::AGILITE_MED );
$p2 = new Personnage("Katy","playerF.png",25,Personnage::FEMME,Personnage::FORCE_MIN, Personnage::AGILITE_MAX );
$p3 = new Personnage("Mark","playerM.png",33,Personnage::HOMME,Personnage::FORCE_MAX, Personnage::AGILITE_MIN );
$persos = Personnage::getListePersonnage();

    foreach($persos as $perso){
        $perso-> afficherMesInformationsTemplate($perso);
        echo "<br/>-------------------------------<br/>";
    }
    

?>

<?php 
    include("common/footer.php");
?>