<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CategoryRepository")
 */
class Category
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
     * @var int
     *
     * @ORM\Column(name="gameId", type="integer")
     */
    private $gameId;

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
     * Set gameId
     *
     * @param integer $gameId
     *
     * @return Category
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;

        return $this;
    }

    /**
     * Get gameId
     *
     * @return int
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * Set nameOriginal
     *
     * @param string $nameOriginal
     *
     * @return Category
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
     * @return Category
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

