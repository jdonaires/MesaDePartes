<?php
class PersonaJuridica
{
	private $id;
	private $nombres;
	private $Ruc;
	private $correo;
	private $sexo;

	public function __GET($x)
	{
		return $this->$x;
	}
	public function __SET($x, $y)
	{
		return $this->$x = $y;
	}
}
?>
