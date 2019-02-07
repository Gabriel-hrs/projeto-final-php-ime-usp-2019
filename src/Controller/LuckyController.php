<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController {
	/**
     	* @Route("/lucky/number", name="app_lucky_number")
      	*/
    public function number() {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

	/**
     	* @Route("/lucky/number/{numero<\d+>}")
      	*/
   public function meuNumero ($numero, Request $request){

	throw $this->createNotFoundException('Essa página não existe.');

	$id = $request->query->get('id', 1);

	return $this->render('lucky/number.html.twig', [
    		'number' => $numero,
	]);
    }

	/**
     	* @Route("/lucky/login")
      	*/
    public function login(SessionInterface $session) {
	$session->set('usuario', 'gabriel');
	$session->set('email', 'gabriel@teste.com.br');
	
	$usuario = $session->get('usuario');
	
	print_r($_SESSION); 

	 $this->addFlash(
	    'notice',
	    'Your changes were saved!'
	);

	return new Response (
		$usuario
	);
   }	
}

