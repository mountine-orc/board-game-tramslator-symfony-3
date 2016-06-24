<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item
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
     * @ORM\Column(name="categoryId", type="string", length=255)
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=100)
     */
    private $code;

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
     * @var string
     *
     * @ORM\Column(name="textOriginal", type="text")
     */
    private $textOriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="textTranslated", type="text")
     */
    private $textTranslated;


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
     * Set categoryId
     *
     * @param string $categoryId
     *
     * @return Item
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Item
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nameOriginal
     *
     * @param string $nameOriginal
     *
     * @return Item
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
     * @return Item
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

    /**
     * Set textOriginal
     *
     * @param string $textOriginal
     *
     * @return Item
     */
    public function setTextOriginal($textOriginal)
    {
        $this->textOriginal = $textOriginal;

        return $this;
    }

    /**
     * Get textOriginal
     *
     * @return string
     */
    public function getTextOriginal()
    {
        return $this->textOriginal;
    }

    /**
     * Set textTranslated
     *
     * @param string $textTranslated
     *
     * @return Item
     */
    public function setTextTranslated($textTranslated)
    {
        $this->textTranslated = $textTranslated;

        return $this;
    }

    /**
     * Get textTranslated
     *
     * @return string
     */
    public function getTextTranslated()
    {
        return $this->textTranslated;
    }
}

