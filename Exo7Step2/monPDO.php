<?php 

const HOST_NAME = "loclahost"; 


const DB_NAME ="basefruits"; //const DB_NAME = "db_panierfruit";
const USER_NAME ="root";
const PWD ="";

try{
    $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME;
    $monPDO = new PDO($connexion, USER_NAME,PWD, array(PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXEPTION));
} catch(PDOExeption $e){
    $message = "Erreur de connexion à la DB". $e->getMessage();
    die($message);
}

if($monPDO){
    $limitation = 130;
    $req = "select * from fruit where poid > :valeur";
    $stmt = $monPDO->prepare($req); // stmt est une requête préparer qui sert à éxécuter la même requête plusieur fois 
    $stmt-> bindValue(' :valeur', $limitation, PDO::PARAM_INT); // PDOStatement::BinValue() est une fonction intégrée a PHP qui est utilisé pour lier une valeur à un paramètre 
    $stmt->execute();
    $res1 = $stmt->fetchAll();// PDOStaement::fetchAll() retourne un tableau contenant toutes les lignes d'un jeu d'enregistrement 
    echo"<pre>"; 
    print_r($res1);
}


?>