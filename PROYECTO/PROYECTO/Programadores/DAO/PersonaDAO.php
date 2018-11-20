<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Persona.php');

class personaDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Persona $Persona)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into persona values(?,?,?,?,?,?)");
		$statement->bindParam(1,$Persona->__GET('Id'));
    	$statement->bindParam(2,$Persona->__GET('DNI'));
		$statement->bindParam(3,$Persona->__GET('Nombre'));
   	 	$statement->bindParam(4,$Persona->__GET('Apellido'));
    	$statement->bindParam(5,$Persona->__GET('Direccion'));
		$statement->bindParam(6,$Persona->__GET('Correo'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar(Persona $persona)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_buscar_persona(?)");
			$statement->bindParam(1,$persona->__GET('DNI'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Persona();

				$per->__SET('Id', $r->idpersona);
				$per->__SET('DNI', $r->DNI);
				$per->__SET('Nombre', $r->Nombre);
				$per->__SET('Apellido', $r->Apellido);
        		$per->__SET('Direccion', $r->Direccion);
        		$per->__SET('Correo', $r->Correo);

				$result[] = $per;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}

?>
