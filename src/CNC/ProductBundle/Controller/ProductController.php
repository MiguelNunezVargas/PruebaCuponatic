<?php

namespace CNC\ProductBundle\Controller;

use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use CNC\ProductBundle\Entity\Logs;
use CNC\ProductBundle\Entity\Product;
use CNC\ProductBundle\Form\ProductType;
use CNC\ProductBundle\Controller\AbstractProductController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ProductController extends AbstractProductController
{
    /**
     * REST que obtiene listado de productos según key otorgada
     * Retorna vacío si no hay registros
     * Method: POST, url: /api/productscript/busquedas.{_format}
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Productos por key entregada",
     *   output = "array",
     *   statusCodes = {
     *     200 = "Retorna cuando sale ok"
     *   }
     * )
     *
     * @param Request $request
     * @return array
     */
    public function postBusquedaAction(Request $request) 
    {
        return parent::postBusqueda($request);
    }


    /**
     * REST que obtiene listado de los 20 coincidencias de productos más buscadas
     * Retorna vacío si no hay registros
     * Method: GET, url: /api/productscript/estadisticas.{_format}
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Lista 20 productos más buscados",
     *   output = "array",
     *   statusCodes = {
     *     200 = "Retorna cuando sale ok"
     *   }
     * )
     *
     * @param Request $request
     * @return array
     */
    public function getEstadisticasAction(Request $request) 
    {
        return parent::getEstadisticas($request);
    }

}
