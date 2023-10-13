<?php
    include("commun/header.php");
    include("commun/menu.php");
?>
<br/>
<h1> Afficher des tables de multiplication </h1>
<form action="#" method="get">
    <label for="table"> Table de multiplication : </label>
    <input type ="number" name="table" id="table"> 
    <input type ="submit" value="Envoyer"> 
</form>
<?php
    if(isset($_GET["table"])){
        echo"<h2> La table de ". $_GET["table"] . "</h2>";
        for($i = 1 ; $i <= 10 ; $i++){
            echo $i . " x ".$_GET["table"] . " = ".$i * $_GET["table"] ."<br/>";
        }
    } else {
        echo"<br/>";
        echo" Saisir une valeur dans le champ ci-dessus ";
    }
    ?>

    <?php
        //include("commun/footer.php");
    ?>