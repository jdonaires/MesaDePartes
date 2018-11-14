<?php
class Seguimiento
{
	private $Id;
	private $IdOrigen;
	private $IdDestino;
	private $Estado;
	private $Observacion;
	private $Recibido;
	private $CodigoDoc;
	private $IdPersonal;



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
