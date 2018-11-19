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

						$statement = $this->pdo->prepare("call up_buscar_folio(?)");
						$statement->bindParam(1,$Folio->__GET('NroFolio'));
						$statement->execute();

						foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
						{
							$fol = new Folio();

							$fol->__SET('Id', $r->idfolio);
							$fol->__SET('CantidadDocumento', $r->CantidadDocumento);
							$fol->__SET('NroFolio', $r->NroFolio);


							$result[] = $fol;
						}

						return $result;
					}
					catch(Exception $e)
					{
						die($e->getMessage());
					}
				}
			}







































/* Astohuaman */
