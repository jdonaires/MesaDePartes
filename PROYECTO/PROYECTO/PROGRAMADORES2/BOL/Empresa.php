<?php
class PersonaNatural
{
	private $id;
	private $RazonSocial;
	private $Ruc;

  public function __GET($id)
	{
		return $this->$id;
	}
	public function __SET($id, $Ruc)
	{
		return $this->$id = $Ruc;
	}
}
?>
