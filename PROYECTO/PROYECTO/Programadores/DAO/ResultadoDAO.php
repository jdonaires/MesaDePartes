<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Resultado.php');

class ResultadoDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Resultado $Resultado)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into resultado values(?,?,?)");
		$statement->bindParam(1,$Resultado->__GET('Id'));
    	$statement->bindParam(2,$Resultado->__GET('Fecha'));
		$statement->bindParam(3,$Resultado->__GET('CodigoDoc'));

    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar(Resultado $Resultado)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_buscar_Resultado(?)");
			$statement->bindParam(1,$Resultado->__GET('CodigoDoc'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$re = new Resultado();

				$re->__SET('Id', $r->idresultado);
				$re->__SET('Fecha', $r->Fecha);
				$re->__SET('CodigoDoc', $r->CodigoDoc);

				$result[] = $result;
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
