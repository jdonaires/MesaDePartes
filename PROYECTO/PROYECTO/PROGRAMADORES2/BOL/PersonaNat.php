<?php
class PersonaNatural
{
	private $codigo;
	private $codigoDoc;
	private $dni;


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
