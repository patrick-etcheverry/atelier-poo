<?php
include_once "classes/recette.class.php";

// Création de la recette de l'omelette aux piments
$recette = new Recette();
$recette->setId(1);
$recette->setNom("Omelette aux piments");
$recette->setImage("images/omelette_piments.jpg");
$recette->setDescription("Battre les oeufs, saler, ajouter les piments et cuire le tout dans une poele anti-adhésive.");
$recette->afficher();