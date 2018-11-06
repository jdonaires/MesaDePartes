<?php
class Folio
{
	private $id;
	private $CantidadDocumento;

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
