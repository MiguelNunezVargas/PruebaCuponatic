<?php

namespace CNC\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use CNC\ProductBundle\Entity\Logs;

class ProductController extends Controller
{
    public function indexAction()
    {
        return $this->render('CNCProductBundle:Product:index.html.twig');
    }

    public function busquedaAction(Request $request)
    {
		$data = $request->get('keyword');
		$em = $this->getDoctrine()->getManager();
		$products = $em ->getRepository('CNCProductBundle:Product')->createQueryBuilder('p')
                ->select('p.id, p.titulo, p.descripcion')
                ->where('p.titulo LIKE :data')
                ->setParameter('data', '%'.(string) $data.'%')
                ->getQuery()
                ->getResult();
        $res = "";
        
        if(count($products) > 0){
			foreach ($products as $product) {
	        	$res.= "Titulo: ". $product['titulo']. "<br/>";
	        	$logs = new logs();
	        	$logs->setProductoId($product['id']);
	        	$logs->setKeyword($data);
	        	$em->persist($logs);
	            $em->flush();
	        }
    	}
        
        
        $response = new JsonResponse();
        $response->setData(array('respuesta' => $products));
		return $response;
    }


    public function logsAction(){
    	return $this->render('CNCProductBundle:Product:logs.html.twig');
    }

    public function estadisticasAction(){

    	$em = $this->getDoctrine()->getManager();
    	$conn = $em->getConnection();
    	$sql = '
    		SELECT 
			productos_productos_id, 
			COUNT(productos_productos_id) as totalRegistros,
			GROUP_CONCAT(DISTINCT(keyword)) as keywords
			FROM logs
			GROUP BY productos_productos_id
			ORDER BY totalRegistros DESC
			LIMIT 20
		';
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$logs = $stmt->fetchAll();
		
		$registros = array();
		foreach ($logs as $log ) {
			$producto = $em->getRepository('CNCProductBundle:Product')->findById($log['productos_productos_id']);
			array_push($registros, array('titulo' => $producto[0]->getTitulo(), 'keywords' => $log["keywords"]));
		}
		
		$response = new JsonResponse();
        $response->setData(array('respuesta' => $registros));
		return $response;

    }
}
