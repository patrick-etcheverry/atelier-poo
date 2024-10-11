<?php

class Ingredient
{
    private ?int $id;
    private ?string $nom;
    private ?string $image;

    public function __construct(?int $id = null, ?string $nom = null, ?string $image = null)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setImage($image);
    }

    public function __destruct()
    {
        /* Peut rester vide ou être complété par des règles de gestion.
        Par exemple : supprimer ou rendre invalide les recettes 
        utilisant l'ingrédient supprimé. */
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }
}
