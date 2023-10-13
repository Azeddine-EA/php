<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1> Base de données MySQL</h1>
        <?php
            $servername ='localhost';
            $username ='root';
            $passeword ='';

            try{
                $connexion=new PDO("mysql : host=$servername; dbname=bddtest",$username,$password);
                $connexion ->  setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXEPTION);
                echo'Connexion réussie';
            }

            catch(PDOExeption $e){
                echo "Erreur : " .$e->getMessage();
            }
        ?>
    </body>
</html> 