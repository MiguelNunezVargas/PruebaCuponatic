<?php

namespace CNC\ProductBundle\Controller;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use CNC\ProductBundle\Entity\User;

use CNC\ProductBundle\Repository\LoginRepository;
use CNC\ProductBundle\Exception\InvalidFormException;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;


/**
 * The class AbstractLoginController Contiene los métodos de los cuales se alimenta LoginController, genera métodos que ayudan en la autentificación de usuarios.
 *
 * @package CNC\ProductBundle\Controller
 */
 abstract class AbstractLoginController extends ExceptionFOSRestController{

	

	/**
	 * Busca si los datos entregados del usuario existen como usuario creado
	 *
	 * @param Request $request el objeto request, con el username/email , password
	 * @return Array
	 */
	public function postLogin(Request $request)
    {
        
        try {

      		$usuario = $request->get('username');
      		$password = $request->get('password');
			

			$factory = $this->get('security.encoder_factory');
			$user = new User();   

			$encoder = $factory->getEncoder($user);
			$saltPrueba = "hKtbn.NmptgEHwuhQ5ADrm9WS9pxqV83FTjEn5Bv0Mw";
			$password = $encoder->encodePassword($password, $saltPrueba);
			$user->setPassword($password);

			return $user->getPassword();




	        /*	
	        if($usuario == "" || $password == ""){
				throw new AccessDeniedException(sprintf('Debe adjuntar usuario/password'));
	        }
	        */

	  

			/*
			$em = $this->getDoctrine()->getManager();
	        $usuario = $em->getRepository('CNCProductBundle:User')->
	        	findByUsernameAndPassword($usuario, $user->getPassword());

        	return $usuario->getId();
        	*/


	        //$products = $em->getRepository('CNCProductBundle:User')->resultadoBusqueda($data);
	        /*if(count($products) > 0){
	            foreach ($products as $product) {
	                $logs = new logs();
	                $logs->setProductoId($product['id']);
	                $logs->setKeyword($data);
	                $em->persist($logs);
	                $em->flush();
	            }
	        }
			

			return $products;
	        
	        return $request;


	    */    
		} catch (\Exception $exception) {
			$this->throwFosrestSupportedException($exception);
		}
		
    }
}