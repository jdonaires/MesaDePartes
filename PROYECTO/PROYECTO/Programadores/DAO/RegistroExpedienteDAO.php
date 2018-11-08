<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/registroexpediente.php');

class RegistroExpedienteDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(registroexpediente $registroexpediente)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL up_insertar_registroexpediente(?,?,?,?)");
    $statement->bindParam(1,$registroexpediente->__GET('NroExpediente'));
		$statement->bindParam(2,$registroexpediente->__GET('Fecha'));
		$statement->bindParam(3,$registroexpediente->__GET('IdFolio'));
		$statement->bindParam(4,$registroexpediente->__GET('CodigoDoc'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Listar(registroexpediente $registroexpediente)
	{
		try
		{
			$result = array();
			$statement = $this->pdo->prepare("call up_buscar_registroexpediente(?)");
			$statement->bindParam(1,$registroexpediente->__GET('NroExpediente'));
			$statement->execute();
			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new RegistroExpediente();
				$per->__SET('id', $r->idregistroexpediente);
				$per->__SET('nombres', $r->NroExpediente);
				$per->__SET('apellidos', $r->Fecha);
				$per->__SET('dni', $r->IdFolio);
				$per->__SET('dni', $r->CodigoDoc);
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
