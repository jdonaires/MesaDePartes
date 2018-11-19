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








































/* Chipana */
