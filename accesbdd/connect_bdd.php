<!DOCTYPE html>
<html>
    <head>
        <title>Connexion à MySQL avec PDO</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> nterrogation de la table Fruit avcePDo</h1>
        <?php
        require("connect.php");
    //Définir le type/nom de la base de donnée utilisé

        $dsn="mysql:dbname=".BASE.";host=".SERVER;  
        //try er catch permet de capturer les messages d'erreurs par le server
            try{
                $connexion=new PDO($dsn,USER,PASSWD);
            }
            catch(PDOExeption $e){
            printf("Echec de la connexion :%s\n",$e->getMessage()); //Permet de renvoyer le message d'erreur
            exit();
            }
            //$sql="UPDATE fruit SET prix = 25 WHERE fruit.idNom LIKE 'cerise%'" ;
            $sql="SELECT * FROM fruit ";
            //Afficher un message d'erreur si problème d'execution de la requête
            if(!$connexion->query($sql)) echo "Problème d'accès au CARNET";
            //Afficher le résultat de la requête si tout va bien 
            else{foreach ($connexion->query($sql) as $row)
                echo $row['idNom']."/".
                //Affocher des données à partir des données d'une requête simple
                $row['poids']."g/".$row['prix']."€<br/>\n";
                
            }
        ?>
    </body>
</html> 