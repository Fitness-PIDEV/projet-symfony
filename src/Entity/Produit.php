<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="ID_categorie", columns={"ID_categorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     *
     *
     * @ORM\Column( type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="le nom du produit est necessaire")
     */
    private $nomProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_produit", type="integer", nullable=false)
     * @Assert\Positive
     * @Assert\Type(type="integer",message="Vous devez saisir un entier.")
     */
    private $prixProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="l'image est necessaire")
     */
    private $imageProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_produit", type="integer", nullable=false)
     * @Assert\Positive
     * @Assert\Type(type="integer",message="Vous devez saisir un entier.")
     */
    private $quantiteProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_categorie", type="integer", nullable=false)
     */
    private $idCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="la description est necessaire")
     * @Assert\Length(
     *      min = 5,
     *      minMessage = "votre description doit contenir au moins {{ limit }} caracteres"
     * )
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class, inversedBy="produits")
     */
    private $categories;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrvue;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    /**
     * @param string $nomProduit
     */
    public function setNomProduit(string $nomProduit): void
    {
        $this->nomProduit = $nomProduit;
    }

    /**
     * @return int
     */
    public function getPrixProduit(): ?int
    {
        return $this->prixProduit;
    }

    /**
     * @param int $prixProduit
     */
    public function setPrixProduit(int $prixProduit): void
    {
        $this->prixProduit = $prixProduit;
    }

    /**
     * @return string
     */
    public function getImageProduit(): ?string
    {
        return $this->imageProduit;
    }

    /**
     * @param string $imageProduit
     */
    public function setImageProduit(string $imageProduit): void
    {
        $this->imageProduit = $imageProduit;
    }

    /**
     * @return int
     */
    public function getQuantiteProduit(): ?int
    {
        return $this->quantiteProduit;
    }

    /**
     * @param int $quantiteProduit
     */
    public function setQuantiteProduit(int $quantiteProduit): void
    {
        $this->quantiteProduit = $quantiteProduit;
    }

    /**
     * @return int
     */
    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    /**
     * @param int $idCategorie
     */
    public function setIdCategorie(int $idCategorie): void
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return int
     */
    public function getEtat(): ?int
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat(int $etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCategories(): ?Categorie
    {
        return $this->categories;
    }

    public function setCategories(?Categorie $categories): self
    {
        $this->categories = $categories;

        return $this;
    }
public function __toString()
{
    return $this->getDescription();
}

public function getNbrvue(): ?int
{
    return $this->nbrvue;
}

public function setNbrvue(?int $nbrvue): self
{
    $this->nbrvue = $nbrvue;

    return $this;
}

}
