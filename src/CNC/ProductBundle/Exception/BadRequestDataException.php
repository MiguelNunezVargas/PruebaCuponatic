<?php

namespace CNC\ProductBundle\Exception;

/**
 * Class BadRequestDataException has purpose to pass the error message through FOSRest bundle to the client.
 * It should be used for error caused by client's bad input.
 *
 * @package CNC\ProductBundle\Exception
 */
class BadRequestDataException extends \Exception {

}