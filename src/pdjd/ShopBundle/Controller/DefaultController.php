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
	
	/**
     * @Route("/film/{id2}", name="film2")
     */
    public function film2Action($id2)
    {
        $em = $this->getDoctrine()->getManager();
        $sql = "
            SELECT *
			FROM Movie
			WHERE id = '$id2';
        ";
        $stmt = $em->getConnection()->prepare($sql);
        $movies = $stmt->execute();
        $movies = $stmt->fetchAll();
        return $this->render('pdjdShopBundle:Default:film.html.twig',
            array('movies' => $movies)
       );
    }
	
	/**
     * @Route("/film", name="film")
     */
    public function filmAction()
    {
        return $this->render('pdjdShopBundle:Default:film.html.twig');
    }
	
	
	/**
     * @Route("/gatunek", name="gatunek")
     */
    public function genreAction()
    {
        return $this->render('pdjdShopBundle:Default:genre.html.twig');
    }
	
	/**
     * @Route("/gatunek/{genre}", name="gatunek2")
     */
    public function genre2Action($genre)
    {
        $em = $this->getDoctrine()->getManager();
        $sql = "
            SELECT *
			FROM Movie
			WHERE genre = '$genre';
        ";
        $stmt = $em->getConnection()->prepare($sql);
        $movies = $stmt->execute();
        $movies = $stmt->fetchAll();
        return $this->render('pdjdShopBundle:Default:movie_list.html.twig',
            array('movies' => $movies)
       );
    }
	
	/**
     * @Route("/list", name="list")
     */
	public function listAction()
	{
		$em = $this->getDoctrine()->getManager();
        $sql = '
            SELECT Movie.id, Movie.name, Movie.cover, Movie.description, Movie.actorsList, Movie.genre, Movie.ordersCount
            FROM Movie;
        ';
        $stmt = $em->getConnection()->prepare($sql);
        $movies = $stmt->execute();
        $movies = $stmt->fetchAll();
        return $this->render('pdjdShopBundle:Default:movie_list.html.twig',
            array('movies' => $movies)
       );
	}
	
	
	
	/**
     * @Route("/popularne", name="popularne")
     */
	public function popularAction()
	{
		$em = $this->getDoctrine()->getManager();
        $sql = '
            SELECT * 
			FROM Movie 
			ORDER BY ordersCount DESC LIMIT 10;
        ';
        $stmt = $em->getConnection()->prepare($sql);
        $movies = $stmt->execute();
        $movies = $stmt->fetchAll();
        return $this->render('pdjdShopBundle:Default:movie_list.html.twig',
            array('movies' => $movies)
       );
	}
	
	
}

