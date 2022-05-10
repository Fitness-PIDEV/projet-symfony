<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="ID_categorie", columns={"ID_categorie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=255, nullable=false)
     */
    private $nomProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_produit", type="integer", nullable=false)
     */
    private $prixProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit", type="string", length=255, nullable=false)
     */
    private $imageProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_produit", type="integer", nullable=false)
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
     */
    private $description;


}
