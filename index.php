<?php
include_once "classes/recette.class.php";

// Création de la recette de l'omelette aux piments
$recette = new Recette(1, "Omelette aux piments", 
"Battre les oeufs, saler, ajouter les piments et cuire le tout dans une poele anti-adhésive.", 
"images/omelette_piments.jpg");
$recette->afficher();
