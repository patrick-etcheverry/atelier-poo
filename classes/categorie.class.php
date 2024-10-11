<?php

class Categorie
{
    private ?int $id;
    private ?string $nom;
    private ?string $image;

    public function __construct(?int $id=null, ?string $nom = null, ?string $image = null)
    {
        $this->setId($id);
        $this->setNom($nom);
        $this->setImage($image);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function afficher()
    {
        echo "ID : " . $this->id . "<br/>";
        echo "Nom : " . $this->nom . "<br/>";
        echo "Url image : " . $this->image . "<br/>";
    }
}
