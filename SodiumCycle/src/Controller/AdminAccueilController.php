<?php
	/**
	 * Created by PhpStorm.
	 * User: thoma
	 * Date: 13/11/2018
	 * Time: 10:21
	 */
	
	namespace App\Controller;
	
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;
	
	class AdminAccueilController extends AbstractController {
		
		/**
		 * Matches /administration exactly
		 *
		 * @Route("/administration", name="backoffice_accueil")
		 *
		 */
		
		public function accueil() {
			return $this->render('navbarrebackoffice.html.twig');
		}
	}