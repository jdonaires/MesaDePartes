<?php
class PersonaNatural
{
	private $id;
	private $Area;


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
