<?php
class seguimiento
{
	private $id;
	private $idorigen;
	private $idDestino;
  private $idEstado;
  private $idObservacion;
  private $idResibido;
  private $CodigoDoc;
  private $idPersonal;

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
