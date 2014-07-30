<?php

include('../../config/config.inc.php');
include('../../header.php');
 

?>
<?php
$_FILES['icone']['name']; //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['icone']['type'] ;//Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['icone']['size']; //La taille du fichier en octets.
$_FILES['icone']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['icone']['error']; //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.
?>
<?php
if ($_FILES['icone']['error'] > 0) $erreur = "Erreur lors du transfert";
?>
<?php
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );


$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
?>

<?php
$nom = "fichier/{$_FILES['icone']['name']}";
$resultat = move_uploaded_file($_FILES['icone']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";
if ($resultat) echo "<br />".$_POST['description']."<br />";







include('../../footer.php');
?>
