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

  public function __GET($id)
	{
		return $this->$id;
	}
	public function __SET($id, $idPersonal)
	{
		return $this->$id = $idPersonal;
	}
}
?>
