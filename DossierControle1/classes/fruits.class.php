<?php 
class Fruit{
    private static $fruit = [];

    private $nom;
    private $poids;
    private $prix;
    private $img;

//Remplissage des constantes
    const POID_1 =150;
    const POID_2 =130;
    const POID_3 =160;
    const POID_4 =10;
    const POID_5 =15;
    const POID_6 =20;

    const PRIX_1 =15;
    const PRIX_2 =20;

//fonction construction des informations
    function __construct($nom,$img,$poid,$prix){
        $this->nom = $nom;
        $this->img = $img;
        $this->poid = $poid;
        $this->prix = $prix;
        self::$fruit[] = $this;
}

// déclaration des fonction get
    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getPoid(){return $this->poid;}
    function getPrix(){return $this->prix;}

    function setNom($nom){$this->nom=$nom;}
    function setImg($img){$this->img=$img;}
// déclaration des fonction get
    public function afficherMesInfos(){
        echo "<b>Nom : </b>" . $this->nom ."<br/>";
        echo "<b>Poid : </b>" . $this->poid ."<br/>";
        echo "<b>Prix : </b>" . $this->prix ."<br/>";
    }
// déclaration des fonction get
    public function afficherMesInformationsTemplate(){
        echo "<div class='gauche'>";
            echo "<img src = 'images/".$this->img."' alt = '".$this->img."' />";
        echo "</div>";
        echo "<div class='gauche'>";
        $this->afficherMesInfos();
        echo "</div>";
        echo "<div class='clearB'></div>";
    }

    public static function getListeFruit(){
        return self::$fruit;
    }

}

?>