<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="ref_commande", type="integer", nullable=false)
     */
    private $refCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees_user", type="string", length=225, nullable=false)
     */
    private $donneesUser;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_livraison", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=225, nullable=false)
     */
    private $localisation;


}
