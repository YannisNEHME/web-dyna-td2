<?php
            include("include/function.php");
            $element = parseElement([
        ["titre"=>"Exercices","contenu"=>"Liste des exercices disponibles"],
        ["titre"=>"Exercice n°1","contenu"=>"Créer une fonction","niveau"=>2],
        ["titre"=>"Exercice n°2","contenu"=>"Afficher le contenu d'un tableau","niveau"=>2]
]);

 echo $element;
        ?>
