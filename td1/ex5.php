<?php
$title='Ex5';
include "include/header.php";
include "include/function.php";

?>
<a href="?l=2&c=2">Tableau 2 x 2</a><br>
<a href="?l=5&c=5">Tableau 5 x 5</a><br>
<a href="?l=10&c=8">Tableau 10 x 8</a><br>
<hr>

<form method="GET">
    <label for="lignes">Lignes : </label>
    <input type="number" value="<?=$nblignes?>" name="lignes">
    <label for="colonnes">Colonnes : </label>
    <input type="number" value="<?=$nbcolonnes?>">
    <input type="submit" value="Valider">
</form>


<?php
//Récupère les paramètres l et c passés dans l'url
$nblignes=$_GET["l"]??10;
$nbcolonnes=$_GET["c"]??10;

echo "<h2>Tableau de $nblignes par $nbcolonnes</h2>";
createHtmlTable($nblignes,$nbcolonnes);





include "include/footer.php";
 ?>