<?php
require_once("classes/paniers.manager.php");
class Panier{
    public static $paniers = [];

    private $identifiant;
    private $nomClient;
    private $pommes = [];
    private $cerises = [];

    public function __construct($identifiant, $nomClient){
       $this->identifiant = $identifiant;
       $this->nomClient = $nomClient;
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }

    public function setFruitToPanierFromDB(){
        $fruits = panierManager::getFruitPanier($this->identifiant);

        foreach($fruits as $fruit){
            if(preg_match("/cerise/",$fruit['fruit'])){
                $this->cerises[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            } else if(preg_match("/pomme/",$fruit['fruit'])){
                $this->pommes[] = new Fruit($fruit['fruit'],$fruit['poids'],$fruit['prix']);
            }
        }
    }

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

    public function addFruit($fruit){
        if(preg_match("/cerise/",$fruit->getNom())){
            $this->cerises[] = $fruit;
        } else if(preg_match("/pomme/",$fruit->getNom())){
            $this->pommes[] = $fruit;
        }
    }

    public function saveInDB(){
        return panierManager::insertIntoDB($this->identifiant, $this->nomClient);
    }

    public static function generateUniqueId(){
        return panierManager::getNbPanierInDB() + 1;
    }

}
?>