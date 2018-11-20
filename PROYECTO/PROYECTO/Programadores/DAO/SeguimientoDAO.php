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

}
?>
