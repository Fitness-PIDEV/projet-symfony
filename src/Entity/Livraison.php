<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     *
     *
     * @ORM\Column( type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue()
     */
    private $idLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="ref_commande", type="string", length=225, nullable=false)
     * @Assert\NotBlank(message="la reference est necessaire")

     */
    private $refCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="donnees_user", type="string", length=225, nullable=false)
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank(message="le nom est necessaire")
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
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 20,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank(message="la localisation est necessaire")
     */
    private $localisation;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     */
    private $produits;

    /**
     * @return mixed
     */
    public function getIdLivraison()
    {
        return $this->idLivraison;
    }

    /**
     * @param mixed $idLivraison
     */
    public function setIdLivraison($idLivraison): void
    {
        $this->idLivraison = $idLivraison;
    }

    /**
     * @return int
     */
    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    /**
     * @return string
     */
    public function getRefCommande(): ?string
    {
        return $this->refCommande;
    }

    /**
     * @param string $refCommande
     */
    public function setRefCommande(string $refCommande): void
    {
        $this->refCommande = $refCommande;
    }

    /**
     * @return string
     */
    public function getDonneesUser(): ?string
    {
        return $this->donneesUser;
    }

    /**
     * @param string $donneesUser
     */
    public function setDonneesUser(string $donneesUser): void
    {
        $this->donneesUser = $donneesUser;
    }

    /**
     * @return float
     */
    public function getFraisLivraison(): ?float
    {
        return $this->fraisLivraison;
    }

    /**
     * @param float $fraisLivraison
     */
    public function setFraisLivraison(float $fraisLivraison): void
    {
        $this->fraisLivraison = $fraisLivraison;
    }

    /**
     * @return string
     */
    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    /**
     * @param string $localisation
     */
    public function setLocalisation(string $localisation): void
    {
        $this->localisation = $localisation;
    }

    public function getUsers(): ?User
    {
        return $this->users;
    }

    public function setUsers(?User $users): self
    {
        $this->users = $users;

        return $this;
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
