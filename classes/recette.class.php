<?php

class Recette
{
    public ?int $id;
    public ?string $nom;
    public ?string $description;
    public ?string $image;

    public function afficher() 
    {
        echo "ID : " . $this->id . "<br/>";
        echo "Nom :" . $this->nom . "<br/>";
        echo "Description : " . $this->description . "<br/>";
        echo "Url image : " . $this->image . "<br/>";
    }
}
