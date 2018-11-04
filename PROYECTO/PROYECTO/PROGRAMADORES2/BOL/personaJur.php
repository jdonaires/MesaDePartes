<?php
class PersonaJuridica
{
	private $id;
	private $nombres;
	private $apellido;
	private $Ruc;
	private $correo;
	private $sexo;
	private $telefono;

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
