<?php  
include("commun/header.php"); 
include("commun/menu.php"); 
?> 
<br/>
<h1>Selection du personnage</h1>
<br/>
<form action="#" method="POST"> 
 Personnage :
	<select name ="perso">
	<option value="homme">homme</option>
	<option value="femme">femme</option>
</select> <br/>
    <input type ="submit" value="Valider"> 
</form> 

<?php  
    if(isset($_POST["perso"])){ 
    if($_POST["perso"] == "homme"){  
        echo "<img src = 'source/img/player.png' alt = 'player homme' />"; 
} else if($_POST["perso"] == "femme") { 
echo "<img src = 'source/img/playerF.png' alt = 'player femme' />"; 
} 
} else { 
echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>"; 
} 
?> 

<?php  
    //include("commun/footer.php"); 
?> 