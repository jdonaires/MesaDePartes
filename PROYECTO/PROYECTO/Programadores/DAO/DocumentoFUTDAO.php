<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/DocumentoFut.php');

class DocumentoFutDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

  public function Registrar(DocumentoFut $DocumentoFut)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into documentofut values(?,?,?,?)");
		$statement->bindParam(1,$DocumentoFut->__GET('CodigoDoc'));
    	$statement->bindParam(2,$DocumentoFut->__GET('CasualResignacion'));
		$statement->bindParam(3,$DocumentoFut->__GET('IdTipoPlazas'));
   	 	$statement->bindParam(4,$DocumentoFut->__GET('IdPersonal'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

  public function Listar(DocumentoFut $DocumentoFut)
	{
		try
		{

		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
