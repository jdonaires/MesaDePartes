<?php
class DBAccess
{
  private $conn;
  public function __CONTRUCT()
  {
    try{
      $this->conn = new PDO('mysql:host-localhost;dbname=MesadePartes','root', 'admin');
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e ) {
      echo "error:" .$e->getMessage();
    }
  }
  public function get_connection()
  {
    return $this->conn;
  }
}


 ?>
