<?php
class PersonaNatural
{
	private $Id;
	private $CodigoDoc;
	private $IdPersona;


	public function __GET($IdPersona)
	{
		return $this->$IdPersona;
	}
	public function __SET($IdPersona, $Y)
	{
		return $this->$IdPersona = $Y;
	}
}
?>
