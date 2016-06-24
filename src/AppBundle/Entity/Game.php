<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GameRepository")
 */
class Game
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameOriginal", type="string", length=100)
     */
    private $nameOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="nameTranslated", type="string", length=100)
     */
    private $nameTranslated;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameOriginal
     *
     * @param string $nameOriginal
     *
     * @return Game
     */
    public function setNameOriginal($nameOriginal)
    {
        $this->nameOriginal = $nameOriginal;

        return $this;
    }

    /**
     * Get nameOriginal
     *
     * @return string
     */
    public function getNameOriginal()
    {
        return $this->nameOriginal;
    }

    /**
     * Set nameTranslated
     *
     * @param string $nameTranslated
     *
     * @return Game
     */
    public function setNameTranslated($nameTranslated)
    {
        $this->nameTranslated = $nameTranslated;

        return $this;
    }

    /**
     * Get nameTranslated
     *
     * @return string
     */
    public function getNameTranslated()
    {
        return $this->nameTranslated;
    }
}

