<?php
class area
{
	private $Id;
	private $Area;

	public function __GET($Area)
	{
		return $this->$Area;
	}
	public function __SET($Area, $y)
	{
		return $this->$Area = $y;
	}
}
?>
