/* Carmen */
<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Area.php');

class AreaDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Area $Area)
	{
		try
		{
			$statement = $this->pdo->prepare("insert into area values(?,?)");
		  $statement->bindParam(1,$Area->__GET('Id'));
   		$statement->bindParam(2,$Area->__GET('Area'));
      $statement -> execute();

		 } catch (Exception $e)
		 {
		die($e->getMessage());
	}
}

	public function Listar(Area $Area)
	{
		try
		{
			$result = array();

/*Chipana*/

$statement = $this->pdo->prepare("call up_buscar_Area(?)");
$statement->bindParam(1,$Area->__GET('Area'));
$statement->execute();
foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$ar = new Area();

				$ar->__SET('Id', $r->idarea);
				$ar->__SET('Area', $r->Area);

				$result[] = $ar;
			}







































/* Chipana */
