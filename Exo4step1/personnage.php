<?php 
    include("commun/header.php");
    include("commun/menu.php");

    $p1 = [
        "Nom" => "Luke",
        "Img" => "player.png",
        "Age" => 27,
        "Sexe" => true,
        "Force" => 5,
        "Agilite" =>4
    ];
    $persos = [$p1];
?>

<h2> Personnage : </h2>
<?php 
    foreach($persos as $perso){
        echo "<div class='gauche'>";
            echo "<img src = 'source/img/".$perso['Img']."' alt = '".$perso['Img']."' />";
        echo "</div>";
        echo "<div class='gauche'>";
            afficherPerso($perso);
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    function afficherPerso($personnage){
        foreach($personnage as $index => $value){
            if($index !== "Img" && $index !== "Sexe"){
                echo "<b>".$index."</b> : ". $value . "<br/>";
            }
            if($index === "Sexe"){
                echo "<b>Sexe</b> :";
                if($value){
                    echo "Homme <br/>";
                } else {
                    echo "Femme <br/>";
                }
            }
        }
    }
?>

<?php 
   // include("commun/footer.php");
?>