?>
 <!doctype html>
 <html lang="en">
  <head>
    <title>Check Login</title>
    <title>Check Login and create session</title>

    <!--Etiquetas meta requeridas -->
    <meta charset="utf-8">
@@ -16,46 +15,55 @@
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>

  <body>

  <body>
  <div class="container">

<?php
 include 'conn.php';

	// Información de conexión. expediente
	include 'conn.php';

	// Variables de conexion
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 	// Verifica la conexión
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// enviado de forma
	// datos enviados desde el formulario login.html
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Consulta enviada a la base de datos
	$result = mysqli_query($conn, "SELECT Email, Password, Name FROM users WHERE Email = '$email'");

	// Variable $ fila mantenga el resultado de la consulta
	$row = mysqli_fetch_assoc($result);

	// Variable $ hash mantenga el hash de contraseña en la base de datos
	$hash = $row['Password'];

	if (password_verify($_POST['password'], $hash)) {

	/*
  La función password_Verify () verifica si la contraseña ingresada por el usuario
  coincide con el hash de contraseña en la base de datos. Si todo esta bien la sesion
  Se crea durante un minuto. Cambie 1 en $ _SESSION [inicio] a 5 para una sesión de 5 minutos.
	*/
	if (password_verify($_POST['password'], $hash)) {

		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['name'] = $row['Name'];
		$_SESSION['name'] = $row['Name'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
		$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;

		echo "<br><div class='alert alert-success' role='alert'><strong>Welcome!</strong> $row[Name]
			<br><br><a href='logout.php'>Logout</a></div>";
		echo "<div class='alert alert-success' role='alert'><strong>Welcome!</strong> $row[Name]
		<p><a href='edit-profile.php'>Edit Profile</a></p>
		<p><a href='logout.php'>Logout</a></p></div>";

	} else {
		echo "<br><div class='alert alert-danger' role='alert'>Email or Password are incorrects!<br>
			<a href='login.html'><strong>Please try again!</strong></a></div>";
	}
		echo "<div class='alert alert-danger' role='alert'>Email or Password are incorrects!
		<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";
	}
?>
</div>
 @@ -66,4 +74,4 @@
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 	</body>
</html>
</html>
