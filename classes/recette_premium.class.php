<?php
class RecettePremium extends Recette
{
    private ?string $lienVideo;
    private ?string $lienPdf;
    private ?string $conseilsDuChef;

    public function __construct(?int $id=null, ?string $nom = null, ?string $description = null, ?string $image = null, 
                                ?Categorie $categorie = null, ?array $ingredientQuantifies = null,
                                ?string $lienVideo = null, ?string $lienPdf = null, ?string $conseilsDuChef = null)
    {
        parent::__construct($id, $nom, $description, $image, $categorie, $ingredientQuantifies);
        $this->setLienVideo($lienVideo);
        $this->setLienPdf($lienPdf);
        $this->setConseilsDuChef($conseilsDuChef);
    }

    public function getLienVideo(): ?string
    {
        return $this->lienVideo;
    }

    public function setLienVideo(?string $lienVideo): void
    {
        $this->lienVideo = $lienVideo;
    }

    public function getLienPdf(): ?string
    {
        return $this->lienPdf;
    }

    public function setLienPdf(?string $lienPdf): void
    {
        $this->lienPdf = $lienPdf;
    }

    public function getConseilsDuChef(): ?string
    {
        return $this->conseilsDuChef;
    }

    public function setConseilsDuChef(?string $conseilsDuChef): void
    {
        $this->conseilsDuChef = $conseilsDuChef;
    }

    public function afficher(): void {
        parent::afficher();
        echo "Lien Vidéo: " . $this->getLienVideo() . "<br/>";
        echo "Lien PDF: " . $this->getLienPdf() . "<br/>";
        echo "Conseils du Chef: " . $this->getConseilsDuChef() . "<br/>";
    }
}
