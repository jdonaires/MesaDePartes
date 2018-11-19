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
}

?>
