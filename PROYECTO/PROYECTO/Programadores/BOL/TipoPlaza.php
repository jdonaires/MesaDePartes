<?php
class TipoPlazas
{
	private $Id;
	private $Tipo;

	public function __GET($Tipo)
	{
		return $this->$Tipo;
	}
	public function __SET($Tipo, $y)
	{
		return $this->$Tipo = $y;
	}
}
?>
