<?php
class Panier{
    private static $prochainIdentifiant = 1;
    //déclaration des variables privée
    private $identifiant;
    private $pommes = [];
    private $cerises = [];
    //Création de la fonction construct pour incrémenter de 1 d=l'identifiant 
    public function __construct(){
        $this->identifiant = self::$prochainIdentifiant;
        self::$prochainIdentifiant ++;
    }
    //Création de la fonction addFruit 
    public function addFruit($fruit){
        if($fruit->getNom() === Fruit::POMME){
            $this->pommes[] = $fruit;
        } else if($fruit->getNom() === Fruit::CERISE){
            $this->cerises[] = $fruit;
        }
    }
    //Création de la fonction getIdentifiant qui ^permet de récuperer l'identifiant générer par la fonction 
    public function getIdentifiant(){
        return $this->identifiant;
    }
    //Création de la fonction toString
    public function __toString(){
        $affichage = "Voici le contenu du panier " . $this->identifiant ." : <br/>";
        foreach($this->pommes as $pomme){
            $affichage .= $pomme;
        }
        foreach($this->cerises as $cerise){
            $affichage .= $cerise;
        }
        return $affichage;
    }
}
?>