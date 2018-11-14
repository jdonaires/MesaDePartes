<?php
class RegistroExpediente
{
  private $Id;
	private $NExpediente;
	private $FechaIngreso;
  private $idFolio;
	private $CodigoDoc;

	public function __GET($NExpediente)
	{
		return $this->$NExpediente;
	}
	public function __SET($NExpediente, $Y)
	{
		return $this->$NExpediente = $Y;
	}
}
?>
