<?php
class Resultado
{
	private $Id;
	private $Fecha;
	private $CodigoDoc;

	public function __GET($CodigoDoc)
	{
		return $this->$CodigoDoc;
	}
	public function __SET($CodigoDoc, $y)
	{
		return $this->$CodigoDoc = $y;
	}
}
?>
