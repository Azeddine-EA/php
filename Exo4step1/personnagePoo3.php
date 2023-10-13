<?php 
    include("commun/header.php");
    include("commun/menu.php");

    class personnage{
        public $nom;
        public $img;
        public $age;
        public $sexe;
        public $force;
        public $agilite ;
    
        function __Construct($nom,$img,$age,$sexe,$force,$agilite){
            $this->nom = $nom;
            $this->img = $img;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->force = $force;
            $this->agilite = $agilite;
        }

        public function afficherMesinfos(){
            echo"<b>Nom : " . $this->nom ."</b><br/>";
            echo"<b>Âge : " . $this->age ."</b><br/>";
            echo"<b>Sexe</b> :";
            if($this->sexe){
                echo "<b>Homme </b><br/>";
            } else{
                echo "<b>Femme</b> <br>";
            }
            echo "<b>Force :".$this->force . "</b> <br/>";
            echo "<b>Agilité :".$this->agilite . "</b> <br/>";

        }

        public function afficherMesInformationsTemplate(){
            echo"<div class ='gauche'>";
                echo "<img src = 'source/img/".$this->img."'alt='".$this->img."'/>";
            echo"</div>";
            echo"<div class = 'guche'>";
                $this->afficherMesInfos();
            echo"</div>";
            echo"<div class = 'clearB'></div>";
        }
    }
        
?>
     <h2> Personnage : </h2>
<?php     

    $p1=new personnage("Luke","player.png",27,true,4,5);
    $p1->afficherMesInformationsTemplate();
    echo"<b>--------------------------------------</b>";
    echo"</br>";
    $p2=new personnage("Katy","playerF.png",22,false,3,6);
    $p2->afficherMesInformationsTemplate();
    echo"<b>--------------------------------------</b>";
    echo"</br>";
    $p3=new personnage("Mark","playerM.png",33,true,7,2);
    $p3->afficherMesInformationsTemplate();
?>        
    
 <?php
 include("commun/footer.php");
 ?>



