<?php
include_once "classes/recette.class.php";
include_once "classes/recette_premium.class.php";
include_once "classes/categorie.class.php";
include_once "classes/ingredient.class.php";
include_once "classes/ingredient_quantifie.class.php";
include_once "classes/convertisseur_unite.class.php";

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

// Création de la recette PREMIUM de l'omelette aux piments
$recette = new RecettePremium(1, "Omelette aux piments", 
"Battre les oeufs, saler, ajouter les piments et cuire le tout dans une poele anti-adhésive.", 
"images/omelette_piments.jpg",
$categoriePlat, 
$ingredientsQuantifiesOmelletePiments,
"https://www.youtube.com/watch?v=123456",
"https://www.example.com/omelette_piments.pdf",
"Ajoutez une cuillerée du lait avant de battre les oeufs pour obtenir une texture plus onctueuse"
);

$recette->afficher();

// Test de la classe ConvertisseurUnite
echo "<h3>Test de la classe ConvertisseurUnite</h3>";
echo "Conversion de 200 g en kilogrammes: " . ConvertisseurUnite::grammesEnKilogrammes(200) . " kgs<br/>";
echo "Conversion de 2 litres en centilitres: " . ConvertisseurUnite::litresEnCentilitres(2) . " cl<br/>";