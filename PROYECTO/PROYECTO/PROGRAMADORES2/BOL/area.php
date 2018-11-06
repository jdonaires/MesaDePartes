<?php
class area
{
	private $id;
	private $Area;


  public function __GET($id)
	{
		return $this->$id;
	}
	public function __SET($id, $Area)
	{
		return $this->$id = $Area;
	}
}
?>
