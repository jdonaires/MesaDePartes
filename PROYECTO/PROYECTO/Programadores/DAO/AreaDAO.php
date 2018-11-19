/* Carmen */
<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/Area.php');

class AreaDAO
{


























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
