<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workout
 *
 * @ORM\Table(name="workout")
 * @ORM\Entity
 */
class Workout
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
     * @ORM\Column(name="nom_muscle", type="string", length=255, nullable=false)
     */
    private $nomMuscle;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_exercice", type="string", length=255, nullable=false)
     */
    private $nomExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="image_exercice", type="string", length=255, nullable=false)
     */
    private $imageExercice;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_exercice", type="integer", nullable=false)
     */
    private $dureeExercice;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;


}
