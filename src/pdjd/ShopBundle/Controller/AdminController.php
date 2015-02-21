<?php

namespace pdjd\ShopBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use pdjd\ShopBundle\Entity\Movie;

class AdminController extends Controller {
    
	/**
     * @Route("/admin/movie_add", name="movie_form")
     */
    public function addMovieAction(Request $request) {
        $movie = new Movie();
        $form = $this->createFormBuilder($movie)
            ->add('name', 'text')
            ->add('description', 'text')
            ->add('cover', 'text')
            ->add('actorsList', 'text')
			->add('genre', 'choice', array(
					'choices'   => array(
						'komedia' => 'komedia', 
						'dramat' => 'dramat'
					),
					'required'  => false,
					'placeholder' => 'wybierz gatunek'))
			->add('ordersCount', 'integer')
            ->add('save', 'submit', array('label' => 'Dodaj'))
            ->getForm();
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();
            return $this->redirect($this->generateUrl("movie_form"));
        }
        return $this->render('pdjdShopBundle:Default:movie_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}