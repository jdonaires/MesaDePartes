<?php
class Personal
{
	private $id;
	private $Cargo;
	private $idPersona;

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
