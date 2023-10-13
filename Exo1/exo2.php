<?php
    include("commun/header.php");
    include("commun/menu.php");
?>
<br/>
<h1>Calculer une moyenne</h1> 

<form action="#" method="GET"> 
    <label for="nb"> Combien de notes : </label>
    <input type ="number" name="nb" id="bn"> 
    <br/>
    <input type ="submit" value="Valider"> 
</form> 

<?php  
if(isset($_GET['nb']) && $_GET['nb'] >0){ 
 $nbNotes = $_GET['nb']; 
echo "<form action=\"#\" method=\"POST\">"; 
echo "<fieldset>"; 
echo "<legend>Moyenne : </legend>"; 
for($i = 1; $i <= $nbNotes ; $i++){ 
echo "<label for=\"note".$i."\">Note". $i ." : </label>"; 
echo "<input type=\"number\" name=\"note".$i."\" id=\"note".$i."\" required><br/>"; 
} 

 echo "<input type=\"submit\" value=\"Calculer\">"; 
 echo "</fieldset>"; 
 echo "</form>"; 

 if(isset($_POST['note1'])){ 
$res = 0; 
for($i = 1; $i <= $nbNotes ; $i++){ 
$res += $_POST['note'.$i]/$nbNotes; 
 } 
 echo "La moyenne est : " .$res;
} 
} else { 
echo "<br/>";
echo " Merci de remplire !";
 } 
?> 

<?php  
 //include("commun/footer.php"); 
?> 