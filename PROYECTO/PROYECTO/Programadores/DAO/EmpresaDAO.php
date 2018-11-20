<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Empresa.php');

class EmpresaDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(Empresa $Empresa)
	{
		try
		{
		$statement = $this->pdo->prepare ("insert into empresa values(?,?,?)");
		$statement->bindvalue(1,$Empresa->__GET('Id'));
    	$statement->bindvalue(2,$Empresa->__GET('RazonSocial'));
		$statement->bindvalue(3,$Empresa->__GET('RUC'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	public function Listar(Empresa $Empresa)
	{
		try
		{
			$result = array();

			$statement = $this->pdo->prepare("call up_buscar_Empresa(?)");
			$statement->bindParam(1,$Empresa->__GET('RUC'));
			$statement->execute();

			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$emp = new Empresa();

				$emp->__SET('Id', $r->idempresa);
				$emp->__SET('RazonSocial', $r->RazonSocial);
				$emp->__SET('RUC', $r->RUC);


				$result[] = $emp;
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
