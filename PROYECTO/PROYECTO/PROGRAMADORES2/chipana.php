<?php
class PersonaNatural
{
	private $id;
	private $RazonSocial;
	private $Ruc;
  private $codigopostal;
  private $ciudad;

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
