<?php
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();

if(isset($_POST['guardar']))
{
	$per->__SET('nombres',$_POST['nombres']);
	$per->__SET('apellidos',$_POST['apellidos']);
	$per->__SET('dni', $_POST['dni']);

	$perDAO->Registrar($per);
	header('Location: frmPersona.php');
}



?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CRUD</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">

                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="nombres" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellido</th>
                            <td><input type="text" name="apellidos" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">DNI</th>
                            <td><input type="text" name="dni" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
																<input type="submit" value="GUARDAR" name="guardar"class="pure-button pure-button-primary">
																<input type="submit" value="BUSCAR" name="buscar"class="pure-button pure-button-primary">
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>

				<!--ESTA CONDICION SIRVE PARA REALIZAR BUSQUEDA POR DNI-->

				<?php
				if(isset($_POST['buscar']))
				{
					$resultado = array();//VARIABLE TIPO RESULTADO
					$per->__SET('dni',          $_POST['dni']);//ESTABLECEMOS EL VALOR DEL DNI
					$resultado = $perDAO->Listar($per); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
					if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
					{
						?>
						<table class="pure-table pure-table-horizontal">
								<thead>
										<tr>
												<th style="text-align:left;">ID</th>
												<th style="text-align:left;">Nombres</th>
												<th style="text-align:left;">Apellidos</th>
												<th style="text-align:left;">DNI</th>
										</tr>
								</thead>
						<?php
						foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
							?>
								<tr>
										<td><?php echo $r->__GET('id'); ?></td>
										<td><?php echo $r->__GET('nombres'); ?></td>
										<td><?php echo $r->__GET('apellidos'); ?></td>
										<td><?php echo $r->__GET('dni'); ?></td>
								</tr>
						<?php endforeach;
					}
					else
					{
						echo 'no se encuentra en la base de datos!';
					}
					?>
					</table>
					<?php
				}
				?>

    </body>
</html>
