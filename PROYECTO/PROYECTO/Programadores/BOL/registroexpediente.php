<?php
class PersonaNatural
{
	private $NroExpediente;
	private $Fecha;
	private $IdFolio;
	private $CodigoDoc;

	public function __GET($NroExpediente)
	{
		return $this->$NroExpediente;
	}
	public function __SET($NroExpediente, $codigoDoc)
	{
		return $this->$NroExpediente = $codigoDoc;
	}
}
?>
