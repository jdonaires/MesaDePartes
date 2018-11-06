<?php
class PersonaNatural
{
	private $id;
	private $codigoDoc;
	private $idpersona;
	


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
