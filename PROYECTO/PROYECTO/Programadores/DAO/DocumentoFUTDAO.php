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


}
?>
