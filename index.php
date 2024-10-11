<?php
include_once "classes/recette.class.php";

// Création de la recette de l'omelette aux piments
$recette = new Recette();
$recette->id = 1;
$recette->nom = "Omelette aux piments";
$recette->image = "images/omelette_piments.jpg";
$recette->description = "Battre les oeufs, saler, ajouter les piments et cuire le tout dans une poele anti-adhésive.";
$recette->afficher();