<?php

namespace CNC\ProductBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use CNC\ProductBundle\Exception\BadRequestDataException;

/**
 * Class ExceptionFOSRestController passes the error messages to FOSRest-registered exception.
 *
 * @package CNC\ProductBundle\Controller
 */
abstract class ExceptionFOSRestController extends FOSRestController {
	/**
	 * Makes response from given exception.
	 *
	 * @param \Exception $exception
	 * @throws BadRequestDataException
	 */
	protected function throwFosrestSupportedException(\Exception $exception) {
		throw new BadRequestDataException($exception->getMessage());
	}
}