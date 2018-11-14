<?php
class Personal
{
	private $Id;
	private $Cargo;
	private $IdPersona;
	private $Usuario;
	private $Contraseña;
	private $Estado;


	public function __GET($Cargo)
	{
		return $this->$Cargo;
	}
	public function __SET($Cargo, $y)
	{
		return $this->$Cargo = $y;
	}
}
?>
