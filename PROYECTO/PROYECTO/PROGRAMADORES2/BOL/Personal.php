<?php
class Personal
{
	private $id;
	private $Cargo;
	private $idPersona;

  public function __GET($id)
	{
		return $this->$id;
	}
	public function __SET($id, $cargo)
	{
		return $this->$id = $Cargo;
	}
}
?>
