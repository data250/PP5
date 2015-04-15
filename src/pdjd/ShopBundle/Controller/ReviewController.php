<?php
namespace pdjd\ShopBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use pdjd\ShopBundle\Entity\Review;
use pdjd\ShopBundle\Form\ReviewType;

class ReviewController extends Controller {
	 /**
     * @Route("/addReview/{$id}", name="movie_review")
     * 
     * @Template
     */
    public function addReviewAction($id, Request $Request){
 
        $Review = new Review();
 
        $form = $this->createForm(new ReviewType(), $Review);
		
		 $form->handleRequest($Request);
        if($form->isValid()){
 
			
			$title = $Review->getTitle();
			$description = $Review->getDescription();
			$date = date("Y-m-d H:i:s");
			$user = $this->get('security.token_storage')->getToken()->getUser();
				

			
			$Review->setTitle($title);
			$Review->setDescription($description);
			$Review->setMovieID($id);
			$Review->setUser($user);
			$Review->setDate($date);
			
			
			$em = $this->getDoctrine()->getManager();
			$em->persist($Review);
			$em->flush();	
				
			
			$Request->getSession()->getFlashBag()->add(
            'notice',
            'Twoja recenzja zosta³a dodana'
			);
			
     }	 
	     $movie = $this->getDoctrine() 
        ->getRepository('pdjd\ShopBundle\Entity\Movie')
        ->find($id);
		
		
		return $this->render('pdjdShopBundle:default:addReview.html.twig', array(
            'form' => $form->createView(),
			'review' => $Review,
			'movie' => $movie,
		));
    }
}