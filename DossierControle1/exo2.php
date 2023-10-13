<?php 
    require_once("classes/fruits.class.php");
    include("common/header.php");
    include("common/menu.php");
?>

<h2> Fruits : </h2>

<?php   
// ajout des valeurs 
    $f1 = new Fruit("Pomme","apple.png",Fruit::POID_1,Fruit::PRIX_1,);
    $f2 = new Fruit("Pomme","apple.png",Fruit::POID_2,Fruit::PRIX_1,);
    $f3 = new Fruit("Pomme","apple.png",Fruit::POID_3,Fruit::PRIX_1, );
    $f4 = new Fruit("Cerise","cherry.png",Fruit::POID_4,Fruit::PRIX_2,);
    $f5= new Fruit("Cerise","cherry.png",Fruit::POID_5,Fruit::PRIX_2,);
    $f6 = new Fruit("Cerise","cherry.png",Fruit::POID_6,Fruit::PRIX_2 );
    $f7 = new Fruit("Cerise","cherry.png",Fruit::POID_4,Fruit::PRIX_2,);

    $fruit = Fruit::getListeFruit();

    foreach($fruit as $fruit){
        $fruit-> afficherMesInformationsTemplate($fruit);
        echo "<br/>-------------------------------<br/>";
    }



?>

<?php 
    include("common/footer.php");
?>