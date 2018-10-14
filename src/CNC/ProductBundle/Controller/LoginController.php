<?php

namespace CNC\ProductBundle\Controller;

use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use CNC\ProductBundle\Entity\Logs;
use CNC\ProductBundle\Entity\User;
use CNC\ProductBundle\Controller\AbstractLoginController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class LoginController extends AbstractLoginController
{
    /**
     * REST que verifica si existe usuario creado y devuelve parámetros para poder generar sesión
     * Retorna vacío si no hay registros
     * Method: POST, url: /api/productscript/Login.{_format}
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Parametros de usuario para generar sesión",
     *   output = "array",
     *   statusCodes = {
     *     200 = "Retorna cuando sale ok"
     *   }
     * )
     *
     * @param Request $request
     * @return array
     */
    public function postLoginAction(Request $request) 
    {
        return parent::postLogin($request);
    }
}
