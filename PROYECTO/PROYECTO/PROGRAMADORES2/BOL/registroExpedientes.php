<?php
class RegistroExpedientes
{
	private $id;
  private $Nroexpedientes;
	private $fecha;
  private $idFolio;
  private $CodigoDoc;


	public function __GET($codigo)
	{
		return $this->$codigo;
	}
	public function __SET($codigo, $codigoDoc)
	{
		return $this->$codigo = $codigoDoc;
	}
}
?>
