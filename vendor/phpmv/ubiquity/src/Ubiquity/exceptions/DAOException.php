<?php

namespace Ubiquity\exceptions;


class DAOException extends UbiquityException{
	public function __construct($message=null,$code=0,$previous=null){
		parent::__construct($message, $code, $previous);
	}
}
