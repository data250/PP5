<?php

namespace pdjd\ShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
     * @Route("/hello/{name}", name="hello")
     */
    public function helloAction($name)
    {
        return $this->render('pdjdShopBundle:Default:hello.html.twig', array('name' => $name));
    }
	
	 /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('pdjdShopBundle:Default:index.html.twig');
    }
}
