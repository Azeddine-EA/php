<?php

$nomJoueur1 = "Matthieu";
$ageJoueur1 = 30;
$estUnHommeJoueur1 = false;

?>
<h1> Nom du joueur 1 :<?php echo $nomJoueur1; ?> </h1>
<br/>

<h1>Âge du joueur 1 : <?php echo $ageJoueur1; ?> </h1>
<br/>

<?php $ageJoueur1 = $ageJoueur1 +1; ?>
<br/>
<h1> Âge du joueur 1 : <?php echo $ageJoueur1;?> 
<br/>
<br/>
<?php
if($estUnHommeJoueur1 === true){
?>
    <h1>C'est un homme</h1>
<?php } else {$estUnHommeJoueur1 === false ?>
   <h1> C'est une femme</h1>
<?php } ?>