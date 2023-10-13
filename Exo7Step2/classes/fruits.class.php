<?php 
class Fruit{
    //déclaration des variables privée
    private $nom;
    private $poids;
    private $prix;

    //déclaration des constante
    const POMME = "pomme";
    const CERISE = "cerise";

    const POMMEIMG = "apple.png";
    const CHERRYIMG = "cherry.png";

    //Création de la fonction constuct pour construire le panier
    public function __construct($nom,$poids){
        $this->nom = $nom;
        $this->poids = $poids;
        $this->prix = $this->getPrixFruits($nom);
    }

    //Création de la fonction getNom pour retourner le nom
    public function getNom(){
        return $this->nom;
    }

    //Création de la fonction privée getPrixFruit pour retourner le prix
    private function getPrixFruits($nom){
        if($nom === self::POMME){
            return 15;
        } else if($nom === self::CERISE){
            return 20;
        }
    }

    //Création de la fonction privée toString pour afficher le nom, poid et prix
    public function __toString(){
        $affichage = $this->getAffichageIMG();
        $affichage .= "Nom : " . $this->nom . "<br />";
        $affichage .= "Poids : " . $this->poids . "<br />";
        $affichage .= "Prix : " . $this->prix . "<br />";
        return $affichage;
    }

    //Création de la fonction privée getAffichageIMG pour afficher les images des fruits
    private function getAffichageIMG(){
        if($this->nom === self::POMME){
            return "<img src ='sources/images/".self::POMMEIMG."' alt='image pomme' /> <br/>";
        } else if ($this->nom === self::CERISE){
            return "<img src ='sources/images/".self::CHERRYIMG."' alt='image cerise' /><br/>";
        }
    }

}

?>