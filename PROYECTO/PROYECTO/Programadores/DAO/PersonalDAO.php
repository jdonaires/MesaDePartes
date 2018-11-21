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
		public function Listar(Personal $personal)
			{
				try
				{

					$result = array();

					$statement = $this->pdo->prepare("call up_buscar_personal(?)");
					$statement->bindParam(1,$personal->__GET('Cargo'));
					$statement->execute();

					foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
					{
						$perl = new Personal();

						$perl->__SET('Id', $r->idcargo);
						$perl->__SET('Cargo', $r->Cargo);
						$perl->__SET('IdPersona', $r->IdPersona);
						$perl->__SET('Usuario', $r->Usuario);
						$perl->__SET('Contraseña', $r->Contraseña);
						$perl->__SET('Estado', $r->Estado);

						$result[] = $perl;
					}
					return $result;
					}
						catch(Exception $e)
					{
						die($e->getMessage());
					}
		  }
}
?>
