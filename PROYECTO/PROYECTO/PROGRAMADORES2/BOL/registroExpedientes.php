<?php
class RegistroExpedientes
{
	private $id;
  private $Nroexpedientes;
	private $fecha;
  private $idFolio;
  private $CodigoDoc;


	public function __GET($id)
	{
		return $this->$id;
	}
	public function __SET($id, $fecha)
	{
		return $this->$id= $fecha;
	}
}
?>
