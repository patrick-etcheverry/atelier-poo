<?php
include_once "classes/recette.class.php";
include_once "classes/categorie.class.php";

// Création des catégories de recettes
$categorieDessert = new Categorie(1, "Desserts", "images/dessert.jpg");
$categorieEntree = new Categorie(2, "Entrées", "images/entree.jpg");
$categoriePlat = new Categorie(3, "Plats", "images/plat.jpg");

// Création de la recette de l'omelette aux piments
$recette = new Recette(1, "Omelette aux piments", "Battre les oeufs, saler, 
ajouter les piments et cuire le tout dans une poele anti-adhésive.", 
"images/omelette_piments.jpg",
$categoriePlat);

$recette->afficher();
