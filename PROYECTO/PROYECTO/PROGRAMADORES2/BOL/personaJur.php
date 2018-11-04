<?php
class PersonaJuridica
{
	private $id;
	private $nombres;
	private $apellidos;
	private $Ruc;
	private $correo;
	private $sexo;

	public function __GET($nombres)
	{
		return $this->$nombres;
	}
	public function __SET($nombres, $correo)
	{
		return $this->$nombres = $correo;
	}
}
?>
