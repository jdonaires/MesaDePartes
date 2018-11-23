<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Seguimiento.php');


class SeguimientoDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

  public function Registrar(Seguimiento $Seguimiento)
{
  try
  {
     $statement = $this->pdo->prepare("insert into seguimiento values(?,?,?,?,?,?,?,?)");
     $statement->bindParam(1,$Seguimiento->__GET('Id'));
     $statement->bindParam(2,$Seguimiento->__GET('IdOrigen'));
     $statement->bindParam(3,$Seguimiento->__GET('IdDestino'));
     $statement->bindParam(4,$Seguimiento->__GET('Estado'));
     $statement->bindParam(5,$Seguimiento->__GET('Observacion'));
     $statement->bindParam(6,$Seguimiento->__GET('Recibido'));
     $statement->bindParam(7,$Seguimiento->__GET('CodigoDoc'));
     $statement->bindParam(8,$Seguimiento->__GET('IdPersonal'));
     $statement -> execute();

  } catch (Exception $e)
  {
    die($e->getMessage());
  }
}

public function Listar(Seguimiento $Seguimiento)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_buscar_Seguimiento(?)");
			$statement->bindParam(1,$Seguimiento->__GET('CodigoDoc'));
			$statement->execute();
			return $result;
				}
				catch(Exception $e)
				{
					die($e->getMessage());
				}
			}

}
?>
