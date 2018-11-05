<?php
class Persona
{
  private $id;
  private $nombres;
  private $apellidos;
  private $direccion;
  private $sexo;
  private $dni;
  private $correo;
  private $nacionalidad;
  private $telefono;

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
