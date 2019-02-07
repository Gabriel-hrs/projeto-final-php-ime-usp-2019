<?php
namespace App\Controller;

use App\Entity\Cliente;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClienteController extends AbstractController {
	/**
    	* @Route("/cliente/form")
     	*/	
	public function new(Request $request) {	
		$nome = $request->request->get('nome', '');
		$sexo = $request->request->get('sexo', '');
		$email = $request->request->get('email', '');
		$senha = $request->request->get('senha', '');
		$senhaConfirmacao = $request->request->get('senhaConfirmacao', '');
		
		$cliente = new Cliente();
		$cliente->setId(1);
		$cliente->setNome($nome);
 		$cliente->setSexo($sexo);
		$cliente->setEmail($email);

		$errors = array();
		if ($_POST) {
			if (!$nome) {
				$erros[] = 'Digite o nome!';
			}
			
			if (!$sexo) {
				$erros[] = 'Escolha seu sexo!';
			}
			
			if (!$email) {
				$erros[] = 'Digite seu email!';
			}

			if (count($erros) == 0) {
				$strsql = "insert into clientes (nome, sexo, email, telefone, senha) values ('" . $cliente->getNome() . "', ')";

				echo $strsql;
	
			}
		}

		$form = $this->createFormBuilder($cliente)	
			->add('id', TextType::class)
			->add('nome', TextType::class)	
			->add('sexo', TextType::class)			
			->add('email', TextType::class)
			->add('save', SubmitType::class, ['label' => Salvar Cliente'])

		return $this->render('cliente/form.html.twig', [
		    'cliente' => $cliente,
		    'senhaConfirmacao' => $senhaConfirmacao,
		    'erros' = > $erros,
		]);
	}

}
