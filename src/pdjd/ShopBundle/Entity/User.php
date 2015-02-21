<?php

namespace pdjd\ShopBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
	
    /**
     * @ORM\Column(type="array")
     */
    private $orders;
    
	/**
     * Set orders
     *
     * @param array $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
    
	/**
     * Get orders
     *
     * @return array 
     */
    public function getOrders()
    {
        return $this->orders;
    }
	
    /**
     * @var integer
     */
    protected $id;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
