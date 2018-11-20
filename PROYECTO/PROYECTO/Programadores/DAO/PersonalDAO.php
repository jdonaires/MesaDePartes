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
