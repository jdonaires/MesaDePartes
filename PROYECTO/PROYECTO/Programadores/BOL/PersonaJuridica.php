<?php
class PersonaJuridica
{
	private $Id;
	private $CodigoModular;
	private $CodigoDoc;
	private $IdEmpresa;


	public function __GET($CodigoModular)
	{
		return $this->$CodigoModular;
	}
	public function __SET($CodigoModular, $y)
	{
		return $this->$CodigoModular = $y;
	}
}
?>
