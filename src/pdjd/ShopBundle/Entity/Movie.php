<?php

namespace pdjd\ShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Movie 
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="cover", type="string", length=255)
     */
    private $cover;

    /**
     * @var string
     *
     * @ORM\Column(name="actorsList", type="string", length=255)
     */
    private $actorsList;
	
	/**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=100)
     */
    private $genre;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="ordersCount", type="integer")
     */
    private $ordersCount;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Movie
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cover
     *
     * @param string $cover
     * @return Movie
     */
    public function setCover($cover)
    {
        $this->cover = $cover;

        return $this;
    }

    /**
     * Get cover
     *
     * @return string 
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Set actorsList
     *
     * @param string $actorsList
     * @return Movie
     */
    public function setActorsList($actorsList)
    {
        $this->actorsList = $actorsList;

        return $this;
    }

    /**
     * Get actorsList
     *
     * @return string 
     */
    public function getActorsList()
    {
        return $this->actorsList;
    }
	
	/**
     * Set genre
     *
     * @param string $genre
     * @return Movie
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }
	
	/**
     * Set ordersCount
     *
     * @param string $ordersCount
     * @return Movie
     */
    public function setOrdersCount($ordersCount)
    {
        $this->ordersCount = $ordersCount;

        return $this;
    }

    /**
     * Get ordersCount
     *
     * @return integer 
     */
    public function getOrdersCount()
    {
        return $this->ordersCount;
    }
}
