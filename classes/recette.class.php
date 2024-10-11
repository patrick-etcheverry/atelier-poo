<?php

class Recette
{
    private ?int $id;
    private ?string $nom;
    private ?string $description;
    private ?string $image;
    private ?Categorie $categorie;
    private ?array $ingredientQuantifies;

    public function __construct(?int $id=null, ?string $nom = null, ?string $description = null, ?string $image = null, 
                                ?Categorie $categorie = null, ?array $ingredientQuantifies = null)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setDescription($description);
        $this->setImage($image);
        $this->setCategorie($categorie);
        $this->setIngredientQuantifies($ingredientQuantifies);
    }

    public function __destruct()
    {
        /* Peut rester vide ou être complété par des règles de gestion. */
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function getIngredientQuantifies(): ?array
    {
        return $this->ingredientQuantifies;
    }

    public function setIngredientQuantifies(?array $ingredientQuantifies): void
    {
        $this->ingredientQuantifies = $ingredientQuantifies;
    }

    public function afficher(): void
    {
        echo "ID : " . $this->getId() . "<br/>";
        echo "Nom :" . $this->getNom() . "<br/>";
        echo "Description : " . $this->getDescription() . "<br/>";
        echo "Url image : " . $this->getImage() . "<br/>";
        echo "Catégorie : " . $this->getCategorie()->getNom() . "<br/>";
        echo "Ingrédients : <br/>";
        foreach ($this->ingredientQuantifies as $ingredientQuantifie) 
        {
            echo "- " . $ingredientQuantifie->getIngredient()->getNom() . " : " . $ingredientQuantifie->getQuantite() . "<br/>";
        }
    }
}
