<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity
 */
class Cours
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
     * @ORM\Column(name="nom_cours", type="string", length=255, nullable=false)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="duree_cours", type="string", length=255, nullable=false)
     */
    private $dureeCours;

    /**
     * @var string
     *
     * @ORM\Column(name="salle", type="string", length=255, nullable=false)
     */
    private $salle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_coach", type="string", length=255, nullable=false)
     */
    private $nomCoach;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;


}
