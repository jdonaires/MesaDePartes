<?php
class Resultado
{
  private $id;
  private $Fecha;
  private $CodigoDoc;

  public function __GET($id)
  {
    return $this->$id;
  }
  public function __SET($id,$CodigoDoc)
  {
    return $this->$id = $CodigoDoc;
  }
}


 ?>
