<?php
class persona
{
    private $Id;
    private $DNI;
	private $Nombre;
	private $Apellido;
    private $Direccion;
	private $Correo;

	public function __GET($DNI)
	{
		return $this->$DNI;
	}
	public function __SET($DNI, $y)
	{
		return $this->$DNI = $y;
	}
}
?>
