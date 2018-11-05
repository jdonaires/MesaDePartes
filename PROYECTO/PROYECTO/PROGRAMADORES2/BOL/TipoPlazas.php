<?php
class TipoPlazas
{
	private $id;
	private $Tipo;

	public function __GET($Tipo)
	{
		return $this->$Tipo;
	}
	public function __SET($Tipo, $Tipo3)
	{
		return $this->$Tipo = $Tipo3;
	}
}
?>
