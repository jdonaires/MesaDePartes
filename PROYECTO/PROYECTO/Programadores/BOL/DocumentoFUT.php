<?php
class DocumentoFut
{
	private $CodigoDoc;
	private $CausalReasignacion;
	private $IdTipoPlazas;
	private $IdPersonal;



	public function __GET($CodigoDoc)
	{
		return $this->$CodigoDoc;
	}
	public function __SET($CodigoDoc, $y)
	{
		return $this->$CodigoDoc = $y;
	}
}
?>
