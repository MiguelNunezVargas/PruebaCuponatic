<?php

namespace SGalinski\TypoScriptBackendBundle\Exception;

/**
 * Class InvalidFormException has purpose to pass the error message through FOSRest bundle to the client.
 * It should be used for error caused by client's bad input.
 *
 * @package CNC\ProductBundle\Exception
 */
class InvalidFormException extends \Exception {
	protected $form;

	public function __construct($message, $form = NULL) {
		parent::__construct($message);
		$this->form = $form;
	}

	/**
	 * @return array|null
	 */
	public function getForm() {
		return $this->form;
	}

}