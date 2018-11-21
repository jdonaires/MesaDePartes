<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/RegistroExpediente.php');


class RegistroExpedienteDAO
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
  public function Registrar(RegistroExpediente $RegistroExpediente)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into registroexpediente values(?,?,?,?,?)");
		  $statement->bindParam(1,$RegistroExpediente->__GET('Id'));
    	$statement->bindParam(2,$RegistroExpediente->__GET('NExpediente'));
		  $statement->bindParam(3,$RegistroExpediente->__GET('FechaIngreso'));
   	 	$statement->bindParam(4,$RegistroExpediente->__GET('idFolio'));
    	$statement->bindParam(5,$RegistroExpediente->__GET('CodigoDoc'));
    	$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
  public function Listar(RegistroExpediente $RegistroExpediente)
  {
  try
  {
    $result = array();

    $statement = $this->pdo->prepare("call up_buscar_registroexpediente(?)");
    $statement->bindParam(1,$registroexpediente->__GET('NroExpediente'));
    $statement->execute();

    foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
    {
      $regexp = new Registroexp();

      $regexp->__SET('Id', $r->idregistroexp);
      $regexp->__SET('NExpediente', $r->NroExp);
      $regexp->__SET('FechaIngreso', $r->FechaIngreso);
          $regexp->__SET('idFolio', $r->IdFolio);
          $regexp->__SET('CodigoDoc', $r->CodigoDoc);

      $result[] = $regexp;
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
