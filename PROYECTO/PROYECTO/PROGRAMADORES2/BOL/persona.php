<?php
class Persona
{
  private $id;
  private $nombres;
  private $apellidos;
  private $direccion;
  private $sexo;
  private $dni;
  private $edad;
  private $correo;
  private $nacionalidad;
  private $ocupacion;
  private $celular;

  public function __GET($nombres)
  {
    return $this->$nombres;
  }
  public function __SET($nombres,$nacionalidad)
  {
    return $this->$nombres = $nacionalidad;
  }
}


 ?>
