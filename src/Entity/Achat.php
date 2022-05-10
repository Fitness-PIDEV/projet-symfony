<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Scalar\String_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Achat
 *
 * @ORM\Table(name="achat")
 * @ORM\Entity
 */
class Achat
{
    /**
     *
     *
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_produit",type="string", length=225, nullable=false)

     * @Assert\NotBlank(message="la reference est necessaire")
     */
    private $refProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     * @Assert\Positive
     * @Assert\Type(type="float",message="Vous devez saisir un entier.")
     * @Assert\NotBlank(message="le prix est necessaire")
     */
    private $prix;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     */
    private $produits;

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit): void
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return string
     */
    public function getRefProduit(): ?string
    {
        return $this->refProduit;
    }

    /**
     * @param string $refProduit
     */
    public function setRefProduit(string $refProduit): void
    {
        $this->refProduit = $refProduit;
    }

    /**
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param float $prix
     */
    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function getProduits(): ?Produit
    {
        return $this->produits;
    }

    public function setProduits(?Produit $produits): self
    {
        $this->produits = $produits;

        return $this;
    }



}
