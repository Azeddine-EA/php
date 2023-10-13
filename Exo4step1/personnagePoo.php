<?php 
    include("commun/header.php");
    include("commun/menu.php");

    class personnage{
        public $nom = "Luke";
        public $img = "player.png";
        public $age = 27;
        public $sexe = true;
        public $force = 5;
        public $agilite = 4;
        
        public function afficherMesInformationsTemplate(){
            echo"<div class ='gauche'>";
                echo "<img src = 'source/img/".$this->img."'alt='".$this->img."'/>";
            echo"</div>";
            echo"<div class = 'guche'>";
                $this->afficherMesInfos();
            echo"</div>";
            echo"<div class = 'clearB'></div>";
        }

        public function afficherMesInfos(){
            echo"<b>Nom : ".$this->nom."</b> <br/>";
            echo"<b>Nom : ".$this->age."</b> <br/>";
            echo "<b>Sexe<b> :";
            if($this->sexe){
                echo "Homme <br/>";
            } else{
                echo "Femme <br>";
            }
            echo "<b>Force :".$this->force . "</b> <br/>";
            echo "<b>Agilité :".$this->agilite . "</b> <br/>";

        }
    }
echo"<h2>Personnage :</h2>";
$person=new personnage();
$person->afficherMesInformationsTemplate();

    include("commun/footer.php");
?>