<?php

class IngredientQuantifie
{
    private ?Ingredient $ingredient; 
    private ?string $quantite;

    public function __construct(?Ingredient $ingredient = null, ?string $quantite = null)
    {
        $this->setIngredient($ingredient);
        $this->setQuantite($quantite);
    }

    public function __destruct()
    {
        /* Peut rester vide ou être complété par des règles de gestion.
        Par exemple : supprimer ou rendre invalide les recettes 
        utilisant l'ingrédient quantifié supprimé. */
    }

    public function getIngredient(): ?Ingredient
    {
        return $this->ingredient;
    }

    public function setIngredient(?Ingredient $ingredient): void
    {
        $this->ingredient = $ingredient;
    }

    public function getQuantite(): ?string
    {
        return $this->quantite;
    }

    public function setQuantite(?string $quantite): void
    {
        $this->quantite = $quantite;
    }
}