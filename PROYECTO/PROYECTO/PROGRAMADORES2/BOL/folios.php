<?php
class Folio
{
	private $id;
	private $CantidadDocumento;

	public function __GET($id)
	{
		return $this->$id;
	}
  public function __SET($id, $CantidadDocumento)
  	{
  		return $this->$id = $CantidadDocumento;
  	}
  }
  ?>
