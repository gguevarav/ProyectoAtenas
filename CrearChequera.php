<!--
	Módulo de creación de Usuarios
	Miércoles, 16 de mayo del 2018
	11:20 PM
	Gemis Daniel Guevara Villeda
	UMG - Morales Izabal
-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atenas, S. A.</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- se vincula al hoja de estilo para definir el aspecto del formulario de login -->
<link rel="stylesheet" type="text/css" href="text/estilo.css"> 

</head>
	<?php
		//include_once 'Seguridad/conexion.php';
		// Incluimos el archivo que valida si hay una sesión activa
		include_once "Seguridad/seguro.php";
		include_once "Seguridad/conexion.php";
		// Si en la sesión activa tiene privilegios de administrador puede ver el formulario
		if($_SESSION["PrivilegioUsuario"] == 1){
		?>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid"> 
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
					  <a class="navbar-brand" href="principal.php">Administración</a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="defaultNavbar1">
					  <ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bancos<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="CrearBanco.php">Crear banco</a></li>
								<li><a href="Banco.php">Lista de bancos</a></li>
								
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chequeras<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear chequera</a></li>
							<li><a href="Chequera.php">Lista de chequeras</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Crearcheque.php">Crear cheque</a></li>
							<li><a href="Listacheque.php">Lista de cheques</a></li>
						  </ul>
						</li>
						
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Crearcuenta.php">Crear cuenta</a></li>
							<li><a href="Cuenta.php">Listado de cuentas</a></li>
						  </ul>
						</li>
						
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liberación de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="LiberarCheque.php">Liberar un cheque</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Impresión de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Listacheque.php">Lista de cheques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="CrearUsuario.php">Crear usuario</a></li>
							<li><a href="Usuario.php">Lista de Usuarios</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cerrar Sesión<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="Seguridad/logout.php">Cerrar Sesión</a></li>
						  </ul>
						</li>
					  </ul>
				</div>
					<!-- /.navbar-collapse --> 
				  </div>
				  <!-- /.container-fluid --> 
				</nav>

				<div class="container">
				  <div class="row text-center">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-6 col-xs-offset-3">
							<h1 class="text-center">Creación de chequeras</h1>
							</div>
						</div>
				<!--Codigo de Chequera-->	
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
								<input type="text" class="form-control" name="CodigoChequera" placeholder="Codigo de chequera" id="CodigoChequera" aria-describedby="sizing-addon1" required>
							</div>
						</div>
				<!--ID de la cuenta -->
						<div class="col-xs-5 col-xs-offset+1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
								<!-- Tipo de Banco -->
											<select class="form-control" name="BancoCuenta" id="BancoCuenta">
											<option value="" disabled selected>Seleccione Cuenta</option>
												<!-- Contenido de la tabla -->
													<!-- Acá mostraremos los bancos y seleccionaremos el que deseamos eliminar -->
													<?php							
														$VerCuenta = "SELECT * FROM Cuenta";
														// Hacemos la consulta
														$resultado = $mysqli->query($VerCuenta);			
															while ($row = mysqli_fetch_array($resultado)){
																?>
																<option value="<?php echo $row['idCuenta'];?>"><?php echo $row['NombreCuenta'] ?></option>
													<?php
															}
													?>
													</select>
							</div>
						</div>
					</div>
					<br>
					<!--Nombre chequera-->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
								<input type="text" class="form-control" name="NombreChequera" placeholder="Nombre Chequera" id="NombreChequera" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						
						<!--Rango Inicial Chquera-->
						<div class="col-xs-5 col-xs-offset+1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
								<input type="text" class="form-control" name="RangoMinimoChequera" placeholder="Rango inicial chequera" id="NombreChequera" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					
					<!--Rango Final Chequera-->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-pencil"></i></span>
								<input type="text" class="form-control" name="RangoMaximoChequera" placeholder="Rango Final Chequera" id="RangoMaximoChequera" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					
					<!-- Resgistrar -->
					<div class="row">
						<div class="col-xs-12 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<div clss="btn-group">
									<button type="submit" class="btn btn-primary" id="CrearChequera" name="enviar">Registrar</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
					<br>
				</div>
				<!--Registramos Chequera-->
				<?php
					
					if (isset($_POST['enviar'])) {
						// Obtenemos los valores de todos los campos y los almacenamos en variables
						$CodigoChequera=$_POST['CodigoChequera'];
						$NumeroCuenta=$_POST['NombreChequera'];
						$RangoMinimoChequera=$_POST['RangoMinimoChequera'];
						$RangoMaximoChequera=$_POST['RangoMaximoChequera'];
												
						// Creamos la consulta para la inserción de los datos
						$Consulta = "INSERT INTO Chequera(CodigoChequera, NombreChequera, idCuenta, RangoMinimoChequera, RangoMaximoChequera) 
						Values('".$CodigoChequera."', '".$NombreChequera."', '".$BancoCuenta."', '".$RangoMinimoChequera."', '".$RangoMaximoChequera."');";
							
						if(!$resultado = $mysqli->query($Consulta)){
							echo "Error: La ejecución de la consulta falló debido a: \n";
							echo "Query: " . $Consulta . "\n";
							echo "Error: " . $mysqli->errno . "\n";
							exit;
						}
						else{
						?>
						<div class="alert alert-success">Cuenta registrada</div>
						<?php
						}
					}
				?>
				
				
				
				<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
				<script src="js/jquery-1.11.3.min.js"></script>

				<!-- Include all compiled plugins (below), or include individual files as needed --> 
				<script src="js/bootstrap.js"></script>
				<!-- Pie de página, se utilizará el mismo para todos. -->
				<footer>
					<hr>
					<div class="row">
						<div class="text-center col-md-6 col-md-offset-3">
							<h4>Atenas S. A.</h4>
							<p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="http://www.umg.edu.gt/" >www.umg.edu.gt</a></p>
						</div>
					</div>
					<hr>
				</footer> 
			</body>
	<?php
		// De lo contrario lo redirigimos al inicio de sesión
			} 
			else{
				echo "usuario no valido";
				header("location:index.php");
			}
		?>
</html>