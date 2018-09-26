<?php

namespace CNC\ProductBundle\Controller;

use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use CNC\ProductBundle\Entity\Logs;
use CNC\ProductBundle\Entity\Product;
use CNC\ProductBundle\Form\ProductType;
use CNC\ProductBundle\Repository\ProductRepository;
use CNC\ProductBundle\Repository\LogsRepository;
use CNC\ProductBundle\Exception\InvalidFormException;
//use SGalinski\TypoScriptBackendBundle\Utility\TypoScriptUtility;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

/**
 * The class TypeController contains API methods for interaction with  database type records.
 *
 * @package CNC\ProductBundle\Controller
 */
abstract class AbstractProductController extends ExceptionFOSRestController {
	/**
	 * Busca un producto por una cadena entregada
	 *
	 * @param Request $request el objeto request
	 * @return Array
	 */
	public function postBusqueda(Request $request)
    {
        try {
        	$data = $request->get('keyword');
	        if($data == ""){
				throw new NotFoundHttpException(sprintf('Debe adjuntar una cadena a buscar'));
	        }
	        $em = $this->getDoctrine()->getManager();
	        $products = $em->getRepository('CNCProductBundle:Product')->resultadoBusqueda($data);
	        if(count($products) > 0){
	            foreach ($products as $product) {
	                $logs = new logs();
	                $logs->setProductoId($product['id']);
	                $logs->setKeyword($data);
	                $em->persist($logs);
	                $em->flush();
	            }
	        }
	        return $products;
		} catch (\Exception $exception) {
			$this->throwFosrestSupportedException($exception);
		}
    }

	/**
	 * Retorna un listado de los 20 productos más buscados.
	 * Retorna vacío si no hay no hay registros para el array
	 *
	 * @param Request $request
	 * @return array
	 */    
	public function getEstadisticas(Request $request)
	{
		try {
			$em = $this->getDoctrine()->getManager();
	        $logs = $em->getRepository(Logs::class)->obtenerLogs();
	        $registros = array();
	        foreach ($logs as $log) {
	            $producto = $em->getRepository('CNCProductBundle:Product')->findById($log['productos_productos_id']);
	            array_push($registros, 
	            	array('titulo' => $producto[0]->getTitulo(), 'keywords' => $log["keywords"]));
	        }
	        return $registros;			
		} catch (Exception $exception) {
			$this->throwFosrestSupportedException($exception);
		}
	}
}