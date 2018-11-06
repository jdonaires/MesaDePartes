<?php
class Resultado
{
  private $id;
  private $Fecha;
  private $CodigoDoc;

  public function __GET($nombres)
  {
    return $this->$nombres;
  }
  public function __SET($nombres,$apellidos)
  {
    return $this->$nombres = $apellidos;
  }
}


 ?>
