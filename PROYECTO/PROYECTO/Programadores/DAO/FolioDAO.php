/* Aaaron */
<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Folio.php');

class folioDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Folio $Folio)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into folio values(?,?,?)");
		$statement->bindParam(1,$Folio->__GET('Id'));
    	$statement->bindParam(2,$Folio->__GET('CantidadDocumento'));
		$statement->bindParam(3,$Folio->__GET('NroFolio'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar(Folio $Folio)
	{
		try
		{
			$result = array();








































/* Astohuaman */
