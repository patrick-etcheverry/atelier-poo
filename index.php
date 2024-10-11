<?php
include_once "classes/recette.class.php";
include_once "classes/categorie.class.php";
include_once "classes/ingredient.class.php";
include_once "classes/ingredient_quantifie.class.php";

// Création des catégories de recettes
$categorieDessert = new Categorie(1, "Desserts", "images/dessert.jpg");
$categorieEntree = new Categorie(2, "Entrées", "images/entree.jpg");
$categoriePlat = new Categorie(3, "Plats", "images/plat.jpg");


// Création des ingredients de l'omelette aux piments
$ingredientOeuf = new Ingredient(1, "Oeuf", "images/oeuf.jpg");
$ingredientPiment = new Ingredient(2, "Piment", "images/piment.jpg");
$ingredientSel = new Ingredient(3, "Sel", "images/sel.jpg");

// Création d'un tableau contenant les ingredients quantifiés pour l'omelette aux piments
$ingredientsQuantifiesOmelletePiments = [
    new IngredientQuantifie($ingredientOeuf, "3"),
    new IngredientQuantifie($ingredientPiment, "5"),
    new IngredientQuantifie($ingredientSel, "1 pincée")
];

// Création de la recette de l'omelette aux piments
$recette = new Recette(1, "Omelette aux piments", "Battre les oeufs, saler, 
ajouter les piments et cuire le tout dans une poele anti-adhésive.", 
"images/omelette_piments.jpg",
$categoriePlat, $ingredientsQuantifiesOmelletePiments);

$recette->afficher();
