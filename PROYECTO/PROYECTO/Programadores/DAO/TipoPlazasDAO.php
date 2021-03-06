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






/*Funcion Registrar*/
public function Registrar(TipoPlazas $TipoPlazas)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into tipoplazas values(?,?)");
		$statement->bindParam(1,$TipoPlazas->__GET('Id'));
    	$statement->bindParam(2,$TipoPlazas->__GET('Tipo'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}



/*funcion listar*/
public function Listar(TipoPlazas $TipoPlazas)
	{
		try
		{
			$result = array();
/* Xiomara */
$statement = $this->pdo->prepare("call up_buscar_TipoPlazas(?)");
$statement->bindParam(1,$TipoPlazas->__GET('Tipo'));
$statement->execute();

foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
{
	$tip = new TipoPlazas();

	$tip->__SET('Id', $r->idtipoplazas);
	$tip->__SET('Tipo', $r->Tipo);

	$result[] = $tip;
}

return $result;
}
catch(Exception $e)
{
die($e->getMessage());
}
}
}
