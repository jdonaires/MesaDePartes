<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Personal.php');

class personalDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(Personal $Personal)
		{
			try
			{
			$statement = $this->pdo->prepare("insert into personal values(?,?,?,?,?,?)");
			$statement->bindParam(1,$Personal->__GET('Id'));
	    $statement->bindParam(2,$Personal->__GET('Cargo'));
			$statement->bindParam(3,$Personal->__GET('IdPersona'));
			$statement->bindParam(4,$Personal->__GET('Usuario'));
			$statement->bindParam(5,$Personal->__GET('Contraseña'));
			$statement->bindParam(6,$Personal->__GET('Estado'));
	    $statement -> execute();

			} catch (Exception $e)
			{
				die($e->getMessage());
			}
		}
