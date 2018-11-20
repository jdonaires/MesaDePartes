/* Napan */






/* Napan */
/*Agregacion de Archivos con require_once*/
<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/TipoPlazas.php');









/*CREACION DE LA CLASE TIPOPLAZA*/
class TipoPlazasDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}




















/* Xiomara */
