<?php
class folio
{
	private $Id;
	private $CantidadDocumento;
	private $NroFolio;

	public function __GET($NroFolio)
	{
		return $this->$NroFolio;
	}
	public function __SET($NroFolio, $y)
	{
		return $this->$NroFolio = $y;
	}
}
?>
