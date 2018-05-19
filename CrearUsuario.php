<!--
	Módulo de creación de Usuarios
	Martes, 17 de abril el 2018
	11:30 PM
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
								<li><a href="#">Eliminar banco</a></li>
								<li><a href="#">Editar banco</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Chequeras<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear chequera</a></li>
							<li><a href="#">Mantenimiento de chequeras</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administración de Niveles<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
							<li class="divider"></li>
							<li><a href="#">One more separated link</a></li>
						  </ul>
						</li>
						<li class="dropdown">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cuentas<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Cuentas</a></li>
							<li><a href="#">Mantenimiento de Cuentas</a></li>
						  </ul>
						</li>
						
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Liberación de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Liberar un cheque</a></li>
							<li><a href="#">Cheques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Impresión de Cheques<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Ceques en cola</a></li>
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
						  </ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión de Usuarios<span class="caret"></span></a>
						  <ul class="dropdown-menu" role="menu">
							<li><a href="#">Crear usuario</a></li>
							<li><a href="#">Eliminar Usuario</a></li>
							<li><a href="#">Editar usuario</a></li>
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
							<h1 class="text-center">Creación de usuario</h1>
							</div>
						</div>
						<!-- Contenedor del ícono del Usuario -->
						
							<div class="Icon">
								<!-- Icono de usuario -->
								<span class="glyphicon glyphicon-user"></span>
							</div>
						
					<!-- Nombre del usuario -->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="NombreUsuario" placeholder="Nombre" id="NombreUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Nombre de inicio de sesión del usuario -->
						<div class="col-xs-5">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="NombreInicioSesionUsuario" placeholder="Nombre de inicio de sesión" id="NombreInicioSesionUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Apellido del usuario -->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="ApellidoUsuario" placeholder="Apellido" id="ApellidoUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Contraseña del usuario -->
						<div class="col-xs-5">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="PasswordUsuario" placeholder="Contraseña" id="PaswordUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Teléfono del usuario -->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-earphone"></i></span>
								<input type="tel" class="form-control" name="TelefonoUsuario" placeholder="Teléfono" id="TelefonoUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Repetición de contraseña del usuario -->
						<div class="col-xs-5">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="RePasswordUsuario" placeholder="Ingrese nuevamente la contraseña" id="RePaswordUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
					</div>
					<br>
					<!-- Dirección del usuario -->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-home"></i></span>
								<input type="text" class="form-control" name="DireccionUsuario" placeholder="Dirección" id="DireccionUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Rol del usuario -->
						<div class="col-xs-4">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<select class="form-control" name="RolUsuario" id="RolUsuario">
									<option value="" disabled selected>Selecciona el rol del usuario</option>
										<option value="Administrador">Administrador</option>
										<option value="Auditor">Auditor</option>
										<option value="Gerente">Gerente</option>
										<option value="Pagador">Pagador</option>
								</select>
							</div>
						</div>
						<!-- Button trigger modal -->
						<div class="col-xs-1">
							<div class="input-group input-group-lg">
								<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ModalCrearUsuario">+</button>
							</div>
						</div>
					</div>
					<br> 
					<!-- Correo del usuario -->
					<div class="row">
						<div class="col-xs-5 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" class="form-control" name="CorreoUsuario" placeholder="Correo" id="CorreoUsuario" aria-describedby="sizing-addon1" required>
							</div>
						</div>
						<!-- Grupo del usuario -->
						<div class="col-xs-4">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<select class="form-control" name="RolUsuario" id="RolUsuario">
								<option value="" disabled selected>Selecciona el grupo al que pertenece el usuario</option>
									<option value="Administrador">Administrador</option>
									<option value="Auditor">Auditoría</option>
									<option value="Gerente">Gerencia</option>
									<option value="Pagador">Pagos</option>
								</select>
							</div>
						</div>
						<!-- Button trigger modal -->
						<div class="col-xs-1">
							<div class="input-group input-group-lg">
								<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ModalCrearGrupo">+</button>
							</div>
						</div>
					</div>
					<br>
					<!-- Puesto del usuario -->
					<div class="row">
						<div class="col-xs-4 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<select class="form-control" name="PuestoUsuario" id="PuestoUsuario">
								<option value="" disabled selected>Puesto</option>
									<optgroup label="Gerencia">
										<option value="GerenteGeneral">Gerente General</option>
									</optgroup>
									<optgroup label="Auditoría">
										<option value="JefeAuditoría">Jefe de Auditoría</option>
										<option value="AsistenteAuditoria">Asistente de Auditoría</option>
									</optgroup>
									<optgroup label="Pagos">
										<option value="JefePagos">Jefe de Pagos</option>
									</optgroup>
								</select>
							</div>
						</div>
						<!-- Button trigger modal -->
						<div class="col-xs-1">
							<div class="input-group input-group-lg">
								<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#ModalCrearPuesto">+</button>
							</div>
						</div>
						<!-- Rango de cheques que creará el usuario -->
						<div class="col-xs-4">
							<div class="input-group input-group-lg">
								<span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
								<select class="form-control" name="RolUsuario" id="RolUsuario">
								<option value="" disabled selected>Selecciona el rango monetario con que podrá operar el usuario</option>
									<option value="Administrador">0 - 1,000</option>
									<option value="Auditor">1,001 - 10,000</option>
									<option value="Gerente">10,001 - 25,000</option>
									<option value="Pagador">25,001 - 50,000</option>
								</select>
							</div>
						</div>
						<!-- Button trigger modal -->
						<div class="col-xs-1">
							<div class="input-group input-group-lg">
								<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">+</button>
							</div>
						</div>
					</div>
					<br>
					<!-- Resgistrar -->
					<div class="row">
						<div class="col-xs-12 col-xs-offset-1">
							<div class="input-group input-group-lg">
								<div clss="btn-group">
									<button type="button" class="btn btn-primary">Registrar</button>
									<button type="button" class="btn btn-danger">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal para crear puesto -->
				<div class="modal fade slide left" id="ModalCrearPuesto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo puesto</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="name">Codigo del puesto</label>
							<input type="text" name="CodigoPuesto" id="CodigoPuesto" class="form-control" placeholder="Codigo de puesto" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Nombre del puesto</label>
							<input type="text" name="NombreNuevoPuesto" id="NombreNuevoPuesto" class="form-control" placeholder="Nombre del puesto" value="" required/>
						  </div>
						  <input type="submit" name="GuardarPuesto" class="btn btn-success btn-lg" value="Crear">
						</form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					  </div>
					</div>
				  </div>
				</div>
				<!-- 
				<?php
					include_once "Seguridad/conexion.php";
					// Código php para el modal de creación de puesto
					if (isset($_POST['GuardarPuesto'])) {
						echo "<script languaje='javascript'>
							alert('Guardar puesto');
							</script>";
					}
					// Código php para el modal de creación de puesto
					if (isset($_POST['GuardarGrupo'])) {
						echo "<script languaje='javascript'>
							alert('Guardar Grupo');
							</script>";
					}					
				?> 
				
				<!-- Modal para crear Grupo al que pertenece -->
				<div class="modal fade slide left" id="ModalCrearGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

						</button>
						<h1 class="modal-title" id="myModalLabel">Crear nuevo grupo</h1>

					  </div>
					  <div class="modal-body">
						<p class="lead">Ingrese los datos</p>
						<form method="post" id="myForm">
						  <div class="form-group">
							<label for="name">Codigo del grupo</label>
							<input type="text" name="CodigoGrupo" id="CodigoGrupo" class="form-control" placeholder="Codigo de grupo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Nombre del grupo</label>
							<input type="text" name="NombreNuevoGrupo" id="NombreNuevoGrupo" class="form-control" placeholder="Nombre del grupo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Rango del grupo</label>
							<input type="text" name="RangoNuevoGrupo" id="RangoNuevoGrupo" class="form-control" placeholder="Rango del grupo" value="" required/>
						  </div>
						  <div class="form-group">
							<label for="email">Puesto del grupo</label>
							<input type="text" name="PuestoNuevoGrupo" id="PuestoNuevoGrupo" class="form-control" placeholder="Puesto del grupo" value="" required/>
						  </div>
						  <input type="submit" name="GuardarGrupo" class="btn btn-success btn-lg" value="Crear">
						</form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					  </div>
					</div>
				  </div>
				</div>			
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
