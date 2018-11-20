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
}

?>
